<?php

namespace App\Admin\Repositories;

use App\Models\HistoryBet as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class HistoryBet extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
    public static function getbets($category,$start,$end){
        return \App\Models\HistoryBet::where('category',$category)->where('status',1)->whereBetween('created_at',[$start,$end])->get();
    }
}
