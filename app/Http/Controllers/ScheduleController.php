<?php

namespace App\Http\Controllers;

use App\Repositories\LanguageRepositoryInterface;
use App\Repositories\PhaseRepositoryInterface;
use App\Repositories\ScheduleRepositoryInterface;
use App\Repositories\StaffTypeRepositoryInterface;
use App\Repositories\TraineeRepositoryInterface;
use App\Repositories\TrainerRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ScheduleRequest;


class ScheduleController extends Controller
{
    protected $phase, $trainee, $trainer, $schedule, $language;

    public function __construct(
        PhaseRepositoryInterface $phase,
        TraineeRepositoryInterface $trainee,
        TrainerRepositoryInterface $trainer,
        ScheduleRepositoryInterface $schedule,
        LanguageRepositoryInterface $language
    )
    {
        $this->phase = $phase;
        $this->trainer = $trainer;
        $this->trainee = $trainee;
        $this->schedule = $schedule;
        $this->language = $language;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = $this->schedule->all();

        return view('admin.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phases = $this->phase->all();
        $trainers = $this->trainer->all();
        $trainees = $this->trainee->all();
        $languages = $this->language->all();
        $staff_types = $this->schedule->getStaffType();

        return view('admin.schedules.create', compact('phases', 'trainees', 'trainers', 'languages', 'staff_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $request)
    {
        $schedule = $this->schedule->store($request->all());
        if (!$schedule) {
            return back()->with('error', __('Something went wrong!'));
        }

        return redirect()->route('schedules.index');
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
        $phases = $this->schedule->getPhase($id);
        $duration = $this->schedule->getTime($id);

        return view('admin.schedules.edit', compact('phases', 'duration'));
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
