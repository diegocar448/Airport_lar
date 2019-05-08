<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Airport;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'id', 'plane_id', 'airport_origin_id', 'airport_destination_id', 'date', 'time_duration', 'hour_output', 'arrival_time',
        'old_price', 'price', 'total_plots', 'is_promotion', 'image', 'qty_stops', 'description', 'created_at', 'updated_at'
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



    public function getItems()
    {
        return $this->with(['origin', 'destination'])
                    ->paginate($this->totalPage);
    }

    public function newFlight($request, $nameFile = '')
    {
        $data = $request->all();    
        
        $data['image'] = $nameFile;

        return $this->create($data);
    }

    public function updateFlight($request, $nameFile = '')
    {
        $data = $request->all();           
        
        $data['image'] = $nameFile;

        return $this->update($data);
    }

    

    public function origin()
    {
        return $this->belongsTo(Airport::class, 'airport_origin_id');
    }

    public function destination()
    {
        return $this->belongsTo(Airport::class, 'airport_destination_id');
    }

    /* //mutator
    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    } */


    public function search($request, $totalPage)
    {
        $flights = $this->where(function($query) use($request){            
            if($request->code)
                $query->where('id', $request->code);

            if($request->date)
                $query->where('date', '>=', $request->date);

            if($request->hour_output)
                $query->where('hour_output', $request->hour_output);

            if($request->total_stops)
                $query->where('total_plots', $request->total_stops);
        })->paginate($totalPage);

        return $flights;
    }



    
}
