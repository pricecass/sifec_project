<?php

namespace App\Repositories;

use App\Models\Opposition;

class OppositionRepository extends ResourceRepository
{
    public function __construct(Opposition $opposition)
    {
        $this->model = $opposition;
    }
}