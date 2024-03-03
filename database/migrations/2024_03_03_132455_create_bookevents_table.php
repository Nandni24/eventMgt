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
        Schema::create('bookevents', function (Blueprint $table) {
            $table->id('bid');
            $table->string('event_name');
            $table->integer('people_count');
            $table->date('event_date');
            $table->time('event_time');
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('cid')->on('customers');
            $table->unsignedBigInteger('lid');
            $table->foreign('lid')->references('lid')->on('location');
            $table->unsignedBigInteger('pid');
            $table->foreign('pid')->references('pid')->on('packages');
            $table->string('status');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookevents');
    }
};
