<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tour_categories', function (Blueprint $table) {
            // Tambahkan kolom kunci asing untuk tour_article
            $this->addTourArticleForeignKey($table);
        });
    }
    
    public function down()
    {
        Schema::table('tour_categories', function (Blueprint $table) {
            // Hapus kolom kunci asing untuk tour_article
            $table->dropForeign(['tour_article_id']);
        });
    }
    
    // Fungsi untuk menambahkan kolom kunci asing tour_article
    private function addTourArticleForeignKey(Blueprint $table)
    {
        $table->foreignId('tour_article_id')
              ->nullable()
              ->constrained('tour_articles')
              ->onDelete('set null');
    }
};
