<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table= "projects";
    protected $fillable=['title','name','user_id','cedula','phone','email','description','acuerdo','anticipo','terrain','construction','status','construction','propuesta','aprobado','finalizado','cobrado','end','price'];
    public function user(){
        return $this->belongsTo("App\User");
    }
    public function plants(){
        return $this->hasMany("App\Plant");
    }
     public function images(){
        return $this->hasMany("App\Image");
    }
     public function plans(){
        return $this->hasMany("App\Plan");
    }
    public function contracts(){
        return $this->hasMany("App\Contract");
    }
    public function coins(){
        return $this->hasMany("App\Coin");
    }
    public function advances(){
        return $this->hasMany("App\Advance");
    }
}
