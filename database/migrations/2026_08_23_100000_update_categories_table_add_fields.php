<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            if (!Schema::hasColumn('categories', 'name')) {
                $table->string('name')->nullable()->after('id');
            }
            if (!Schema::hasColumn('categories', 'slug')) {
                $table->string('slug')->nullable()->unique()->after('name');
            }
            if (!Schema::hasColumn('categories', 'description')) {
                $table->text('description')->nullable()->after('slug');
            }
            if (!Schema::hasColumn('categories', 'cover_image')) {
                $table->string('cover_image')->nullable()->after('description');
            }
            if (!Schema::hasColumn('categories', 'display_order')) {
                $table->integer('display_order')->default(0)->after('cover_image');
            }
            if (!Schema::hasColumn('categories', 'featured')) {
                $table->boolean('featured')->default(false)->after('display_order');
            }
            if (!Schema::hasColumn('categories', 'active')) {
                $table->boolean('active')->default(true)->after('featured');
            }
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $cols = ['name','slug','description','cover_image','display_order','featured','active'];
            foreach ($cols as $c) {
                if (Schema::hasColumn('categories', $c)) {
                    $table->dropColumn($c);
                }
            }
        });
    }
};
