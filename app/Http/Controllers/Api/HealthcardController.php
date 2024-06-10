<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberHealthcard;

class HealthcardController extends Controller
{
    public function getAllCardHolderIds()
    {
        $cardHolderIds = MemberHealthcard::pluck('card_holder_id')->unique()->values();

        return response()->json(['card_holder_ids' => $cardHolderIds]);
    }
}
