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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->text('contact_info')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->unsignedInteger('min_booking_duration')->defatult(0);
            $table->unsignedInteger('max_booking_duration')->default(0);
            $table->decimal('unit_cost', 7, 2)->default(0.00);
            $table->string('currency')->default('THB');
            $table->unsignedInteger('max_participants')->default(0);
            $table->unsignedInteger('min_notice_duration')->default(0)->comment('Minimum notice duration in minutes');
            $table->unsignedInteger('max_notice_duration')->default(0)->comment('Maximum notice duration in minutes');
            $table->foreignId('schedule_id')->constrained();
            $table->tinyInteger('requires_approval')->default(0);
            $table->text('notes')->nullable()->comment('Internal notes for the resource');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
