<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    public function user ()
    {
        return  $this->belongsTo('App\Models\User','user_id');
    }
    public function task ()
    {
        return  $this->belongsTo('App\Models\Task','task_id');
    }
}
