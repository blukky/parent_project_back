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
        Schema::create('budgetary_powers', function (Blueprint $table) {
            $table->uuid("id")->default(Uuid::uuid4())->primary();
            $table->string('legal_entity_id');
            $table->string('authority_name')->nullable(True);
            $table->string('organization_code')->nullable(True);
            $table->string('organization_name')->nullable(True);
            $table->string('budget')->nullable(True);
            $table->string('chapter_code')->nullable(True);
            $table->date('start_date')->nullable(True);
            $table->date('end_date')->nullable(True);
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
        Schema::dropIfExists('budgetary_powers');
    }
};
