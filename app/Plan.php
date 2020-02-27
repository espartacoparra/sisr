<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
   protected $table = 'plans';
   protected $fillable=['project_id','name','description'];
   public function project(){
        return $this->belongsTo("App\Project");
    }
}

