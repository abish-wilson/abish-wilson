<?php

namespace App\Http\Controllers;

use App\Http\Resources\GoldLoanResource;
use Illuminate\Http\Request;

class GoldLoanController extends Controller
{
    public function gold_loan_api(Request $request)
    {

        return $request->user()->gold_loan;
    }
    public function goldloanentryapi(Request $request, $id)
    {
        $entries = $request->user()->gold_loan()->findOrFail($id);

        return new GoldLoanResource($entries);
    }
}
