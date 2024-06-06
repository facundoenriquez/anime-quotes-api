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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string("author");
            $table->date("release");
            $table->enum("demography", [
                "Shonen",
                "Kodomo",
                "Seinen",
                "Shōjo",
                "Josei",
                "Seijin/Ero",
                "Redisu/Ladys",
                "Dōjinshi",
                "Gekiga",
                "Silver & Golden"
            ])->nullable();
            $table->string("genre")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
