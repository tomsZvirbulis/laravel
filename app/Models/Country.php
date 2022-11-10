<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    
    protected $table = "country";

    protected $primary_key = "country_id";

    public $incrementing = true;
}
