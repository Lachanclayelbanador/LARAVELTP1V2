<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function tasks(){
        return $this -> hasMany('App\Models\Task');
    }
    public function owner()
    {
        return $this -> belongsTo('App\Models\User','user_id');
    }
    public function users()
    {
        return $this -> belongsToMany('App\Models\User');
    }
}
