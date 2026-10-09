<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('volunteer_applications', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone', 40);
            $table->string('location');
            $table->string('occupation')->nullable();
            $table->string('area');
            $table->string('work_mode');
            $table->string('availability');
            $table->unsignedTinyInteger('hours_per_week')->nullable();
            $table->text('skills')->nullable();
            $table->text('experience')->nullable();
            $table->text('motivation');
            $table->string('profile_photo')->nullable();
            $table->string('cv')->nullable();
            $table->enum('status', ['pending', 'reviewing', 'accepted', 'rejected'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->foreignId('team_member_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();

            $table->index(['status', 'created_at']);
            $table->index('email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteer_applications');
    }
};
