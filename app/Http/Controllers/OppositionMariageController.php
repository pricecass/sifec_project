<?php

namespace App\Http\Controllers;

use App\Models\Utilities;
use App\Repositories\OppositionRepository;
use Illuminate\Http\Request;
use DB;

class OppositionMariageController extends Controller
{

    use Utilities;

    protected $oppositionRepository;

    public function __construct(OppositionRepository $repository)
    {
        $this->oppositionRepository = $repository;
    }

    public function index()
    {
        $oppositions = $this->oppositionRepository->list();

        return view( 'mariages.opposition-list', compact('oppositions') );
    }

    public function getOppDeclaration($id)
    {
        $centre = $this->getCentre();
        $numero = 0;

        $oppositions = DB::table('declarations')
            ->join('oppositions', 'declarations.id', '=', 'oppositions.declaration_id')
            ->select('oppositions.*',
                'declarations.nom_epoux',
                'declarations.prenom_epoux',
                'declarations.nom_epouse',
                'declarations.prenom_epouse',
                'date_celebration',
                'lieu_celebration'
            )->where('declarations.id','=', $id)->get();

        return view('mariages.opposition-list', compact('oppositions', 'centre', 'numero'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->oppositionRepository->save($request->all());

        return redirect()->back()
            ->with('success', 'Votre opposition au mariage a bien été engregistrée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
