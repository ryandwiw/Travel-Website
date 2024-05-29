<?php

namespace App\Models;

use App\Models\ArticleView;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'isi', 'penulis', 'gambar_1'];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = Str::slug($model->judul);
        });
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('judul', 'LIKE', "%$keyword%")
            ->orWhere('isi', 'LIKE', "%$keyword%")
            ->orWhere('penulis', 'LIKE', "%$keyword%");
    }

    public function comments()
{
    return $this->hasMany(Komen::class);
}

public function views()
{
    return $this->hasMany(ArticleView::class);
}
}
