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
        Schema::create('addressses', function (Blueprint $table) {
            $table->id();
            $table->string('street', 200);
            $table->string('city', 100);
            $table->string('province', 100);
            $table->string('country', 100);
            $table->string('postal_code', 10);
            $table->unsignedBigInteger('contact_id');
            $table->timestamps();
        });
        Schema::table('addressses', function (Blueprint $table) {

            $table->foreign('contact_id')->references('id')->on('contacts')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addressses');
    }
};
