<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->string('sexe');
            $table->text('adress');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       

        Schema::table('videos', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class)->contrained()->cascadeOnDelete();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });

        Schema::table('channels', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });

        Schema::table('items', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });

        Schema::table('baskets', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeignIdFor(Video::class);
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
        });

        Schema::dropIfExists('users');
    }
};
