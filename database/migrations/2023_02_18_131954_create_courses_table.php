<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id');
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id');
            // $table->foreignId('discount_code_id');
            $table->string('name');
            $table->date('start');
            $table->date('end');
            //type mean youtube link or zoom or uploade for web
            $table->string('type');
            $table->string('image');
            $table->string('description');
            $table->string('cost');
            $table->string('discount_code')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
