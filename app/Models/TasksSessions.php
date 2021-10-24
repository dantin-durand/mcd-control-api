<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksSessions extends Model
{
    use HasFactory;

    protected $fillable = [
        'currentSession',
    ];

    public function tasks()
    {
        return $this->hasMany(TasksStatus::class);
    }

    public function remark()
    {
        return $this->hasMany(TaskCategoriesRemark::class);
    }
}
