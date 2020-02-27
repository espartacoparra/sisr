<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $table= "coins";
    protected $fillable=['id','project_id','moneda'];
    public function project(){
        return $this->belongsTo("App\Project");
    }
}
