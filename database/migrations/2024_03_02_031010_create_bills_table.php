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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('allclients')->onUpdate('cascade')->onDelete('cascade');
            $table->string('fullname');
            $table->string('accountnumber')->nullable();
            $table->integer('plan');
            $table->string('email');
            $table->string('contact');
            $table->integer('january')->nullable();
            $table->integer('febuary')->nullable();
            $table->integer('march')->nullable();
            $table->integer('april')->nullable();
            $table->integer('may')->nullable();
            $table->integer('june')->nullable();
            $table->integer('july')->nullable();
            $table->integer('august')->nullable();
            $table->integer('september')->nullable();
            $table->integer('october')->nullable();
            $table->integer('november')->nullable();
            $table->integer('december')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
