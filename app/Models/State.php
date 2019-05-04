<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name', 'initials', 'created_at', 'updated_at'
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

  
}
