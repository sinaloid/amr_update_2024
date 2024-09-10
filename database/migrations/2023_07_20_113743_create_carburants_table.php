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
        Schema::create('carburants', function (Blueprint $table) {
            $table->id();
            $table->string("destination");
            $table->string("distance_aller_retour");
            $table->string("distance_interne");
            $table->string("cout_au_km")->nullable();
            $table->string("estimation_du_cout")->nullable();
            $table->string("statut")->nullable();
            $table->string("slug");
            $table->boolean("is_delete")->default(0);
            $table->date("date_sortie");
            $table->date("date_retour");
            $table->text("observation")->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('carburants');
    }
};
