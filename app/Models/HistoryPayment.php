<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class HistoryPayment extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'history_payment';
    
}
