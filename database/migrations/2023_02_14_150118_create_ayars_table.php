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
        Schema::create('ayars', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('site_keywords');
            $table->string('site_description');
            $table->string('site_logo');
            $table->string('site_favicon');
            $table->string('site_color');
            $table->string('contact_adres');
            $table->string('contact_tel');
            $table->string('contact_tel2');
            $table->string('contact_email');
            $table->string('contact_calismasaati');
            $table->string('sosyal_instagram');
            $table->string('sosyal_facebook');
            $table->string('sosyal_twitter');
            $table->string('sosyal_linkedin');
            $table->string('sosyal_youtube');
            $table->string('sosyal_whatsapp');
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
        Schema::dropIfExists('ayars');
    }
};
