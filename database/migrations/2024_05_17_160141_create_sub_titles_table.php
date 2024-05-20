<?php

// database/migrations/xxxx_xx_xx_create_sub_titles_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTitlesTable extends Migration
{
    public function up()
    {
        Schema::create('sub_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id');
            $table->string('sub_title')->nullable();
            $table->string('desc');
            $table->string('image_path')->nullable();
            $table->timestamps();

            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_titles');
    }
}
