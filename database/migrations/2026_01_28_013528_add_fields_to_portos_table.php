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
        Schema::table('portos', function (Blueprint $table) {
            $table->string('title')->after('id');
            $table->text('description')->nullable()->after('title');
            $table->string('url')->nullable()->after('description');
            $table->string('laptop_image')->nullable()->after('url'); // Gambar tampilan laptop
            $table->string('hp_image')->nullable()->after('laptop_image');     // Gambar tampilan HP
            $table->string('full_image')->nullable()->after('hp_image');   // Gambar tampilan full/desktop
            $table->boolean('is_featured')->default(false)->after('full_image');
            $table->boolean('is_active')->default(true)->after('is_featured');
            $table->integer('order')->default(0)->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portos', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'description',
                'url',
                'laptop_image',
                'hp_image',
                'full_image',
                'is_featured',
                'is_active',
                'order'
            ]);
        });
    }
};
