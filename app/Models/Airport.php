<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
        'id', 'city_id', 'name', 'latitude', 'longitude', 'address', 'number', 
        'zip_code', 'complement', 'created_at', 'updated_at'
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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    
}
