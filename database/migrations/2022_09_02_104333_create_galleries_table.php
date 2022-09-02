<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->json('photos');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
           
        });

        // Schema::create('galleries', function (Blueprint $table) {
           
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::table('galleries', function (Blueprint $table) 
        {
            $table->dropForeign(['galleries_product_id_foreign']);
        });
        Schema::dropIfExists('galleries');
    }
}
