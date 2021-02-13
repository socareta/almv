<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('mediaable_type'); //user(avatar&cover), course,leason,blog
            $table->bigInteger('mediaable_id');

            $table->string('url');
            $table->string('alt');
            $table->boolean('is_image')->default(true);
            $table->string('type',50)->nullable(true); // like user(cover,avatar),course(cover) from meta
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
        Schema::dropIfExists('media');
    }
}
