<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TaskUser extends Pivot
{
    use HasFactory;
    public $incrementing = true;
    protected $table="task_user";

    public function user()
    {
        return $this -> belongsTo(User::class);
    }
    public function task()
    {
        return $this -> belongsTo(Task::class);
    }
}
