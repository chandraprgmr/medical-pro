<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiagnosaModel;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $diagnosa = new DiagnosaModel();
        if($request->get('sortBy') !== null){
            $diagnosa = $diagnosa->orderBy(
                $request->get('sortBy'), 
                $request->get('sortType')
            );
        }

        $s = $request->get('search');
        if($s !== null && !empty($s)){
            $diagnosa = $diagnosa->where('kode', 'like', '%'.$s.'%')
                            ->orWhere('nama_id', 'like', '%'.$s.'%')
                            ->orWhere('nama_en', 'like', '%'.$s.'%');
        }
        $per_page = $request->get('limit');
        return $diagnosa->paginate($per_page);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
