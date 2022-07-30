<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class HistoryBet extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'history_bet';
    
}
