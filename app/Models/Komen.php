<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komen extends Model
{
    use HasFactory;

    protected $fillable = ['artikel_id', 'nama', 'email', 'isi_komentar', 'parent_id'];

    // public function getFormattedCreatedAtAttribute()
    // {
    //     return Carbon::parse($this->attributes['created_at'])->formatLocalized('%d %B %Y %I:%M %p');
    // }

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }

    public function replies()
    {
        return $this->hasMany(Komen::class, 'parent_id');
    }
}
