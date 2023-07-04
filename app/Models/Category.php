<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','order','slug','parent_id'];

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
    
    //bir kategori birden çok posta sahiptir
    public function posts(){
        return $this->hasMany(Post::class);
    }
   
    //categorileri -> isareti ile hieararşik bir biçimde çekmek için
    public function getHierarchyName(){
        $names = [$this->name];
        $parent = $this->parent;

        while ($parent) {
            array_unshift($names, $parent->name);
            $parent = $parent->parent;
        }

        return implode(' -> ', $names);

    }
    
}

