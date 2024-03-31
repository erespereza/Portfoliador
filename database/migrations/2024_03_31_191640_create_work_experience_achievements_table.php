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
        Schema::create('work_experience_achievements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_experience_id');
            $table->string('name');
            $table->text('description', 500)->nullable();
            $table->timestamps();

            $table->foreign('work_experience_id')->references('id')->on('work_experience')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experience_achievements');
    }
};
