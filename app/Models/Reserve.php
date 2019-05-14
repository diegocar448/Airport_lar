<?php

namespace App\Models;

use App\User;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{

    protected $fillable = [
        'user_id', 'flight_id', 'date_reserved', 'status', 'created_at', 'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    } 

    public function status($op = null)
    {
        $statusAvailable = [
            "reserved"  => "Reservado",
            "canceled"  => "Cancelado",
            "paid"      => "Pago",
            "concluded" => "Concluído"
        ];

        

        if( $op ){
            return $statusAvailable[$op];
        }
        return $statusAvailable;
    }

    public function changeStatus($newStatus)
    {
        $this->status = $newStatus;

        return $this->save();
    }

    public function search($request, $totalPage)
    {
        /* $this->where(function($query) use($request) {
            if($request->date)
            {

            }
        })->paginate($totalPage); */

        $reserves = $this->join('users', 'users.id', '=', 'reserves.user_id')
            ->join('flights', 'flights.id', '=', 'reserves.flight_id')    
            ->select('reserves.*', 'users.name as user_name', 'users.email as user_email', 'users.id as user_id', 'flights.id as flight_id', 'flights.date as flight_date')
            ->paginate($totalPage);

        return $reserves;
    }
}
