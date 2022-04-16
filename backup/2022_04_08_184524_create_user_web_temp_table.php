<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webs', function (Blueprint $table) {
            $table->id('id_web');
            $table->id('id_user');
            $table->string('name');
            $table->string('description');
            $table->string('picture');
            $table->string('url');
            $table->string('category');
            $table->string('subcategory');
            $table->string('tags');
            $table->string('type');
            $table->string('status');
            $table->string('rating');
            $table->string('views');
            $table->string('likes');
            $table->string('dislikes');
            $table->string('comments');
            $table->string('favorites');
            $table->string('shares');
            $table->timestamp('createed_at');
            $table->timestamp('updateed_at');
            // $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('webs');
    }
};
