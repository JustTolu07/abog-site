<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('product_images', function (Blueprint $table) {
            if (!Schema::hasColumn('product_images', 'product_id')) {
                $table->foreignId('product_id')->nullable()->constrained('products')->nullOnDelete()->after('id');
            }
            if (!Schema::hasColumn('product_images', 'path')) {
                $table->string('path')->nullable()->after('product_id');
            }
            if (!Schema::hasColumn('product_images', 'sort_order')) {
                $table->integer('sort_order')->default(0)->after('path');
            }
            if (!Schema::hasColumn('product_images', 'is_cover')) {
                $table->boolean('is_cover')->default(false)->after('sort_order');
            }
        });
    }

    public function down(): void
    {
        Schema::table('product_images', function (Blueprint $table) {
            $cols = ['product_id','path','sort_order','is_cover'];
            foreach ($cols as $c) {
                if (Schema::hasColumn('product_images', $c)) {
                    $table->dropColumn($c);
                }
            }
        });
    }
};
