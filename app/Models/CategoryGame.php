<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CategoryGame extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'category_games';
    
}
