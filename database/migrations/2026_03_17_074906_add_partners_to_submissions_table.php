<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            // JSON ist in MySQL/MariaDB in der Regel verfügbar; fällt sonst auf LONGTEXT zurück.
            $table->json('partners')->nullable()->after('url');
        });
    }

    public function down(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn('partners');
        });
    }
};
