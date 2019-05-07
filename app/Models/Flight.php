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
        /* $data['airport_origin_id'] = $request->airport_origin_id;
        $data['airport_destination_id'] = $request->airport_destination_id;
        $data['date'] = $request->date;
        $data['is_promotion'] = $request->is_promotion;
        $data['plane_id'] = $request->plane_id;
        $data['old_price'] = $request->old_price;
        $data['price'] = $request->price;
        $data['time_duration'] = $request->time_duration;
        $data['hour_output'] = $request->hour_output;
        $data['arrival_time'] = $request->arrival_time;
        $data['total_plots'] = $request->total_plots;        
        $data['description'] = $request->description;        
        $data['qty_stops'] = $request->qty_stops;    */ 
        
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



    
}
