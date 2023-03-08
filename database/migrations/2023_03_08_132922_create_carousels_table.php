<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('carousels')) {
            Schema::create('carousels', function (Blueprint $table) {
                $table->id();
                $table->string('id_ad');
                $table->string('content');
                $table->string('see_more');
                $table->string('media');
                $table->foreignId('post_id')->references('id')->on('posts');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carousels');
    }
}
