<?php

use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchSeedbedsTable extends Migration  
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_seedbeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_research_seedbed');
            $table->text('description');
            $table->date('days');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('quarters_id');
            $table->foreign('quarters_id')->references('id')->on('quarters');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('research_seedbeds');
    }
}
