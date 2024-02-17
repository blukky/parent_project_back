<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('type_activities', function (Blueprint $table) {
            $table->uuid("id")->default(Uuid::uuid4())->primary();
            $table->string('legal_entity_id');
            $table->string('okved')->nullable(True);
            $table->text('name')->nullable(True);
            $table->string('type')->nullable(True);
            $table->timestamps();

            $table->foreign('legal_entity_id')->references('id')->on('legal_entities')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_activities');
    }
};
