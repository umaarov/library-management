<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->string('phone', 20);
            $table->timestamps();
        });
    }

    public function down():
    {
        Schema::dropIfExists('admins');
    }
};
