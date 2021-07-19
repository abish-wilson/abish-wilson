<?php

namespace App\Http\Controllers;

use App\Http\Resources\MISLoanResource;
use Illuminate\Http\Request;

class MISController extends Controller
{
    public function mis_api(Request $request)
    {
        // return "ff";
        return $request->user()->mis_loan;
    }
    public function mis_loan_entryapi(Request $request, $id)
    {

        $entries = $request->user()->mis_loan()->findOrFail($id);

        return new MISLoanResource($entries);
    }
}
