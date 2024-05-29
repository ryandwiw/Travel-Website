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
        Schema::create('tour_articles', function (Blueprint $table) {
            $table->id();
            $table->string('judul_tour_article');
            $table->string('slug')->unique();
            $table->string('foto_tour_article')->nullable();
            $table->string('lokasi_tour_article');
            $table->string('jumlah_orang');
            $table->string('biaya_tour_article');
            $table->longText('isi_tour_article');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_articles');
    }
};
