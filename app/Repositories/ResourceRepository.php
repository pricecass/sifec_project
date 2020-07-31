<?php

namespace App\Repositories;


abstract class ResourceRepository
{

    /*
    |--------------------------------------------------------------------------
    | Gestionnaire global de données
    |--------------------------------------------------------------------------
    |
    | Cette classe abstraite représente le gestionnaire de données d'un model.
    | Elle devra être héritée par toutes les gestionnaires de données de chaque
    | model. Toujours dans le soucis d'organisation, nous l'avons créé pour ne
    | pas avoir de duplication de code dans chaque gestionnaire de données.
    |
    */

    protected $model;

    public function getAll()
    {
        return $this->model->all();
    }

    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }

    public function save(Array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->getById($id)->update($inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

    public function validate(Array $request, Array $inputs)
    {
        return $this->model->validate($request, $inputs);
    }

}