<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class CharacterController extends Controller
{

    /*
     * Data used for Online Players Widget | List
     * Data return structure
     * Format : JSON
     * TODO: Check Nation IDS Sandy | Windy | Bastok
     *
     *  {
     *      "data": [
     *          {
     *              "charname": "Chakra",
     *              "nation": 0,
     *              "zone_name": "Southern_San_dOria",
     *              "main_level": 75,
     *              "sub_level": 0,
     *              "main_job": "WHM",
     *              "sub_job": ""
     *          }
     *      ]
     *  }
     *
     */

    public function online_players_all()
    {

        $online_players = [];

        $account_sessions = DB::table('accounts_sessions')->get();

        foreach ($account_sessions as $session) {

            //DB Connections dspdb chars and char_stats tables

            //TODO: Pseudo Queries - > Join and Temp Tables

            $character_details_basic = DB::table('chars')->where('charid', '=', $session->charid)->get();
            $character_details_advanced = DB::table('char_stats')->where('charid', '=', $session->charid)->get();
            $character_details_location = DB::table('zone_settings')->where('zoneid','=', $character_details_basic[0]->pos_zone)->get();
            $character_details_mjob = DB::table('job_ids')->where('job_id', '=', $character_details_advanced[0]->mjob)->get();
            $character_details_sjob = DB::table('job_ids')->where('job_id', '=', $character_details_advanced[0]->sjob)->get();
            //Build response

            $online_players['data'][] = [
                'charname' => $character_details_basic[0]->charname,
                'nation' => $character_details_basic[0]->nation,
                'zone_name' => $character_details_location[0]->name,
                'main_level' =>$character_details_advanced[0]->mlvl,
                'sub_level' =>$character_details_advanced[0]->slvl,
                'main_job' => $character_details_mjob[0]->job_short,
                'sub_job' => $character_details_sjob[0]->job_short
            ];

        }

        return response()->json($online_players, 200, [], JSON_PRETTY_PRINT);

    }

    public function player_profile()
    {
        $player_info = []; //Connection to char -> charid JOIN the rest of the info
        /* :|:Think Tank :|:
         * Items
         * AH History
         * Map Location
         * More will come
         */
    }

    public function search_player(Request $request)
    {

        $player_name = $request->name;


    }


}
