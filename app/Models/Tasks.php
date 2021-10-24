<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'task_categories_id',
    ];

    public function taskCategories()
    {
        return $this->belongsTo(TaskCategories::class);
    }
}
