<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        //uno di 3 modi visti per fare validazione 
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        return response()->json([
            'success' => true,
        ]);
    }
}