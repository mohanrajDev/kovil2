<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donor_id');
            $table->enum('type', [
                'festival',
                'marriage',
                'birthday',
                'others',
                'unknown'
            ]);
            $table->string('festival_reason');
            $table->string('birthday_reason');
            $table->string('marriage_reason');
            $table->string('others_reason');
            $table->dateTime('action_date');
            $table->string('amount');
            $table->string('via');
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
        Schema::dropIfExists('donations');
    }
}
