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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('old_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('category')->nullable();
            $table->boolean('availability')->default(true);
            $table->decimal('rating', 3, 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('old_price');
            $table->dropColumn('quantity');
            $table->dropColumn('category');
            $table->dropColumn('availability');
            $table->dropColumn('rating');
        });
    }
};
