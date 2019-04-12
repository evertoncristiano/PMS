<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->mediumText('description');
            $table->boolean('completed')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('project_id')
                  ->references('id')
                  ->on('projects');

            $table->foreign('user_id')                  
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
