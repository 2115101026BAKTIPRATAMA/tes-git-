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
        Schema::create('admin2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Olahan_id');
            $table->string('title');
            $table->text('desc');
            $table->string('gambar');
            $table->string('rate_id');
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
        Schema::dropIfExists('admin2s');
    }
};
