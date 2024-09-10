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
        Schema::create('action_and_stories', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("type");
            $table->string("slug");
            $table->string("image");
            $table->longText("description");
            $table->boolean("is_delete")->default(0);
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
        Schema::dropIfExists('action_and_stories');
    }
};
