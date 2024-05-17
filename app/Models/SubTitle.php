<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTitle extends Model
{
    use HasFactory;

    protected $fillable = ['news_id', 'sub_title', 'image_path'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
