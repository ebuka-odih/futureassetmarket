<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('stock_orders', function (Blueprint $table) {
            $table->decimal('pnl', 10, 2)->nullable();
            $table->decimal('current_price', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stock_orders', function (Blueprint $table) {
           $table->dropColumn(['pnl', 'current_price']);
        });
    }
};
