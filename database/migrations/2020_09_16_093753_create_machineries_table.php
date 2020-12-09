<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachineriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machineries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('machine_name')->nullable();
            $table->string('machine_type')->nullable();
            $table->integer('number')->nullable();
            $table->string('origin')->nullable();
            $table->string('max_prm')->nullable();
            $table->string('max_width')->nullable();
            $table->string('average_production')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->default('default.png');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('machineries');
    }
}
