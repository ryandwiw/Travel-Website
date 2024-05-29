<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\TourCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tour extends Model
{
    protected $fillable = ['nama', 'slug', 'foto','isi'];

    public function categories()
    {
        return $this->belongsToMany(TourCategory::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('nama', 'LIKE', "%$keyword%")
            ->orWhere('isi', 'LIKE', "%$keyword%");
    }

    // public function setSlugAttribute($value)
    // {
    //     $this->attributes['slug'] = Str::slug($value);
    // }
}
