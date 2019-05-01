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
        -- Create the procedure maestro
        DROP PROCEDURE IF EXISTS `check_tipo`;
        CREATE PROCEDURE check_maestro (nombreDeUsuario VARCHAR(45))
        BEGIN
        DECLARE m int(10);
        set m=(select count(*) from usuario where 'tipoDeUsuario'=nombreDeUsuario);
        IF(nombreDeUsuario=='maestro') then
            IF NOT (m <= 4) THEN
                SIGNAL SQLSTATE '45000' SET message_text = 'Limite de maestros alcanzado';
            END IF;
        ELSEIF(nombreDeUsuario=='terapeuta') then
            IF NOT (m <= 4) THEN
            SIGNAL SQLSTATE '45000' SET message_text = 'Limite de fisioterapeutas alcanzado';
             END IF;
        ELSEIF(nombreDeUsuario=='pasante') then
             IF NOT (m <= 6) THEN
             SIGNAL SQLSTATE '45000' SET message_text = 'Limite de pasantes alcanzado';
              END IF;
        ELSEIF(nombreDeUsuario=='practicantes') then
              IF NOT (m <= 10) THEN
              SIGNAL SQLSTATE '45000' SET message_text = 'Limite de practicantes alcanzado';
               END IF;   
        ELSEIF(nombreDeUsuario=='administrador') then
               IF NOT (m <= 1) THEN
               SIGNAL SQLSTATE '45000' SET message_text = 'Limite de administradores alcanzado';
                END IF;   
        ELSEIF(nombreDeUsuario=='coordinador') then
                IF NOT (m <= 1) THEN
                SIGNAL SQLSTATE '45000' SET message_text = 'Limite de coordinadores alcanzado';
                 END IF;
        ELSEIF(nombreDeUsuario=='rector') then
                 IF NOT (m <= 1) THEN
                 SIGNAL SQLSTATE '45000' SET message_text = 'Limite de rectores alcanzado';
                  END IF;
        END IF;
        END IF;
        END IF;
        END IF;
        END IF;
        END IF;
        END IF;
        END;

        -- Create the INSERT trigger
        CREATE TRIGGER check_tipo BEFORE INSERT ON usuario
        FOR EACH ROW
        BEGIN
            CALL check_tipo(NEW.nombreDeUsuario);
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
