<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'tasks_sessions_id',
        'tasks_id',
    ];

    public function session()
    {
        return $this->belongsTo(TasksSessions::class);
    }

    public function info()
    {
        return $this->belongsTo(Tasks::class);
    }
}
