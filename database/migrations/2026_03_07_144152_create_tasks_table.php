<?php

// database/migrations/xxxx_xx_xx_create_tasks_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();                // Primary key
            $table->string('title');     // Task title
            $table->boolean('completed')->default(false); // Completed or not
            $table->timestamps();        // Created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};