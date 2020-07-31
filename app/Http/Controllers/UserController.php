<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $repository)
    {
        $this->userRepository = $repository;
    }

    public function save(Request $request)
    {
        $this->userRepository->save($request->all());

        return redirect()->back();
    }


    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view('admin.user-setting', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->userRepository->update($id, $request->all());

        return redirect('admin.parametrage')->with(
            'ok', 'utilisateur '.$request->input('name').' a été modifié'
        );
    }

}
