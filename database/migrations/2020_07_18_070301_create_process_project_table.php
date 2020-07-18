<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_project', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_student_id');
            $table->string('title');
            $table->text('content');
            $table->string('link_file')->nullable();
            $table->text('note')->nullable();
            $table->text('note_by_teacher')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('process_project');
    }
}
