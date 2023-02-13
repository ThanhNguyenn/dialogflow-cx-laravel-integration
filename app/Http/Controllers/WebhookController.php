<?php

namespace App\Http\Controllers;

use App\DialogFlowUser;
use Illuminate\Http\Request;

class WebhookController extends Controller
{

    /**
     * Processing incoming webhook from DialogFlow CX
     *
     * @param  object $request
     * @return Facebook Response
     */
    public function handle(Request $request) {
        $user = new DialogFlowUserController();
        $user->store($request);

        //sending the response back based on the facebook format
        return response()->json(array(
                "fulfillmentResponse" => array(
                    "messages" => [array(
                        "text" => array(
                            "text" => array("The successful response back from server")
                        )
                )])
            ));
    }
}
