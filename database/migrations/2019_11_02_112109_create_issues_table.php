<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longtext('description');
            $table->date('due_date')->nullable();
            $table->longtext('comments')->nullable();
            $table->unsignedBigInteger('dynamic_list_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
        Schema::table('issues', function(Blueprint $table)
        {
            $table->foreign('dynamic_list_id')->references('id') ->on('dynamic_lists')->onDelete('cascade');
        });  
        Schema::table('issues', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id') ->on('users')->onDelete('cascade');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
