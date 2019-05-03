<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Plane extends Model
{
    protected $fillable = [
        'brand_id', 'qty_passengers', 'class', 'created_at', 'updated_at'
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

    public function classes($className = null)
    {
        $classes = [            
            'economic' => 'Economica',
            'luxury' => 'Luxo',
        ];        
        

        if(!$className)
        {
            return $classes;
        }

        return $classes[$className];

    }


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

 


}
