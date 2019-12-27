<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naptt15')->nullable();
            $table->string('naptt18')->nullable();
            $table->string('naptt21')->nullable();
            $table->string('naptt00')->nullable();
            $table->string('naptt03')->nullable();
            $table->string('naptt06')->nullable();
            $table->string('napat15')->nullable();
            $table->string('napat18')->nullable();
            $table->string('napat21')->nullable();
            $table->string('napat00')->nullable();
            $table->string('napat03')->nullable();
            $table->string('napat06')->nullable();
            $table->string('dfptt15')->nullable();
            $table->string('dfptt18')->nullable();
            $table->string('dfptt21')->nullable();
            $table->string('dfptt00')->nullable();
            $table->string('dfptt03')->nullable();
            $table->string('dfptt06')->nullable();
            $table->string('dfpat15')->nullable();
            $table->string('dfpat18')->nullable();
            $table->string('dfpat21')->nullable();
            $table->string('dfpat00')->nullable();
            $table->string('dfpat03')->nullable();
            $table->string('dfpat06')->nullable();
            $table->integer('candidate_id');
            $table->timestamps();

            $table->foreign('candidate_id')
              ->references('id')
              ->on('candidates')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
