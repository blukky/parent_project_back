<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class OrganizationType extends Model
{
    use HasFactory;
    use Filterable;
    protected $guarded = [];
    protected $table = "organization_types";
    protected $keyType = "string";
    public $incrementing = false;
}
