<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id',30);
            $table->string('curp',30);
            $table->string('nombre',70);
            $table->text('password');
            $table->string('apellidoP',45)->nullable();
            $table->string('apellidoM',45);
            $table->string('telefono',15)->nullable();
            $table->string('correoElectronico',70)->nullable();
            $table->string('nombreDeUsuario',45);
            $table->string('tipoDeUsuario', 50)->nullable();
            $table->text('cedulaProfesional')->nullable();
            $table->text('cedulaMoE')->nullable();
            $table->string('updated_at', 20);
            $table->string('created_at', 20);
        });
      
        DB::connection()->getPdo()->exec("
      DROP PROCEDURE IF EXISTS check_tipom;
      DROP PROCEDURE IF EXISTS check_tipof;
      DROP PROCEDURE IF EXISTS check_tipor;
      DROP PROCEDURE IF EXISTS check_tipop;
      DROP PROCEDURE IF EXISTS check_tipopr;
      DROP PROCEDURE IF EXISTS check_tipoc;
      DROP PROCEDURE IF EXISTS check_tipoa;
");

      DB::connection()->getPdo()->exec("
        -- Create the procedure maestro
        
        CREATE PROCEDURE check_tipom (nombreDeUsuario VARCHAR(45))
        BEGIN
        DECLARE var INT DEFAULT 0;
       select count(*) INTO var  from usuario where tipoDeUsuario=nombreDeUsuario;
            IF  (var > 4) THEN
                SIGNAL SQLSTATE '45000' SET message_text = 'Limite de maestros alcanzado';
            END IF;
        END;
");
DB::connection()->getPdo()->exec("
-- Create the procedure fisioterapeuta

CREATE PROCEDURE check_tipof (nombreDeUsuario VARCHAR(45))
BEGIN
DECLARE var INT DEFAULT 0;
select count(*) INTO var  from usuario where tipoDeUsuario=nombreDeUsuario;
    IF (var > 4) THEN
        SIGNAL SQLSTATE '45000' SET message_text = 'Limite de  fisioterapeutas alcanzado';
    END IF;
END;
");
DB::connection()->getPdo()->exec("
-- Create the procedure pasante

CREATE PROCEDURE check_tipop (nombreDeUsuario VARCHAR(45))
BEGIN
DECLARE var INT DEFAULT 0;
select count(*) INTO var  from usuario where tipoDeUsuario=nombreDeUsuario;
    IF NOT (var >6) THEN
        SIGNAL SQLSTATE '45000' SET message_text = 'Limite de  pasantes alcanzado';
    END IF;
END;
");
DB::connection()->getPdo()->exec("
-- Create the procedure practicante

CREATE PROCEDURE check_tipopr (nombreDeUsuario VARCHAR(45))
BEGIN
DECLARE var INT DEFAULT 0;
select count(*) INTO var  from usuario where tipoDeUsuario=nombreDeUsuario;
    IF NOT (var > 10) THEN
        SIGNAL SQLSTATE '45000' SET message_text = 'Limite de practicantes alcanzado';
    END IF;
END;
");
DB::connection()->getPdo()->exec("
-- Create the procedure rectoria

CREATE PROCEDURE check_tipor (nombreDeUsuario VARCHAR(45))
BEGIN
DECLARE var INT DEFAULT 0;
select count(*) INTO var  from usuario where tipoDeUsuario=nombreDeUsuario;
    IF NOT (var > 1) THEN
        SIGNAL SQLSTATE '45000' SET message_text = 'Limite de rectores alcanzado';
    END IF;
END;
");
DB::connection()->getPdo()->exec("
-- Create the procedure admin

CREATE PROCEDURE check_tipoa (nombreDeUsuario VARCHAR(45))
BEGIN
DECLARE var INT DEFAULT 0;
select count(*) INTO var  from usuario where tipoDeUsuario=nombreDeUsuario;
    IF  (var > 1) THEN
    SELECT var as '';
        SIGNAL SQLSTATE '45000' SET message_text = 'Limite de administradores alcanzado';
    END IF;
    SELECT var as '';
END;
");
DB::connection()->getPdo()->exec("
-- Create the procedure cordinadores

CREATE PROCEDURE check_tipoc (nombreDeUsuario VARCHAR(45))
BEGIN
DECLARE var INT DEFAULT 0;
select count(*) INTO var  from usuario where tipoDeUsuario=nombreDeUsuario;
    IF NOT (var > 1) THEN
        SIGNAL SQLSTATE '45000' SET message_text = 'Limite de coordinadores alcanzado';
    END IF;
END;
");

         DB::connection()->getPdo()->exec("
        -- Create the INSERT trigger
        CREATE TRIGGER check_tipo_m BEFORE INSERT ON usuario
        FOR EACH ROW 
        BEGIN
        IF  NEW.nombreDeUsuario='medico' then
            CALL check_tipom(NEW.nombreDeUsuario);
            END IF;
        IF  NEW.nombreDeUsuario='fisioterapeuta' then
            CALL check_tipof(NEW.nombreDeUsuario);
        END IF;
        IF  NEW.nombreDeUsuario='pasante' then
            CALL check_tipop(NEW.nombreDeUsuario);
        END IF;
        IF  NEW.nombreDeUsuario='practicante' then
        CALL check_tipopr(NEW.nombreDeUsuario);
        END IF;
        IF  NEW.nombreDeUsuario='administrador' then
        CALL check_tipoa(NEW.nombreDeUsuario);
        END IF;
        IF  NEW.nombreDeUsuario='coordinador' then
        CALL check_tipoc(NEW.nombreDeUsuario);
        END IF;
        IF  NEW.nombreDeUsuario='rectoria' then
        CALL check_tipor(NEW.nombreDeUsuario);
        END IF;
        END;
        
        ");
    
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
  
    }
}
