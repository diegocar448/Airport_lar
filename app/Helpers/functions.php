<?php 

use Carbon\Carbon;

//mutator
function formatDateAndTime($value, $format = 'd/m/Y')
{
    return Carbon::parse($value)->format($format);
}