<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BoardUser extends Pivot
{
    use HasFactory;
    public $incrementing = true;
    protected $table='board_user';
    protected $primaryKey='id';

    public function user()
    {
        return $this -> belongsTo('App\Models\User','user_id');
    }
    public function board()
    {
        return $this -> belongsTo('App\Models\Board','board_id');
    }
    public function tasks()
    {
        return $this -> hasManyThrough('App\Models\Task','App\Models\Board','id','board_id','board_id');
    }
}
