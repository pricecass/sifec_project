<?php

namespace App\Http\Controllers;

use App\Repositories\LivretRepository;
use Illuminate\Http\Request;

class LivretController extends Controller
{
    protected $livretRepository;

    public function __construct(LivretRepository $repository)
    {
        $this->livretRepository = $repository;
    }

    public function create()
    {
        return view('registres.livret-form');
    }

    public function store(Request $request)
    {
        $this->livretRepository->save($request->all());

        return redirect()->back();
    }


    public function edit($id)
    {
        $livret = $this->livretRepository->getById($id);

    }

    public function update(Request $request, $id)
    {
        $this->livretRepository->update($id, $request->all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
