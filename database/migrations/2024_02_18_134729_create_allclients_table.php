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
        Schema::create('allclients', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('id');
            $table->string('fullname');
            $table->string('address');
            $table->string('plan');
            $table->id('accountNumber');
            $table->timestamps();
            // $table->foreign('id')
            //         ->references('id')
            //         ->on('applications')
            //         ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allclients');
    }
};
