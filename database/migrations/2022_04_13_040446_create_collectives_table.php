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
        Schema::create('collectives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('postition');
            $table->timestamps();
        });

        Schema::table('collectives', function (Blueprint $table){
            $table->foreignId('post_collectives_id')->references('id')->on('post_collectives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collectives');
    }
};
