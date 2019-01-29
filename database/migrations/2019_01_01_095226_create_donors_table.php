<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('district');
            $table->string('state');
            $table->integer('pincode');
            $table->enum('type', [
              'yearly',
              'monthly',
              'quarterly',
              'half_yearly',
              'weekly',
              'daily',
              'festival_season',
              'happy_days',
              'new',
              'unknown',
              'others'  
            ]);
            $table->string('others_detail')->nullable();
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
        Schema::dropIfExists('donors');
    }
}
