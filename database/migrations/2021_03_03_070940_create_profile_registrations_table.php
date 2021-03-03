<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('company_domain');
            $table->string('trade_role');
            $table->string('company_name');
            $table->string('photo');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact');
            $table->string('city');
            $table->string('address');
            $table->string('token');
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
        Schema::dropIfExists('profile_registrations');
    }
}
