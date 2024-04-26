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
            $table->string('works')->nullable();
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
        Schema::dropIfExists('tapwaterticket_feodosia');
    }
}
