<?php

namespace App\Models;

use App\User;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
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
            'reserved'  => 'Reservado',
            'canceled'  => 'Cancelado',
            'paid'      => 'Pago',
            'concluded' => 'Concluído'
        ];

        if( $op )
            return $statusAvailable['reserved'];

        return $statusAvailable;
    }
}
