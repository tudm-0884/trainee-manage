<?php

namespace App\Http\Controllers;

use App\Repositories\TraineeRepositoryInterface;
use Illuminate\Http\Request;

class TraineeController extends Controller
{

    protected $trainee;

    public function __construct(TraineeRepositoryInterface $trainee)
    {
        $this->trainee = $trainee;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees = $this->trainee->all();

        return view('admin.trainees.index', compact('trainees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = $this->trainee->getLanguage();
        $offices = $this->trainee->getOffice();
        $staff_types = $this->trainee->getStaffType();
        $universities = $this->trainee->getUniversity();
        $genders = $this->trainee->getGender();
        $trainers = $this->trainee->getTrainer();

        return view('admin.trainees.create', compact('languages', 'offices', 'staff_types', 'universities', 'genders', 'trainers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->trainee->store($request);

        return redirect()->route('trainees.index');
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
        $languages = $this->trainee->getLanguage();
        $offices = $this->trainee->getOffice();
        $staff_types = $this->trainee->getStaffType();
        $universities = $this->trainee->getUniversity();
        $genders = $this->trainee->getGender();
        $trainers = $this->trainee->getTrainer();
        $trainee = $this->trainee->get([], $id);

        return view('admin.trainees.edit', compact('languages', 'offices', 'staff_types', 'universities', 'genders', 'trainers', 'trainee'));
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
        $this->trainee->update($request->all(), $id);

        return redirect()->route('trainees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->trainee->delete($id);

        return redirect()->back()->with('success', __('Delete successfully!'));
    }
}
