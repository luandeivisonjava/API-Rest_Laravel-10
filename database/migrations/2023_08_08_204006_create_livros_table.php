<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->integer('position', autoIncrement: false, unsigned: false);

            $table->string('name', 255);
            $table->string('abbreviation', 255);

            $table->unsignedBigInteger('testamento_id');
            $table->timestamps();
            $table->foreign('testamento_id')->references('id')->on('testamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
