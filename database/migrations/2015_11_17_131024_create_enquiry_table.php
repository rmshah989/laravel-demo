<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiry', function (Blueprint $table) {
            $table->increments('id');
    	    $table->integer('user_id')->index();// this will contain our foreign key to the USER table
    	    $table->integer('service_id');// this will contain our foreign key to the SERVICE table
    	    $table->integer('sa_id');// this will contain our foreign key to the SA table

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
        Schema::drop('enquiry');
    }
}
