<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quote_requests', function (Blueprint $table) {
            if (!Schema::hasColumn('quote_requests', 'name')) {
                $table->string('name')->nullable()->after('id');
            }
            if (!Schema::hasColumn('quote_requests', 'email')) {
                $table->string('email')->nullable()->after('name');
            }
            if (!Schema::hasColumn('quote_requests', 'phone')) {
                $table->string('phone')->nullable()->after('email');
            }
            if (!Schema::hasColumn('quote_requests', 'company')) {
                $table->string('company')->nullable()->after('phone');
            }
            if (!Schema::hasColumn('quote_requests', 'product_id')) {
                $table->foreignId('product_id')->nullable()->constrained('products')->nullOnDelete()->after('company');
            }
            if (!Schema::hasColumn('quote_requests', 'quantity')) {
                $table->string('quantity')->nullable()->after('product_id');
            }
            if (!Schema::hasColumn('quote_requests', 'project_type')) {
                $table->string('project_type')->nullable()->after('quantity');
            }
            if (!Schema::hasColumn('quote_requests', 'message')) {
                $table->text('message')->nullable()->after('project_type');
            }
            if (!Schema::hasColumn('quote_requests', 'status')) {
                $table->string('status')->default('NEW')->after('message');
            }
        });
    }

    public function down(): void
    {
        Schema::table('quote_requests', function (Blueprint $table) {
            $cols = ['name','email','phone','company','product_id','quantity','project_type','message','status'];
            foreach ($cols as $c) {
                if (Schema::hasColumn('quote_requests', $c)) {
                    $table->dropColumn($c);
                }
            }
        });
    }
};
