<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRecordsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_name');
            $table->string('file_path');
            $table->integer('employee_file_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('employee_file_id')
            ->references('id')
            ->on('employee_file')
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
        Schema::dropIfExists('records');
        Schema::create('records', function (Blueprint $table) {
            $table->dropForeign('employee_file_id');
        });
    }
}
