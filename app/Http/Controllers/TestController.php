<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TestInterface;

class TestController extends Controller
{
    /**
     * properties $testRepositories
     */
    protected $testRepositories;
    /**
     * how the form for run a new Repositories.
     */
    public function __construct( TestInterface $testRepositories )
    {
        $this->testRepositories = $testRepositories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->testRepositories->all();

        dd($data->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);

        $data = $this->testRepositories->store( $request->all() );

        dd($data->all());

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
        $data = $this->testRepositories->get($id);

        dd($data);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);

        $data = $this->testRepositories->update( $id, $request->all() );

        dd($data->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->testRepositories->delete($id);

        dd($data->all());
    }
}
