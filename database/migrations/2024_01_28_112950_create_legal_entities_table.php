<?php

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
        Schema::create('legal_entities', function (Blueprint $table) {
            $table->string("id")->primary();
            $table->date("include_at")->nullable(True);
            $table->string("code")->nullable(True);
            $table->string("ogrn")->nullable(True);
            $table->text("full_name")->nullable(True);
            $table->text("short_name")->nullable(True);
            $table->text("brand_name")->nullable(True);
            $table->string("short_name_illegal")->nullable(True);
            $table->uuid("organization_type_id")->index()->nullable(True);
            $table->uuid("institution_type_id")->index()->nullable(True);
            $table->string("iin")->nullable(True);
            $table->string("kpp")->nullable(True);
            $table->date("registration_at")->nullable(True);
            $table->string("org_create_sep_division")->nullable(True);
            $table->string("okopf")->nullable(True);
            $table->string("okfs")->nullable(True);
            $table->string("subject")->nullable(True);
            $table->string("ind")->nullable(True);
            $table->text("area")->nullable(True);
            $table->text("city")->nullable(True);
            $table->text("locality")->nullable(True);
            $table->string("road_network_type")->nullable(True);
            $table->string("house")->nullable(True);
            $table->string("building")->nullable(True);
            $table->string("office")->nullable(True);
            $table->string("oktmo")->nullable(True);
            $table->string("federal_treasury")->nullable(True);
            $table->string("ppo_kind")->nullable(True);
            $table->string("law_education")->nullable(True);
            $table->string("okogu")->nullable(True);
            $table->string("okpo")->nullable(True);
            $table->string("budget_level")->nullable(True);
            $table->string("budget")->nullable(True);
            $table->string("main_code")->nullable(True);
            $table->text("base_liquidation")->nullable(True);
            $table->string("form_reorganization")->nullable(True);
            $table->date("reorganization_at")->nullable(True);
            $table->date("termination_at")->nullable(True);
            $table->string("info_financial_body")->nullable(True);
            $table->string("phone_number")->nullable(True);
            $table->string("web_site")->nullable(True);
            $table->string("email")->nullable(True);
            $table->string("high_level_participant_code")->nullable(True);
            $table->string("high_level_participant_name")->nullable(True);
            $table->string("info_legal_entity_code")->nullable(True);
            $table->string("info_legal_entity_name")->nullable(True);
            $table->string("state")->nullable(True);
            $table->string("most_significant_institution")->nullable(True);
            $table->boolean("is_ogv")->default(False);
            $table->boolean("is_function_founder")->default(False);
            $table->boolean("is_separate_division")->default(False);
            $table->boolean("is_accounting")->default(False);
            $table->boolean("is_conditionally_excluded")->default(False);
            $table->date("reorganization_start_at")->nullable(True);
            $table->date("reorganization_end_at")->nullable(True);
            $table->timestamps();

            $table->foreign('organization_type_id')->references('id')->on('organization_types');
            $table->foreign('institution_type_id')->references('id')->on('institution_types');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legal_entities');
    }
};
