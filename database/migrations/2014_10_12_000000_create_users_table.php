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
            $table->string('email')->unique();
            $table->string('gender');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
        User::create(["name" => "sus", "email" => "sus@sus.sus", "gender" => "sus"]);
        User::create(["name" => "sussy baka", "email" => "amongus@among.us", "gender" => "baka"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
