<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTapwaterticketFeodosiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapwaterticket_feodosia', function (Blueprint $table) {
            $table->id('tapwaterticket_id');
            $table->string('date');
            $table->string('time');
            $table->string('type');
            $table->text('description');
            $table->integer('radio');
            $table->string('phone');
            $table->string('district');
            $table->string('city');
            $table->string('street');
            $table->string('building');
            $table->string('addressmap');
            $table->text('notes');
            $table->string('cityarea');
            $table->string('works');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tapwaterticket_feodosia');
    }
}
