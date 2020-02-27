<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
   protected $table = 'contracts';
   protected $fillable=['project_id','name'];
   public function project(){
        return $this->belongsTo("App\Project");
    }
}
