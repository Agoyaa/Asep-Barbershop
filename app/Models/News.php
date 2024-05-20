<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'bg','content'];

    public function subTitles()
    {
        return $this->hasMany(SubTitle::class);
    }
}
