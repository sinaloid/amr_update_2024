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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string("lastname");
            $table->string("firstname");
            $table->string("gender");
            $table->string("tranche_age");
            $table->string("statut_residence");
            $table->string("handicap");
            $table->string("type_handicap");
            $table->string("group_minoritaire");
            $table->string("organisation");
            $table->string("fonction");
            $table->string("formation");
            $table->string("telephone");
            $table->string("whatsapp")->nullable();
            $table->string("email")->nullable();
            $table->string("code_participant");
            $table->string("region");
            $table->string("province");
            $table->string("commune");
            $table->string("village");
            $table->date("date");
            $table->string("slug");
            $table->boolean("is_delete")->default(0);
            $table->text("description")->nullable();
            
            $table->unsignedBigInteger('activite_id');
            $table->foreign('activite_id')
                    ->references('id')
                    ->on('activites')
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
        Schema::dropIfExists('participants');
    }
};
