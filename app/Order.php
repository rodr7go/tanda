<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'serie_id',
        'product',
        'page',
        'model',
        'id_product',
        'numb_size',
        'store_cost',
        'client_cost',
        'weeks',
        'user_id'
    ];

    public function user ()
    {
        return $this->belongsTo('\App\User');
    }

    public function getFolioAttribute()
    {
        return sprintf("%'.04d\n", $this->id);
    }

    public function serie()
    {
        return $this->belongsTo('\App\Serie');
    }
    
    public function getTotalWeeksAttribute()
    {
        return $this->serie->week_number;
    }

    public function getWeeklyAmountAttribute()
    {
        return ;
    }
}
