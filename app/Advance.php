<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    protected $table= "advances";
    protected $fillable=['id','project_id','anticipo'];
    public function project(){
        return $this->belongsTo("App\Project");
    }
}
