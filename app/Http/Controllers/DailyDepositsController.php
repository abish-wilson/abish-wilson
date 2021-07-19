<?php

namespace App\Http\Controllers;

use App\Http\Resources\DailydepositResource;
use App\Models\Dailydeposits;
use Illuminate\Http\Request;

class DailyDepositsController extends Controller
{
    public function dailydepositapi(Request $request)
    {

        return $request->user()->dailydeposit;

        // $ddapi=Dailydeposits::find($id);

        // return $ddapi->dailydeposit;
    }
    public function dailydepositentryapi(Request $request, $id)
    {


        $entries = $request->user()->dailydeposit()->findOrFail($id);

        return new DailydepositResource($entries);
    }
}
