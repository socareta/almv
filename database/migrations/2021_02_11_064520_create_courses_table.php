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

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('partner_id')->default(0); //user_id
            $table->unsignedBigInteger('category_id'); 
            $table->unsignedBigInteger('category_parent_id')->default(0);
            $table->unsignedBigInteger('status');  //meta =>status_course
            $table->unsignedBigInteger('dificulty'); //meta=>dificulty
            $table->unsignedBigInteger('intensity'); //meta=>intensity
            
            $table->string('title');
            $table->string('slug');
            $table->mediumText('description');
            $table->unsignedInteger('price'); //if 0= free 
            $table->string('props')->nullable();
            $table->datetime('deleted_at')->nullable();

            //this is important as basket data from alomove.com 
            //if we have ourself's datas it cana be deleted or it automaticaly adjust when 
            $table->integer('workout_count')->nullable();  //calculation duration on leasson 
            $table->integer('member_count')->nullable(); //automatic adjust when the course has bought

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('partner_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('category_parent_id')->references('id')->on('categories');
            $table->foreign('status')->references('id')->on('metas');
            $table->foreign('dificulty')->references('id')->on('metas');
            $table->foreign('intensity')->references('id')->on('metas');

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
