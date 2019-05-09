<?php

namespace App\Repositories\Contracts;

use App\Models\Language;
use App\Models\Office;
use App\Models\StaffType;
use App\Models\Trainer;
use App\Models\University;
use App\Models\User;
use App\Repositories\TraineeRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\Trainee;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TraineeRepository extends BaseRepository implements TraineeRepositoryInterface
{
    protected $trainee, $user;
    /**
     * Create a new Repository instance.
     *
     * @param  TraineeRepositoryInterface
     * @return void
     */
    public function __construct(Trainee $trainee, User $user)
    {
        $this->trainee = $trainee;
        $this->user = $user;
    }

    public function all($relation = [])
    {
        return $this->trainee::all();
    }

    public function getGender()
    {
        return Config::get('constants.gender');
    }

    public function getLanguage()
    {
        return $languages = Language::all();
    }

    public function getStaffType()
    {
        return $staff_types = StaffType::all();
    }

    public function getOffice()
    {
        return $offices = Office::all();
    }

    public function getUniversity()
    {
        return $universities = University::all();
    }

    public function getTrainer()
    {
        $trainer = Trainer::all();

        return $trainer;
    }

    public function store($data)
    {
        DB::beginTransaction();
        try {
            $user = $this->user->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make(Config::get('constants.constants.default_password')),
                'roles' => Config::get('constants.roles.trainee'),
            ]);
            $this->trainee->create([
                'dob' => $data['dob'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'language_id' => $data['language_id'],
                'user_id' => $user->id,
                'office_id' => $data['office_id'],
                'trainer_id' => $data['trainer_id'],
                'staff_type_id' => $data['staff_type_id'],
                'gender' => $data['gender'],
                'graduation_year' => $data['graduation_year'],
                'university_id' => $data['university_id'],
                'internship_start_time' => $data['internship_start_time'],
                'internship_end_time' => $data['internship_end_time'],
                'batch_id' => config('constants.constants.default_value'),
                'course_id' => config('constants.constants.default_value'),
            ]);
            DB::commit();
        } catch (Exception $e) {
            return redirect()->route('trainees.index');
        }
    }
    public function get($relation = [], $id)
    {
        $trainer = $this->trainee::findOrFail($id);

        return $trainer;
    }

    public function update($data, $id)
    {
        $trainee = $this->trainee::findOrFail($id);
        $trainee->update([
            'dob' => $data['dob'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'language_id' => $data['language_id'],
            'office_id' => $data['office_id'],
            'trainer_id' => $data['trainer_id'],
            'staff_type_id' => $data['staff_type_id'],
            'gender' => $data['gender'],
            'graduation_year' => $data['graduation_year'],
            'university_id' => $data['university_id'],
            'internship_start_time' => $data['internship_start_time'],
            'internship_end_time' => $data['internship_end_time'],
            'batch_id' => config('constants.constants.default_value'),
            'course_id' => config('constants.constants.default_value'),
        ]);

        $user = $trainee->user()->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);
    }

}
