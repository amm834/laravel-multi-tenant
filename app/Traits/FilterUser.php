<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FilterUser
{
    protected static function boot()
    {
        parent::boot();

        self::creating(function (self $project) {
            $project->user_id = auth()->id();
        });

        self::addGlobalScope(fn(Builder $builder) => $builder->where('user_id', auth()->id()));

    }
}
