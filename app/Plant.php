<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $table= 'plants';
	protected $fillable=['project_id','plant']; 

	public function project(){
        return $this->belongsTo("App\Project");
    }
    public function rooms(){
        return $this->hasMany("App\Room");
    }
}
