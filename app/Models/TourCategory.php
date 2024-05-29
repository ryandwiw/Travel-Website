<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourCategory extends Model
{
    protected $fillable = ['nama_kategori', 'slug', 'foto_tour', 'activity', 'start', 'duration', 'price'];

    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }

    // public function tourArticle()
    // {
    //     return $this->hasOne(TourArticle::class, 'id', 'tour_article_id');
    // }

    public function tourArticle()
    {
        return $this->belongsTo(TourArticle::class, 'tour_article_id');
    }

    // public function setSlugAttribute($value)
    // {
    //     $this->attributes['slug'] = Str::slug($value);
    // }
}
