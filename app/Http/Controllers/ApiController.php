<?php

namespace App\Http\Controllers;

use App\Models\HistorikPorosi;
use App\Models\Marres;
use App\Models\Perdorues;
use App\Models\Porosi;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;

class ApiController extends Controller
{
    public function getAllUsers()
    {
        return ["users" => Perdorues::all()];
    }

    public function login(Request $request): JsonResponse
    {
        if($request->has(['email', 'password'])) {
            $user = Perdorues::where('email', $request['email'])->where('password', $request['password'])->first();

            if($user != null) {
                return response()->json(['success' => 'success', 'message' => 'You have successfully logged in', 'role_id' => $user['rol_id']], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'The email or password are incorrect'], 403);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 401);
        }
    }

    public function getPackagesForUser(Request $request): JsonResponse
    {
        if($request->has('user_id')) {
            $user = Perdorues::where('perdorues_id', $request['user_id'])->first();
            if($user['rol_id'] != 4) {
                $packages = Porosi::all( 'porosi_id',
                    'gjurmim_id',
                    'pagese_id',
                    'marres_id',
                    'tipi_dergeses');

                $responses = array();

                foreach ($packages as $package) {
                    $last_status = HistorikPorosi::where('porosi_id', $package['porosi_id'])
                        ->latest('data_krijimit')->first(['status_id', 'data_krijimit']);

                    $first_status = HistorikPorosi::where('porosi_id', $package['porosi_id'])
                        ->first(['perdorues_id']);
                    $sender = Perdorues::where('perdorues_id', $first_status['perdorues_id'])
                        ->first(['emri']);

                    $last_status_name = Status::where('status_id', $last_status['status_id'])
                        ->first(['status_id', 'status']);

                    $receiver = Marres::where('marres_id', $package['marres_id'])
                        ->first(['emer', 'adrese']);

                    $response = (object) [
                        'tracking_code' => $package['gjurmim_id'],
                        'last_status' => $last_status_name['status'],
                        'last_updated' => $last_status['data_krijimit'],
                        'receiver' => (object) [ 'name' => $receiver['emer'], 'address' => $receiver['adrese'] ],
                        'sender_name' => $sender['emri'],
                        'package_priority' => $package['tipi_dergeses']
                    ];
                    $responses[] = $response;
                }


                return response()->json([
                    'packages' => $responses
                ], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'Permission denied'], 403);
            }

        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 401);
        }
    }
}
