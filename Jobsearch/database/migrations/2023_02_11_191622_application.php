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
        //
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('Oname');
            $table->integer('number');
            $table->string('cover')->nullable();
            $table->string('resume')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('referee')->nullable();
            $table->string('jobtitle')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        //
    }
};
