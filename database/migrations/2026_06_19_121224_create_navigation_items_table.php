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
        Schema::create('navigation_items', function (Blueprint $table) {
            $table->id();
            $table->string('label');                    // Текст ссылки (Главная, Каталог и т.д.)
            $table->string('route_name')->nullable();   // Название роута (home, catalog и т.д.)
            $table->string('url')->nullable();          // Альтернативный URL (если не используем route)
            $table->unsignedInteger('order')->default(0); // Порядок сортировки
            $table->boolean('is_active')->default(true);  // Показывать ли пункт
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navigation_items');
    }
};
