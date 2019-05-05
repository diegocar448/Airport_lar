<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
       'id', 'name', 'initials', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function search($keySearch)
    {   

        return $this->where('name', 'LIKE', "%{$keySearch}%")
                    ->orWhere('initials', $keySearch)
                    ->get();
    }    

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function searchCities($cityName, $totalPage = 10)
    {
        return $this->cities()
                            ->where('name', 'LIKE', $cityName)
                            ->paginate($totalPage);
    }

  
}
