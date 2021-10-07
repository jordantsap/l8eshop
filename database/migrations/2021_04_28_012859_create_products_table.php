<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(0)->nullable();
            $table->boolean('featured')->default(0)->nullable();
            $table->boolean('homepage')->default(0)->nullable();
            $table->string('logo')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('sku');//->nullable();
            $table->integer('quantity')->nullable();
            $table->boolean('slider')->default(0)->nullable();
            $table->foreignId('color_id')->nullable();
            $table->string('price');
            $table->foreignId('category_id');
            $table->foreignId('type_id');
            $table->foreignId('sub_type_id');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('brand_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
