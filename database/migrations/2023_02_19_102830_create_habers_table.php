<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habers', function (Blueprint $table) {
            $table->id();
            $table->integer('haber_tur');
            $table->string('haber_title');
            $table->text('haber_content');
            $table->string('haber_image');
            $table->string('haber_slug');
            $table->string('haber_kategori');
            $table->string('haber_yetkili');
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
        Schema::dropIfExists('habers');
    }
};
