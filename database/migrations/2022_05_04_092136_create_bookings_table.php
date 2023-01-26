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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('address')->nullable();
            $table->string('DoB')->nullable();
            $table->string('email_id')->unique()->nullable();


            $table->string('model_desc')->nullable();
            $table->string('variant_cd')->nullable();
            $table->string('variant_desc')->nullable();
            $table->string('color_code')->nullable();
            $table->string('color_desc')->nullable();
            $table->string('make_year')->nullable();
            $table->string('fule_desc')->nullable();  
            $table->string('variant')->nullable();

            $table->string('booking_date')->nullable();
            $table->string('booking_no')->nullable();
            $table->string('waiting_time')->nullable();
            $table->string('waiting_date')->nullable();
            $table->string('RM_id')->nullable();
            $table->string('TL_id')->nullable();
            $table->string('allotment_date')->nullable();

            $table->string('invoice_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('delivery_date')->nullable();

            $table->string('delivery_RM_id')->nullable();

            $table->string('delivery_TL_id')->nullable();
            $table->string('flag');

           
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
        Schema::dropIfExists('bookings');
    }
}
