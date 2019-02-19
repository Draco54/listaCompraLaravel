<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productouser', function (Blueprint $table) {
            $table->increments('id');
        $table->decimal('producto_id',8,2)->unsigned();
        $table->decimal('user_id',8,2)->unsigned();
        $table->string('pendiente');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productouser');
    }
}
