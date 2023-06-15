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
        Schema::create('orders', function (Blueprint $table) {
                $table->id('OrderID');
                $table->unsignedBigInteger('CustomerID');
                $table->unsignedBigInteger('EmployeeID');
                $table->date('OrderDate');
                $table->date('RequireDate');
                $table->date('ShippedDate')->nullable();
                $table->unsignedBigInteger('ShipVia');
                $table->decimal('Freight', 10, 2);
                $table->string('ShipName');
                $table->string('ShipAddress');
                $table->string('ShipCity');
                $table->string('ShipRegion')->nullable();
                $table->string('ShipPostalCode');
                $table->string('ShipCountry');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
