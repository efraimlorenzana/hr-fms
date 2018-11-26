<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEmployeesToUsers extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('position_id')
            ->references('id')
            ->on('positions')
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
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('position_id');
        });
    }
}
