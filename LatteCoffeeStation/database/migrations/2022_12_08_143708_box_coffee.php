<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxCoffee', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('usuario_id')
            //     ->constrained('usuarios')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            $table->enum('torra', ['clara','media','escura']);
            $table->string('graos');
            $table->string('capsula');
            $table->string('espresso');
            $table->string('irish');
            $table->string('latte');
            $table->string('macchiato');
            $table->string('mocha');
            $table->string('cappuccino');
            $table->string('cGelado');
            $table->text('observacoes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
