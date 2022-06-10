<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'text', 'short_text','image','slug'];
    public function category(){
        return $this->hasOne(Category::class, 'id','category_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id','id');
    }
}

