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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->unique()->after('email');
            $table->string('city')->after('phone_number');
            $table->enum('role', ['user', 'worker'])->after('city');
            $table->enum('is_active', [0, 1])->default(1)->after('role');
            $table->enum('is_verified', [0, 1])->default(0)->after('is_active');
            $table->string('device_token')->after('is_verified');
            $table->timestamp('last_login')->after('device_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone_number', 'city', 'role', 'is_active', 'is_verified', 'device_token', 'last_login']);
        });
    }
};
