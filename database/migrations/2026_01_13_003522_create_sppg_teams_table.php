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
        Schema::create('sppg_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('leader_name');
            $table->string('phone')->nullable();
            $table->string('coverage_area');
            $table->unsignedInteger('members_count')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppg_teams');
    }
};
