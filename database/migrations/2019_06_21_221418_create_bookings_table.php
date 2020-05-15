<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->integer('total');
            $table->string('payment_type');
            $table->timestamps();
        });
       
     /*   Schema::table('bookings', function (Blueprint $table) {
            $table->integer('customer_id');
        
            $table->foreign('customer_id')
            ->references('customer_id')->on('customers')
            ->onDelete('cascade'); 
            
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
