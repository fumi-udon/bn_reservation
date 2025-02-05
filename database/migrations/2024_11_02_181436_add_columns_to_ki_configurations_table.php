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
        Schema::table('ki_configurations', function (Blueprint $table) {
            $table->text('text1')->nullable()->after('opt2');
            $table->text('text2')->nullable()->after('text1');
            $table->json('json1')->nullable()->after('text2');
            $table->json('json2')->nullable()->after('json1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ki_configurations', function (Blueprint $table) {
            $table->dropColumn(['text1', 'text2', 'json1', 'json2']);
        });
    }
};
