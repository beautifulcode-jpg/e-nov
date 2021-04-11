<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'author_id',
        'category',
        'featured',
        'pathtoimage',
        'slug'
    ];

    public function author()
    {
        return $this->belongsTo(Writer::class, 'author_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
 
    public function scopeSearch($query, $searchTerm) {
        return $query
        ->where('title', 'like', "%" . $searchTerm . "%")
        ->orWhere('body', 'like', "%" . $searchTerm . "%");
    }
    public function scopeCategory($query, $searchTerm) {
        return $query
        ->Where('category', 'like', "%" . $searchTerm . "%");
    }
}
