<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Exception;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use \TANIOS\Airtable\Airtable as Airtable;

class RsvpsController extends BaseController
{
    public function validatePhone(Request $request)
    {
        $guest = $this->getGuestByPhone($request);

        if ($guest == null) {
            return response()->json([
                'valid' => false,
            ]);
        }

        return response()->json([
            'valid' => true,
            'name' => $guest->first_name . ' ' . $guest->last_name,
            'people' => $guest->people,
        ]);

        // Why I am getting this error "Call to a member function connection() on null"?

    }

    public function confirm(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'is_attending' => 'required',
            'icebreaker' => '',
            'after_wedding' => '',
            'message' => 'nullable'
        ]);

        if ($data['is_attending'] == "1") {
            $data['is_attending'] = true;
        } else {
            $data['is_attending'] = false;
        }

        if (array_key_exists('icebreaker', $data)) {
            $data['icebreaker'] = true;
        } else {
            $data['icebreaker'] = false;
        }

        if (array_key_exists('after_wedding', $data)) {
            $data['after_wedding'] = true;
        } else {
            $data['after_wedding'] = false;
        }

        $response = $this->store($request, $data);

        return response()->json([
            'valid' => $response,
            'isAttending' => $data['is_attending'],
        ]);
    }

    public function store(Request $request, $data)
    {
        $guest = $this->getGuestByPhone($request);

        if ($guest != null) {
            $guest->is_attending = $data['is_attending'];
            $guest->icebreaker = $data['icebreaker'];
            $guest->after_wedding = $data['after_wedding'];
            $guest->message = $data['message'];
            $guest->save();
            return true;
        }

        return false;
    }

    private function getGuestByPhone(Request $request)
    {
        return Guest::where('phone', $request->get('phone'))
            ->where('phone', '!=', '')
            ->first();
    }
}
