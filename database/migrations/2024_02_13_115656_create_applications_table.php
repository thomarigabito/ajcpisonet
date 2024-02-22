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
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('contact');
            $table->datetime('birthday');
            $table->string('gender');
            $table->string('plan');
            $table->string('email');
            $table->string('street');
            $table->string('barangay');
            $table->string('town');
            $table->string('province');
            $table->string('landmark');
            $table->string('uploadid', 300);
            $table->string('idselfie', 300);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
