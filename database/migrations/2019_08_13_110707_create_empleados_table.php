<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* creamos las tablas dentro de nuetsra BBDD 
        hacemos la migracion pero no es suficiente hya que enviarlas al motor para que se creen como tal, 
        esto se hace yendo al CMD y colocando en la ruta de la carpeta php artisan migrate*/
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->string('email')->unique();
            $table->string('lugar_nacimiento');
            $table->enum('sexo',['masculino','feminino','no especificado']);
            $table->enum('estado_civil',['soltero', 'casado']);
            $table->integer('telefono');
            $table->timestamps();
        });
    }
    /* schema permite crear la tabla en la base de datos */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
