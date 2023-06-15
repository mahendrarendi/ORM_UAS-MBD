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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('ProductID');
            $table->string('ProductName');
            $table->integer('SupplierID');
            $table->integer('CategoryID');
            $table->string('QuantityPerUnit')->nullable();
            $table->integer('UnitsInStock')->nullable();
            $table->integer('UnitsOnOrder')->nullable();
            $table->integer('ReorderLevel')->nullable();
            $table->boolean('Discontinued')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
