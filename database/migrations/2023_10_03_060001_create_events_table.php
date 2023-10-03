<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id("event_id");
            $table->date("date");
            $table->string("location");
            $table->foreignId("org_id")->references("org_id")->on("organisators");
            $table->timestamps();
        });

        Event::create(["date" => "2023-03-02", "location" => "mom basement", "org_id" => 1]);
        Event::create(["date" => "2000-01-01", "location" => "idk", "org_id" => 2]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
