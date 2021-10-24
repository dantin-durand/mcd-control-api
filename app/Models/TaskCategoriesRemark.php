<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCategoriesRemark extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'tasks_sessions_id',
        'task_categories_id',
    ];


    public function categorie()
    {
        return $this->belongsTo(TaskCategories::class);
    }
}
