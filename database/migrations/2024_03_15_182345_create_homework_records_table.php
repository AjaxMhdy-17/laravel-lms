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
        Schema::create('homework_records', function (Blueprint $table) {
            $table->id();
            $table->string('user_whatsapp');
            $table->string('user_id');
            $table->string('user_status');
            $table->string('selected_course')->nullable();
            $table->string('home_work_link');
            $table->boolean('appoved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homework_records');
    }
};
