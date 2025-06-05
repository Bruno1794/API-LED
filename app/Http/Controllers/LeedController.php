<?php

namespace App\Http\Controllers;

use App\Models\Led;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeedController extends Controller
{
    //

    public function show(Led $led): JsonResponse
    {
        return response()->json($led);
    }

    public function store(Request $request): JsonResponse
    {
        $lead = Led::where('phone', $request->phone)->first();
        if ($lead) {
            return response()->json([
                'success' => false,
                'lead' => $lead,
            ]);
        }

        $lead = Led::create([
            'nome' => $request->nome,
            'phone' => $request->phone,
            'status' => $request->status,
            'thred_id' => $request->thred_id,
        ]);

        return response()->json([
            'status' => true,
            'lead' => $lead,

        ]);
    }

    public function update(Request $request, Led $led): JsonResponse
    {
        $led->update([
            'thred_id' => $request->thred_id,
        ]);

        return response()->json([
            'status' => true,
        ]);
    }

    public function updateStatus(Request $request, Led $led): JsonResponse
    {
        $led->update([
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => true,
        ]);
    }
}
