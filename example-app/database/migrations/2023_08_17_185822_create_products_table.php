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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('categoryID');
            $table->foreign('categoryID')
                ->references('id')->on('categories')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->float('price');
            $table->string('img');
            $table->string('brief_description');
            $table->string('details_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
