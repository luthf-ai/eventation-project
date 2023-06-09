<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// db
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name1');
            $table->string('nickname1');
            $table->string('name2');
            $table->string('nickname2');
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('location');
            $table->string('event_date');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('video_url')->nullable();
            $table->string('event_audio')->nullable();
            $table->longText('location_url')->nullable();
            $table->string('guest_list')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('undangan_id')->nullable()->constrained('undangans')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
