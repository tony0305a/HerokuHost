<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illumiante\Detabase\Eloquent\SoftDeletes;
use App\Models\User;

class Post extends Model
{

   protected  $date = ['deleted_at'];



    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];


    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function photos(){

        return $this->morphMany('App\Models\Photo', 'imageable');

    }
         public function tags(){
             return $this->morphToMany('App\Models\Tag', 'taggable');
         }

}
