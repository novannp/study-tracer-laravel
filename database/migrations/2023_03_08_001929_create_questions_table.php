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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('kuesioner_id');
            $table->foreign('type_id')->references('id')->on('question_types')->onDelete('restrict');
            $table->foreign('kuesioner_id')->references('id')->on('kuesioners')->onDelete('restrict');
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
        Schema::dropIfExists('question');
        Schema::table('questions',function (Blueprint $table){
            $table->dropForeign(['type_id','kuesioner_id']);
            $table->dropColumn('type_id');
            $table->dropColumn('kuesioner_id');
        });
       
    }
};
          