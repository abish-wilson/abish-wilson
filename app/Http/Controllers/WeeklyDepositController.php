<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeeklydepositResource;
use App\Models\WeeklyDeposit;
use Illuminate\Http\Request;

class WeeklyDepositController extends Controller
{
    public function weeklydepositapi(Request $request)
    {
        return $request->user()->weeklydeposit;
    }
    public function weeklydepositentryapi(Request $request, $id)
    {
        $entries = $request->user()->weeklydeposit()->findOrFail($id);

        return new WeeklydepositResource($entries);
    }
}
