<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadioApiData extends Model
{

    protected $fillable = [
        'current_offset',
        'all_radio_count'
    ];
    use HasFactory;
    public $timestamps = false;

}
