<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTopicIdColumnInTeacherStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teacher_student', function (Blueprint $table) {
            $table->integer('topic_id')->nullable()->change();
            $table->text('note')->nullable()->change();
            $table->integer('rate_status')->nullable()->change();
            $table->text('rate_note')->nullable()->change();
            $table->string('rate_date')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_student', function (Blueprint $table) {
            $table->integer('topic_id')->change();
            $table->text('note')->change();
            $table->integer('rate_status')->change();
            $table->text('rate_note')->change();
            $table->date('rate_date')->change();
        });
    }
}
