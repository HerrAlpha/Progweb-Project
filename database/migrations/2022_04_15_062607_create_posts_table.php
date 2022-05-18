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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('web-browser')->nullable();
            $table->string('ios')->nullable();
            $table->string('android')->nullable();
            $table->string('chrome-os')->nullable();
            $table->string('mac-os')->nullable();
            $table->string('linux')->nullable();
            $table->string('windows')->nullable();
            $table->string('framework');
            $table->text('description');
            $table->string('file');
            $table->char('github_url');
            $table->string('cover');
            $table->string('price');
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
        Schema::dropIfExists('posts');
    }
};
