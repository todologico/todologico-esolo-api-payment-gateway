<?php

declare(strict_types=1);

namespace App\AppInterfaces;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Auth;


//----------------------------------------------------------
// PAYMENT INTERFACE
//----------------------------------------------------------
// Used by : 
//----------------------------------------------------------

//----------------------------------------------------------

interface GatewayInterface
{
    public function payNow();
}
//----------------------------------------------------------
