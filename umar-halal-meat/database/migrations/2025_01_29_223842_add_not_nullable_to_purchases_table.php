<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->float('magna')->nullable(false)->change();
            $table->float('hikmat')->nullable(false)->change();
            $table->float('primer')->nullable(false)->change();
            $table->float('jaan')->nullable(false)->change();
            $table->float('adam')->nullable(false)->change();
            $table->float('miscellaneous')->nullable(false)->change();
        });
    }
};
