<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tag;

class Contact extends Model
{
    protected $fillable = ['name','email','phone','user_id','ip'];	

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }
}
