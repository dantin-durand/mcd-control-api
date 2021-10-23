<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskCategoriesRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_categories_remarks', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->foreignId('tasks_sessions_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('task_categories_id')
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_categories_remarks');
    }
}
