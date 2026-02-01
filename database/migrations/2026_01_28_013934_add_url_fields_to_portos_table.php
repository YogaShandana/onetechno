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
            $table->string('laptop_url')->nullable()->after('laptop_image');
            $table->string('hp_url')->nullable()->after('hp_image');
            $table->string('full_url')->nullable()->after('full_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portos', function (Blueprint $table) {
            $table->dropColumn(['laptop_url', 'hp_url', 'full_url']);
        });
    }
};
