<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MariageRepository;

class MariageController extends Controller
{
    protected $mariageRepository;

    public function __construct(MariageRepository $repository)
    {
        $this->mariageRepository = $repository;
    }

    public function create()
    {
        return view('mariages.marriage-form');
    }

    public function save(Request $request)
    {
        $this->mariageRepository->save($request->all());

        return redirect()->back();
    }

    public function show($id)
    {
        $declaration = $this->mariageRepository->getById($id);

        return view('mariages.celebration', compact('declaration', $declaration));
    }

}
