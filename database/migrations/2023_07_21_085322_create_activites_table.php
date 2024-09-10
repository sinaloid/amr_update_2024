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
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->date("startDate");
            $table->date("endDate");
            $table->string("file")->nullable();
            $table->string("status")->default("En attente");
            $table->string("slug");
            $table->boolean("is_delete")->default(0);
            $table->text("description");
            
            $table->unsignedBigInteger('projet_id');
            $table->foreign('projet_id')
                    ->references('id')
                    ->on('projets')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
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
        Schema::dropIfExists('activites');
    }
};
