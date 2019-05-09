<?php

namespace App\Repositories\Contracts;

use App\Repositories\LanguageRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\Language;

class LanguageRepository extends BaseRepository implements LanguageRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  LanguageRepositoryInterface
     * @return void
     */
    public function __construct(Language $model)
    {
        parent::__construct($model);
    }
}
