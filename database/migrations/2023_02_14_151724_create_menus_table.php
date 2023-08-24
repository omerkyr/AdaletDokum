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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('menu_sira');
            $table->integer('menu_ust_id');
            $table->string('menu_title');
            $table->integer('menu_status');
            $table->string('menu_link');
            $table->smallInteger('menu_link_type');
            $table->integer('menu_type');
            $table->bigInteger('menu_page_id');
            $table->integer('kategori_id');
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
        Schema::dropIfExists('menus');
    }
};
