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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('todo_list_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('content');
            $table->timestamps();

            // Indexes
            $table->index('todo_list_id', 'item_list_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
