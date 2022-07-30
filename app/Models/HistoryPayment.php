<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class HistoryPayment extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'history_payment';
    protected $fillable = [
        'type',	
        'status',	
        'user_id',	
		'banker',
        'bank_name',
        'money',
        'bank_id',
    ]; 
}
