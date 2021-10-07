<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_type_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_type_id');
            $table->string('locale')->index();

            // The actual fields to store the content of your entity. You can add whatever you need.
            $table->string('title')->unique();
            $table->string('slug')->unique();

            $table->unique(['sub_type_id', 'locale']);

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
        Schema::dropIfExists('sub_type_translations');
    }
}
