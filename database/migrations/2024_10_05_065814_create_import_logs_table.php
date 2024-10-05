<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportLogsTable extends Migration
{
    public function up()
    {
        Schema::create('import_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade');
            $table->string('file_name', 255);
            $table->integer('total_records');
            $table->integer('success_count');
            $table->integer('failure_count');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('import_logs');
    }
}
