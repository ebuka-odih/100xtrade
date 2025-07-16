<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trade_pairs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('symbol')->unique();
            $table->string('name');
            $table->enum('market', ['stock', 'crypto', 'forex']);
            $table->string('base_currency');
            $table->string('quote_currency');
            $table->decimal('current_price', 20, 8)->default(0);
            $table->decimal('change_24h', 10, 4)->default(0);
            $table->decimal('volume_24h', 20, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->decimal('min_amount', 10, 2)->default(10.00);
            $table->decimal('max_amount', 20, 2)->default(100000.00);
            $table->integer('price_precision')->default(2);
            $table->integer('amount_precision')->default(2);
            $table->timestamps();

            $table->index(['market', 'is_active']);
            $table->index('symbol');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trade_pairs');
    }
}; 