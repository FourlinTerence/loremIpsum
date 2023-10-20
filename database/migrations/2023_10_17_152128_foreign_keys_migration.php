<?php

use App\Models\Basket;
use App\Models\Category;
use App\Models\Item;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
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
        Schema::table('videos', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->contrained()->cascadeOnDelete();
        });
        
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->contrained()->cascadeOnDelete();
        });
        
        Schema::table('channels', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->contrained()->cascadeOnDelete();
        });
        
        Schema::table('items', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->contrained()->cascadeOnDelete();
        });
        
        Schema::table('baskets', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->contrained()->cascadeOnDelete();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreignIdFor(Video::class)->contrained()->cascadeOnDelete();
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->foreignIdFor(Category::class)->contrained()->cascadeOnDelete();
        });

        Schema::create('video_tag', function (Blueprint $table) {
            $table->foreignIdFor(Video::class)->contrained()->cascadeOnDelete();
            $table->foreignIdFor(Tag::class)->contrained()->cascadeOnDelete();
            $table->primary('video_id','tag_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignIdFor(Role::class)->contrained()->cascadeOnDelete();
        });

        Schema::create('basket_item', function (Blueprint $table) {
            $table->foreignIdFor(Basket::class)->contrained()->cascadeOnDelete();
            $table->foreignIdFor(Item::class)->contrained()->cascadeOnDelete();
            $table->primary('basket_id','item_id');
        });
        
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
