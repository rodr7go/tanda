<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'series';

    protected $fillable = ['name', 'start_date', 'ending_date', 'user_id', 'week_number', 'category'];

    public function orders()
    {
        return $this->hasmany('\App\Order');
    }

    public function responsible()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }
}