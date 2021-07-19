<?php

namespace App\Http\Controllers;

use App\Http\Resources\FixeddepositResource;
use App\Models\Fixeddeposit;
use Illuminate\Http\Request;

class FixeddepositController extends Controller
{
    public function fixeddepositapi(Request $request)
    {
        // return "jj";
        return $request->user()->fixeddeposit;
        // return $fdapi;
    }
    public function fixeddepositentryapi(Request $request, $id)
    {

        $entries = $request->user()->fixeddeposit()->findOrFail($id);

        return new FixeddepositResource($entries);
    }
}
