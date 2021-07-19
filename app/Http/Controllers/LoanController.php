<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoanResource;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loanapi(Request $request)
    {

        return $request->user()->loan;
    }
    public function loanentryapi(Request $request, $id)
    {
        $entries = $request->user()->loan()->findOrFail($id);

        return new LoanResource($entries);
    }
}
