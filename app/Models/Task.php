<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function attachments(){
        return $this -> hasMany('App\Models\Attachment');
    }
    public function comments(){
        return $this -> hasMany('App\Models\Comment');
    }
    public function category(){
        return $this -> belongsTo('App\Models\Category','category_id');
    }
    public function board(){
        return $this -> belongsTo('App\Models\Board','board_id');
    }
    public function participants(){
        return $this -> hasManyThrough('App\Models\User','App\Models\Board','id','user_id','user_id');
    }
    public function assignedUsers()
    {
        return $this->belongsToMany('App\Models\Task','App\Models\TaskUser','task_id','user_id');
    }
}
