<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['name', 'email', 'message','post_id'];
    public function post(){
        return $this->belongsTo(post::class,'id','post_id');
    }
}
