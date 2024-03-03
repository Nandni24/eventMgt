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
        Schema::create('servicesevents', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('vid');
            $table->foreign('vid')->references('vid')->on('vendorregi');
            $table->string('sname');
            $table->string('sdescription');
            $table->string('sprice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicesevents');
    }
};
