<?php
namespace App\Repositories;

use App\Models\Livret;

class LivretRepository extends ResourceRepository
{
    public function __construct(Livret $livret)
    {
        $this->model = $livret;
    }
}