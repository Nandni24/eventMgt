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
        Schema::create('schedulsevents', function (Blueprint $table) {
            $table->id('sid');
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('cid')->on('customers');
            $table->unsignedBigInteger('bid');
            $table->foreign('bid')->references('bid')->on('bookevents');
            $table->date('s_date');
            $table->time('s_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedulsevents');
    }
};
