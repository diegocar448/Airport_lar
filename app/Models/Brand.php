<?php

namespace App\Models;

use App\Models\Plane;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function search($keySearch, $totalPage = 10)
    {   

        return $this->where('name', 'LIKE', "%{$keySearch}%")
                    ->paginate($totalPage);
    }

    public function planes()
    {
        return $this->hasMany(Plane::class);
    }

    
}
