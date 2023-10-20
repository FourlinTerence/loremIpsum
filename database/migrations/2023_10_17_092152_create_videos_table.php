<?php

use App\Models\Video;
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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_url');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description');
            $table->timestamps();
            $table->string('duration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');

        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeignIdFor(Video::class);
        });
    }
};