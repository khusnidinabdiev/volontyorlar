<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sends', function (Blueprint $table) {
            $table->string('name');
            $table->string('manzil');
            $table->string('lavozim');
            $table->integer('telefon')->unique();
            $table->integer('telegram')->unique();
            $table->string('eshitishingiz');
            $table->string('sabab');
            $table->string('vaqtingiz');
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
        Schema::dropIfExists('sends');
    }
}
