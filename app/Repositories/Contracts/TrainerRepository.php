<?php

namespace App\Repositories\Contracts;

use App\Models\Language;
use App\Models\StaffType;
use App\Repositories\TrainerRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\Trainer;
use App\Models\User;
use App\Models\Office;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;

class TrainerRepository extends BaseRepository implements TrainerRepositoryInterface
{

    protected $trainer, $user, $language;

    /**
     * Create a new Repository instance.
     *
     * @param  TrainerRepositoryInterface
     * @return void
     */
    public function __construct(Trainer $trainer, User $user, Language $language)
    {
        $this->trainer = $trainer;
        $this->user = $user;
        $this->language = $language;
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

    public function store($data)
    {
        $user = $this->user->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make(Config::get('constants.constants.default_password')),
            'roles' => Config::get('constants.roles.trainer'),
        ]);
        $this->trainer->create([
            'dob' => $data['dob'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'language_id' => $data['language_id'],
            'user_id' => $user->id,
            'office_id' => $data['office_id'],
        ]);
    }

    public function get($relation = [], $id)
    {
        $trainer = $this->trainer::findOrFail($id);

        return $trainer;
    }

    public function update($data, $id)
    {
        $trainer = $this->trainer::findOrFail($id);
        $trainer->update([
            'dob' => $data['dob'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'language_id' => $data['language_id'],
            'office_id' => $data['office_id'],
        ]);

        $user = $trainer->user()->update([
            'name' => $data['name'],
            'email' => $data['email']
        ]);
    }

    public function getCurrentUser()
    {
        return Auth::user();
    }

    public function all($relation = [])
    {
        return $this->trainer::all();
    }
}
