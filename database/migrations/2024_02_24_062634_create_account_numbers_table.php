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
        Schema::create('account_numbers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_number');
            $table->timestamps();
            $table->foreign('account_number')
                ->references('accountNumber')
                ->on('allclients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_numbers');
    }
};
