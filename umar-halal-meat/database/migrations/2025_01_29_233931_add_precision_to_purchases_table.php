<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->float('magna', 2)->change();
            $table->float('hikmat', 2)->change();
            $table->float('primer', 2)->change();
            $table->float('jaan', 2)->change();
            $table->float('adam', 2)->change();
            $table->float('miscellaneous', 2)->change();
        });
    }
};
