<?php

namespace App\Admin\Repositories;

use App\Models\CategoryGame as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CategoryGame extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
