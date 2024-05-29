<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourArticle extends Model
{
    protected $fillable = ['judul_tour_article','slug', 'foto_tour_article', 'lokasi_tour_article', 'jumlah_orang', 'biaya_tour_article'];


    // public function setSlugAttribute($value)
    // {
    //     $this->attributes['slug'] = Str::slug($value);
    // }

    // public function tourCategory()
    // {
    //     return $this->belongsTo(TourCategory::class);
    // }

    public function tourCategories()
    {
        return $this->hasMany(TourCategory::class, 'tour_article_id');
    }
}
