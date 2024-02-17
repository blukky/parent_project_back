<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class OrganizationTypeFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const LIMIT = 'limit';
    public const OFFSET = 'offset';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::LIMIT => [$this, 'limit'],
            self::OFFSET => [$this, 'offset'],

        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function limit(Builder $builder, $value)
    {
        $builder->limit($value);
    }

    public function offset(Builder $builder, $value)
    {
        $builder->offset($value);
    }
}
