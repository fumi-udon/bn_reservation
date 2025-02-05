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
        Schema::create('ki_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('page_id')->nullable();
            $table->string('page_name')->nullable();
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('name3')->nullable();
            $table->string('name4')->nullable();
            $table->integer('status1')->default(0);
            $table->integer('status2')->default(0);
            $table->string('opt1')->nullable();
            $table->string('opt2')->nullable();
            $table->boolean('flg1')->default(false);
            $table->boolean('flg2')->default(false);
            $table->boolean('flg3')->default(false);
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
        Schema::dropIfExists('ki_configurations');
    }
};
