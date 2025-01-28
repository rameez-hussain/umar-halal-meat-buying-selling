<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->float('magna')->nullable();
            $table->float('hikmat')->nullable();
            $table->float('primer')->nullable();
            $table->float('jaan')->nullable();
            $table->float('adam')->nullable();
            $table->float('miscellaneous')->nullable();
            $table->string('invoice')->nullable();
            $table->timestamps();
        });
    }
};
