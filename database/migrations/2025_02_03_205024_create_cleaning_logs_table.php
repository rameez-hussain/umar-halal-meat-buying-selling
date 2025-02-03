<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cleaning_logs', function (Blueprint $table) {
            $table->id();
            $table->string('area_or_equipment');
            $table->string('method');
            $table->string('done_by');
            $table->timestamps();
        });
    }
};
