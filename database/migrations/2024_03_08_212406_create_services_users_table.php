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
        Schema::create('services_users', function (Blueprint $table) {

            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')
            ->references('id')
            ->on('services')
            ->cascadeOnDelete();

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();

            $table->string('finish_data', 255);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_users');
    }
};
