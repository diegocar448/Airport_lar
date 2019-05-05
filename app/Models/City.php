<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'id', 'state_id', 'name', 'zip_code', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* public function search($keySearch)
    {   

        return $this->where('name', 'LIKE', "%{$keySearch}%")
                    ->orWhere('state_id', $keySearch)
                    ->get();
    } */

    public function state()
    {
        return $this->belongsTo(State::class);
    }
    


    
}
