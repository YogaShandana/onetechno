<?php
/**
 * Script untuk refresh database di production hosting
 * Upload file ini ke root folder hosting dan akses melalui browser
 * HAPUS FILE INI SETELAH SELESAI DIGUNAKAN!
 */

// Basic security - ganti password ini
$password = 'refresh2026';
$input_password = $_GET['pass'] ?? '';

if ($input_password !== $password) {
    die('Access denied. Add ?pass=refresh2026 to URL');
}

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "<h2>Refreshing Production Database...</h2>\n";

try {
    // Drop dan recreate tables
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true]);
    echo "<p>✅ Tables dropped and recreated</p>\n";
    
    // Run seeders
    \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
    echo "<p>✅ Database seeded with new data</p>\n";
    
    // Clear cache
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    echo "<p>✅ Cache cleared</p>\n";
    
    echo "<h3>✅ Database refresh completed successfully!</h3>\n";
    echo "<p>Portfolio data has been updated with:</p>\n";
    
    // Show updated portfolios
    $portos = \App\Models\Porto::orderBy('order')->get(['title', 'url', 'order']);
    echo "<ul>\n";
    foreach ($portos as $porto) {
        echo "<li>Order {$porto->order}: {$porto->title}" . ($porto->url ? " - {$porto->url}" : "") . "</li>\n";
    }
    echo "</ul>\n";
    
    echo "<p><strong>⚠️ IMPORTANT: Delete this file after use for security!</strong></p>\n";
    
} catch (Exception $e) {
    echo "<p>❌ Error: " . $e->getMessage() . "</p>\n";
}
?>