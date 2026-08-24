<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'name')) {
                $table->string('name')->nullable()->after('id');
            }
            if (!Schema::hasColumn('products', 'slug')) {
                $table->string('slug')->nullable()->unique()->after('name');
            }
            if (!Schema::hasColumn('products', 'category_id')) {
                $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete()->after('slug');
            }
            if (!Schema::hasColumn('products', 'description')) {
                $table->text('description')->nullable()->after('category_id');
            }
            if (!Schema::hasColumn('products', 'materials')) {
                $table->string('materials')->nullable()->after('description');
            }
            if (!Schema::hasColumn('products', 'finish')) {
                $table->string('finish')->nullable()->after('materials');
            }
            if (!Schema::hasColumn('products', 'dimensions')) {
                $table->string('dimensions')->nullable()->after('finish');
            }
            if (!Schema::hasColumn('products', 'colour')) {
                $table->string('colour')->nullable()->after('dimensions');
            }
            if (!Schema::hasColumn('products', 'usage')) {
                $table->string('usage')->nullable()->after('colour');
            }
            if (!Schema::hasColumn('products', 'customisation')) {
                $table->text('customisation')->nullable()->after('usage');
            }
            if (!Schema::hasColumn('products', 'lead_time')) {
                $table->string('lead_time')->nullable()->after('customisation');
            }
            if (!Schema::hasColumn('products', 'featured')) {
                $table->boolean('featured')->default(false)->after('lead_time');
            }
            if (!Schema::hasColumn('products', 'published')) {
                $table->boolean('published')->default(true)->after('featured');
            }
            if (!Schema::hasColumn('products', 'display_order')) {
                $table->integer('display_order')->default(0)->after('published');
            }
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $cols = ['name','slug','category_id','description','materials','finish','dimensions','colour','usage','customisation','lead_time','featured','published','display_order'];
            foreach ($cols as $c) {
                if (Schema::hasColumn('products', $c)) {
                    $table->dropColumn($c);
                }
            }
        });
    }
};
