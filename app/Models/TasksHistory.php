<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'tasks_sessions_id',
        'tasks_id',
    ];

    public function taskSession()
    {
        return $this->belongsTo(TasksSessions::class);
    }

    public function taskInfo()
    {
        return $this->belongsTo(Tasks::class);
    }
}
