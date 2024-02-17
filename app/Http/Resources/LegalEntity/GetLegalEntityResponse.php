<?php

namespace App\Http\Resources\LegalEntity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetLegalEntityResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "include_at" => $this->include_at,
            "code" => $this->code,
            "ogrn" => $this->ogrn,
            "full_name" => $this->full_name,
            "short_name" => $this->short_name,
            "brand_name" => $this->brand_name,
            "short_name_illegal" => $this->short_name_illegal,
            "iin" => $this->iin,
            "kpp" => $this->kpp,
            "registration_at" => $this->registration_at,
            "org_create_sep_division" => $this->org_create_sep_division,
            "okopf" => $this->okopf,
            "okfs" => $this->okfs,
            "subject" => $this->subject,
            "ind" => $this->ind,
            "area" => $this->area,
            "city" => $this->city,
            "locality" => $this->locality,
            "road_network_type" => $this->road_network_type,
            "house" => $this->house,
            "building" => $this->building,
            "office" => $this->office,
            "oktmo" => $this->oktmo,
            "federal_treasury" => $this->federal_treasury,
            "ppo_kind" => $this->ppo_kind,
            "law_education" => $this->law_education,
            "okogu" => $this->okogu,
            "okpo" => $this->okpo,
            "budget_level" => $this->budget_level,
            "budget" => $this->budget,
            "main_code" => $this->main_code,
            "base_liquidation" => $this->base_liquidation,
            "form_reorganization" => $this->form_reorganization,
            "reorganization_at" => $this->reorganization_at,
            "termination_at" => $this->termination_at,
            "info_financial_body" => $this->info_financial_body,
            "phone_number" => $this->phone_number,
            "web_site" => $this->web_site,
            "email" => $this->email,
            "high_level_participant_code" => $this->high_level_participant_code,
            "high_level_participant_name" => $this->high_level_participant_name,
            "info_legal_entity_code" => $this->info_legal_entity_code,
            "info_legal_entity_name" => $this->info_legal_entity_name,
            "state" => $this->state,
            "most_significant_institution" => $this->most_significant_institution,
            "is_ogv" => $this->is_ogv,
            "is_function_founder" => $this->is_function_founder,
            "is_separate_division" => $this->is_separate_division,
            "is_conditionally_excluded" => $this->is_conditionally_excluded,
            "reorganization_start_at" => $this->is_conditionally_excluded,
            "reorganization_end_at" => $this->reorganization_end_at,
        ];
    }
}
