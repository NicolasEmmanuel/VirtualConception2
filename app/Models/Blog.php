<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    public function category(){
        $this->belongsTo(Category::class);
    }

    public function formation(){
        $this->belongsTo(Formation::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
