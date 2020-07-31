<?php

namespace App\Repositories;

use App\Models\Declaration;

class DeclarationRepository extends ResourceRepository
{
    public function __construct(Declaration $declaration)
    {
        $this->model = $declaration;
    }
}