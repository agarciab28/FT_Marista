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
            $table->string('curp',30)->unique();
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
        
        CREATE PROCEDURE check_tipom (nom VARCHAR(50))
        BEGIN
        DECLARE var INT DEFAULT 0;
       select count(*) INTO var  from usuario where tipoDeUsuario=nom;
       IF (nom= 'medico') then
            IF  (var > 4) THEN
                SIGNAL SQLSTATE '45000' SET message_text = 'Limite de maestros alcanzado';
            END IF;
        END IF;
        IF (nom = 'fisioterapeuta') then
        IF  (var > 4) THEN
            SIGNAL SQLSTATE '45000' SET message_text = 'Limite de fisioterapeutas alcanzado';
        END IF;
    END IF;      
    IF (nom = 'pasante') then
    IF  (var > 6) THEN
        SIGNAL SQLSTATE '45000' SET message_text = 'Limite de pasantes alcanzado';
    END IF;
END IF;  
IF (nom = 'practicante') then
IF  (var > 10) THEN
    SIGNAL SQLSTATE '45000' SET message_text = 'Limite de practicantes alcanzado';
END IF;
END IF;  
IF (nom = 'administrador') then
IF  (var > 1) THEN
    SIGNAL SQLSTATE '45000' SET message_text = 'Limite de administradores alcanzado';
END IF;
END IF; 
IF (nom = 'rectoria') then
IF  (var > 1) THEN
    SIGNAL SQLSTATE '45000' SET message_text = 'Limite de rectores alcanzado';
END IF;
END IF; 
IF (nom = 'coordinador') then
IF  (var > 1) THEN
    SIGNAL SQLSTATE '45000' SET message_text = 'Limite de coordinadores alcanzado';
END IF;
END IF; 
        END;
        
");

    
DB::connection()->getPdo()->exec("
-- Create the INSERT trigger
CREATE TRIGGER check_tipo_m BEFORE INSERT ON `clinica`.`usuario`
FOR EACH ROW 
BEGIN
  CALL check_tipom(NEW.tipoDeUsuario);
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
