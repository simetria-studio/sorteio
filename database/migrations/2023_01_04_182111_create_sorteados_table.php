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
        Schema::create('sorteados', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
            $table->string('sorteio_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_cpf')->nullable();
            $table->string('user_telefone')->nullable();
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
        Schema::dropIfExists('sorteados');
    }
};
