<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalEntity extends Model
{
    use HasFactory;
    use Filterable;

    protected $keyType = "string";


    public function institution_type()
    {
        return $this->belongsTo(InstitutionType::class, "institution_type_id", "id");
    }

    public function organization_type()
    {
        return $this->belongsTo(OrganizationType::class, "organization_type_id", "id");
    }

    public function authority_organizations()
    {
        return $this->hasMany(AuthorityOrganization::class, "legal_entity_id", "id");
    }

    public function budgetary_powers()
    {
        return $this->hasMany(BudgetaryPowers::class, "legal_entity_id", "id");
    }

    public function delegate_authorities()
    {
        return $this->hasMany(DelegateAuthority::class, "legal_entity_id", "id");
    }

    public function directors()
    {
        return $this->hasMany(Director::class, "legal_entity_id", "id");
    }

    public function f_c_payments()
    {
        return $this->hasMany(FCPayment::class, "legal_entity_id", "id");
    }

    public function f_o_payments()
    {
        return $this->hasMany(FOPayment::class, "legal_entity_id", "id");
    }

    public function ground_inclusions()
    {
        return $this->hasMany(GroundInclusion::class, "legal_entity_id", "id");
    }

    public function law_enforcements()
    {
        return $this->hasMany(LawEnforcement::class, "legal_entity_id", "id");
    }

    public function powers()
    {
        return $this->hasMany(Power::class, "legal_entity_id", "id");
    }

    public function procurement_powers()
    {
        return $this->hasMany(ProcurementPower::class, "legal_entity_id", "id");
    }

    public function promoters()
    {
        return $this->hasMany(Promoter::class, "legal_entity_id", "id");
    }

    public function settlement_powers()
    {
        return $this->hasMany(SettlementPower::class, "legal_entity_id", "id");
    }

    public function type_activities()
    {
        return $this->hasMany(TypeActivity::class, "legal_entity_id", "id");
    }

}
