<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = [ 'name','post_id','path','is_main'];

    public function posts(){
        return $this->belongsTo(Post::class);
    }

}
