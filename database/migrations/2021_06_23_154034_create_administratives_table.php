<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administratives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('money');
            $table->double('comision');

            $table->unsignedBigInteger('month_id');
            $table->unsignedBigInteger('agency_id');

            $table->timestamps();

            //relation
            $table->foreign('month_id')->references('id')->on('months')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('agency_id')->references('id')->on('agencies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administratives');
    }
}
