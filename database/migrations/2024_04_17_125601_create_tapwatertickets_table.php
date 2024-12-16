<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTapwaterticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapwatertickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id')->nullable();// временно nullable, потом при составлении заявки будет приствоен id филиала
            $table->foreign('filial_id')->references('id')->on('filials')->onDelete('cascade');
            $table->string('date');
            $table->string('time');
            $table->string('service')->default('Водопровод');
            $table->string('type');
            $table->string('description');
            $table->integer('radio')->nullable();
            $table->string('phone')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('building')->nullable();
            $table->string('addressmap')->nullable();
            $table->string('notes')->nullable();
            $table->string('cityarea')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tapwatertickets');
    }
}
