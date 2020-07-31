<?php
namespace App\Repositories;

use App\Models\Registre;

class RegistreRepository extends ResourceRepository
{
    protected $model;

    public function __construct(Registre $registre)
    {
        $this->model = $registre;
    }

    public function register()
    {
        return $register = $this->model;
    }

    /**
     * Get Id for active register.
     *
     * @return $registerId $idReg
     */
    public function getActiveRegisterId()
    {
        return $this->model::where('active', 1)->get()->value('id');
    }
}