<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buy_stocks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('stock_id');
            $table->decimal('amount', 10, 2);
            $table->decimal('pnl', 11, 2)->nullable();
            $table->decimal('current_price', 15, 2)->nullable();

            $table->decimal('initial_price', 10, 2);
            $table->decimal('limit_price', 10, 2)->nullable();
            $table->tinyInteger('status')->default(1);  // 1: Pending, 2: Filled, 0: Cancelled
            $table->tinyInteger('order_type')->default(1);  // 1: Market, 2: Limit
            $table->timestamp('filled_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_stocks');
    }
};
