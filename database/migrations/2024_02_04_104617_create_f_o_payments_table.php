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
        Schema::create('f_o_payments', function (Blueprint $table) {
            $table->uuid("id")->default(Uuid::uuid4())->primary();
            $table->string('legal_entity_id');
            $table->string('account_number')->nullable();
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('organization_code')->nullable();
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
        Schema::dropIfExists('f_o_payments');
    }
};
