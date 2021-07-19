<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecurringDepositResource;
use App\Models\Recurringdeposit;
use App\Models\RecurringDepositEntry;
use Illuminate\Http\Request;

class RecurringDepositController extends Controller
{
    public function recurringdepositapi(Request $request)
    {

        return $request->user()->recurringdeposit;
    }
    public function recurringdepositentryapi(Request $request, $id)
    {

        $entries = $request->user()->recurringdeposit()->findOrFail($id);

        return new RecurringDepositResource($entries);
    }
}
