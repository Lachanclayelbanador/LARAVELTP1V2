<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use function GuzzleHttp\Promise\task;


class User extends Model
{
    use HasFactory,Notifiable;
    protected $primaryKey = 'id';

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }
    public function ownedBoards()
    {
        $this->hasMany('App\Models\Board','id','board_id');
    }
    public function boards()
    {
        return $this->belongsToMany('App\Models\Board');
    }
    public function assignedTasks()
    {
        return $this->belongsToMany('App\Models\Task','task_user','user_id','task_id');
    }

    public function tasks()
    {
        return $this->hasManyThrough('App\Models\Task','App\Models\Board','board_id','user_id','id','id');
    }


}
