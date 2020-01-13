<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('user_id');
            $table->integer('package_id');
            $table->dateTime('booking_date');
            $table->enum('branch',['KUANTAN', 'SHAH ALAM', 'BANGI', 'JOHOR BAHRU']);
            $table->enum('gender',['L','P']);
            $table->integer('status')->default(1); // 0-Pending, 1-Success, 3-Cancel
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
