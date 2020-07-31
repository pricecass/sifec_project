<?php
namespace App\Repositories;

use App\Models\Mariage;

class MariageRepository extends ResourceRepository
{
    public function __construct(Mariage $marriage)
    {
        $this->model = $marriage;
    }
}