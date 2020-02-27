<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable=['plant_id','room'];
    public function plant(){
        return $this->belongsTo("App\Plant");
    }
}
