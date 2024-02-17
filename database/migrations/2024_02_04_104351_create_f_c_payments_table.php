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
        Schema::create('f_c_payments', function (Blueprint $table) {
            $table->uuid("id")->default(Uuid::uuid4())->primary();
            $table->string('legal_entity_id');
            $table->string('account_number')->nullable(True);
            $table->string('code')->nullable(True);
            $table->string('name')->nullable(True);
            $table->string('kofk_code')->nullable(True);
            $table->string('kofk_name')->nullable(True);
            $table->string('organization_code')->nullable(True);
            $table->date('account_opening_date')->nullable(True);
            $table->date('account_closing_date')->nullable();
            $table->string('account_status')->nullable(True);
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
        Schema::dropIfExists('f_c_payments');
    }
};
