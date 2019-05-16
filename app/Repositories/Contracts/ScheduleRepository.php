<?php

namespace App\Repositories\Contracts;

use App\Models\Phase;
use App\Models\StaffType;
use App\Repositories\ScheduleRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ScheduleRepository extends BaseRepository implements ScheduleRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  ScheduleRepositoryInterface
     * @return void
     */
    public function __construct(Schedule $model)
    {
        parent::__construct($model);
    }

    public function store($data)
    {
        DB::beginTransaction();
        try {
            $this->model->language_id = $data['language_id'];
            $this->model->applied_day = config('constants.constants.default_value');
            $this->model->status = config('constants.constants.default_value');
            $this->model->staff_type_id = $data['staff_type_id'];

            if ($this->model->save()) {
                foreach ($data['phase_id'] as $key => $value) {
                    $phase_schedule_data = [
                        'time_duration' => $data['time_duration_' . $key],
                        'priority' => $key,
                    ];
                    $this->model->phases()->attach($data['phase_id'][$key], $phase_schedule_data);
                }
            }
            DB::commit();
        } catch (Exception $e) {
            return redirect()->route('schedules.index');
        }
    }

    public function getStaffType()
    {
        return StaffType::all();
    }

    public function getPhase($id)
    {
        $schedule = $this->model->findOrFail($id);

        return $schedule->phases;
    }

    public function getTime($id)
    {
        $schedule = $this->model->findOrFail($id);
        $final_result = array();

        foreach ($schedule->phases as $phase) {
            $result = ([
                'date' => $phase->pivot->time_duration . __(' day(s)'),
                'content' => $phase->name,
            ]);
            $result = (object) $result;
            array_push($final_result, $result);
        }

        return $final_result;
    }

}
