<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhaseRequest;
use App\Repositories\PhaseRepositoryInterface;

class PhaseController extends Controller
{
    /**
     * The interface repository instance.
     */
    protected $phase;

    /**
     * Create a new controller instance.
     *
     * @param  PhaseRepositoryInterFace
     * @return void
     */
    public function __construct(PhaseRepositoryInterface $phase)
    {
        $this->phase = $phase;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phases = $this->phase->all([]);

        return view('admin.phases.index', compact('phases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhaseRequest $request)
    {
        $phase = $this->phase->store($request->all());
        if(!$phase) {
            return back()->with('error', __('Something went wrong!'));
        }

        return redirect()->route('phases.index')->with('success', __('Create successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phase = $this->phase->get([], $id);

        return view('phase.show', compact('phase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phase = $this->phase->get([], $id);
        if(!$phase) {
            return back()->with('error', __('Something went wrong!'));
        }

        return view('admin.phases.edit', compact('phase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhaseRequest $request, $id)
    {
        $phase = $this->phase->update($request->all(), $id);
        if(!$phase) {
            return back()->with('error', __('Something went wrong!'));
        }

        return redirect()->route('phases.index')->with('success', __('Update successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->phase->delete($id);
        
        return redirect()->back()->with('success', __('Delete successfully!'));
    }
}
