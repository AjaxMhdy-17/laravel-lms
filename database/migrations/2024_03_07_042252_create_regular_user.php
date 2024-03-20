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
        Schema::create('regular_users', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp')->unique();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_id')->unique();
            $table->string('token')->nullable();
            $table->string('role')->default(2);
            $table->string('reference_by')->required();
            //status can active or inactive;
            $table->string('status')->default('inactive');
            $table->double('balance')->default(200.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regular_user');
    }
};
