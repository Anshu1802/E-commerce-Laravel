<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signup_ecommerce', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile')->nullable();
            $table->String('Address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('ipaddress')->nullable();
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
        Schema::dropIfExists('signup_ecommerce');
    }
};
