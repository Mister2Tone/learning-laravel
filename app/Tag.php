<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function boards(){
    	return $this->belongsToMany(Contact::class)->withTimeStamps();
    }
}
