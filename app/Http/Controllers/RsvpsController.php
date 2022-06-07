<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use \TANIOS\Airtable\Airtable as Airtable;

class RsvpsController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|digits:10',
            'is_attending' => 'required',
            'icebreaker' => '',
            'after_wedding' => '',
            'guests_count' => '',
            'message' => 'nullable'
        ]);

        $data['phone'] = preg_replace(
            '~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~',
            '($1) $2-$3',
            $data['phone']
        );

        if($data['is_attending'] == "1") {
            $data['is_attending'] = true;
            $data['guests_count'] = intval($data['guests_count']);
        } else {
            $data['is_attending'] = false;
            $data['guests_count'] = 0;
        }

        if(array_key_exists('icebreaker', $data)) {
            $data['icebreaker'] = true;
        } else {
            $data['icebreaker'] = false;
        }

        if(array_key_exists('after_wedding', $data)) {
            $data['after_wedding'] = true;
        } else {
            $data['after_wedding'] = false;
        }

        $response = $this->store($data);

        if($response->id == null) {
            \Sentry\captureException(
                new Exception(
                    $response->error->message,
                    0,
                    new Exception(var_export($data, true))
                )
            );
            return response()->json(
                [
                    'customError' => 'No se ha podido insertar el registro',
                ],
                400
            );
        } else {
            return response()->json([
                'isAttending' => $data['is_attending'],
            ]);
        }
    }

    public function store($data)
    {
        $airtable = new Airtable([
            'api_key' => env('AIRTABLE_API_KEY'),
            'base'    => env('AIRTABLE_BASE_ID')
        ]);

        return $airtable->saveContent( 'Asistentes', $data );
    }
}
