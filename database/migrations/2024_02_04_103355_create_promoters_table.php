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
        Schema::create('promoters', function (Blueprint $table) {
            $table->uuid("id")->default(Uuid::uuid4())->primary();
            $table->string('legal_entity_id');
            $table->string('founder_code')->nullable(True);
            $table->string('name')->nullable(True);
            $table->text('founder_authority')->nullable(True);
            $table->timestamps();

            // Внешний ключ на таблицу legal_entities
            $table->foreign('legal_entity_id')->references('id')->on('legal_entities')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promoters');
    }
};
