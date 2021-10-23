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

    public function tasksSaved()
    {
        return $this->hasMany(TasksHistory::class);
    }

    public function remarkSaved()
    {
        return $this->hasMany(TaskCategoriesRemark::class);
    }
}
