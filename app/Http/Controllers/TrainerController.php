<?php

namespace App\Http\Controllers;

use App\Repositories\TrainerRepositoryInterface;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

    protected $trainer;

    public function __construct(TrainerRepositoryInterface $trainer)
    {
        $this->trainer = $trainer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = $this->trainer->getCurrentUser();
        $trainers = $this->trainer->all();

        return view('admin.trainers.index', compact('current_user', 'trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = $this->trainer->getLanguage();
        $offices = $this->trainer->getOffice();

        return view('admin.trainers.create', compact('languages', 'offices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->trainer->store($request->all());

        return redirect()->route('trainers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $languages = $this->trainer->getLanguage();
        $offices = $this->trainer->getOffice();
        $trainer = $this->trainer->get([], $id);

        return view('admin.trainers.edit', compact('trainer', 'languages', 'offices'));
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
        $this->trainer->update($request->all(), $id);

        return view('admin.trainers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->trainer->delete($id);

        return redirect()->back()->with('success', __('Delete successfully!'));
    }
}
