<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'id', 'plane_id', 'airport_origin_id', 'airport_destination_id', 'date', 'time_duration', 'hour_output', 'arrival_time',
        'old_price', 'total_plots', 'is_promotion', 'image', 'qty_stops', 'description', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* public function search($keySearch, $totalPage = 10)
    {   

        return $this->where('name', 'LIKE', "%{$keySearch}%")
                    ->paginate($totalPage);
    } */

    
}
