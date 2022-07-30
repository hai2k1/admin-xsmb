<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class HistoryBet extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'history_bet';
    protected $fillable = [
        'user_id',	
        'category',	
        'cachchoi',	
		'infor_bet',
        'sodoncuoc',
        'money',
        'capdonhan',
        'status',
        'luotso',
        'thangthua',
    ]; 
}
