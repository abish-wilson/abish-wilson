<?php

namespace App\Http\Controllers;

use App\Http\Resources\SavingAccountResource;
use App\Models\SavingAccount;
use Illuminate\Http\Request;

class SavingAccountController extends Controller
{
   public function savingAcctapi(Request $request)
   {

      return $request->user()->savingaccount;
   }

   public function savingstransactions(Request $request, $id)
   {

      $transaction = $request->user()->savingaccount()->findOrFail($id);

      return new SavingAccountResource($transaction);
   }
}
