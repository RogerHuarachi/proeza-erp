<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->double('ct');
            $table->double('pa');
            $table->double('ren');
            $table->double('roe');
            $table->double('roa');
            $table->double('mora');


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
        Schema::dropIfExists('indicators');
    }
}
