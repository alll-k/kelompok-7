<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('questions', function (Blueprint $table) {
        $table->id();
        $table->string('name');        // nama penanya
        $table->string('question');    // isi pertanyaan
        $table->integer('answers')->default(0); // jumlah jawaban
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pertanyaan');
    }
};
