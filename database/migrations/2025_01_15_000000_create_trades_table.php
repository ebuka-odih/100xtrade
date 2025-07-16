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
        Schema::create('trades', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->enum('market', ['stock', 'crypto', 'forex']);
            $table->string('symbol');
            $table->enum('type', ['buy', 'sell']);
            $table->decimal('amount', 15, 2);
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('stop_loss', 15, 2)->nullable();
            $table->decimal('take_profit', 15, 2)->nullable();
            $table->enum('status', [1, 2, 3, 4])->default(1); // 1=pending, 2=active, 3=closed, 4=cancelled
            $table->decimal('pnl', 15, 2)->default(0);
            $table->decimal('entry_price', 15, 2)->nullable();
            $table->decimal('exit_price', 15, 2)->nullable();
            $table->decimal('quantity', 15, 4)->nullable();
            $table->enum('order_type', ['market', 'limit', 'stop'])->default('market');
            $table->decimal('limit_price', 15, 2)->nullable();
            $table->timestamp('filled_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
            
            $table->index(['user_id', 'status']);
            $table->index(['market', 'symbol']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
}; 