<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'series';

    protected $fillable = ['name', 'start_date', 'ending_date', 'responsible', 'week_number', 'category'];

    public function orders()
    {
        return $this->hasmany('\App\Order');
    }
}
