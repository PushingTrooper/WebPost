<?php

namespace App\Http\Controllers;

use App\Models\HistorikPorosi;
use App\Models\Magazine;
use App\Models\Marres;
use App\Models\Pagesa;
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

    public function getPackageDetails(Request $request) {
        if($request->has('tracking_code')) {
            $package = Porosi::where('gjurmim_id', $request['tracking_code'])
                ->first(['porosi_id', 'pagese_id', 'marres_id', 'tipi', 'tipi_dergeses', 'koment']);

            if($package!=null) {
                $historyOrder = HistorikPorosi::where('porosi_id', $package['porosi_id'])
                    ->get(['magazine_id', 'perdorues_id', 'status_id']);

                $history = array();

                foreach ($historyOrder as $time) {
                    $user = Perdorues::where('perdorues_id', $time['perdorues_id'])
                        ->first(['perdorues_id', 'emri', 'mbiemri', 'rol_id']);
                    $history[] = (object) [
                        'warehouse_id' => $time['magazine_id'],
                        'user' =>
                            ['id' => $user['perdorues_id'], 'role' => $user['rol_id'],
                                'name' => $user['emri'], 'surname' => $user['mbiemri']],
                        'status_id' => $time['status_id']
                    ];
                }

                $paymentQuery = Pagesa::where('pagese_id', $package['pagese_id'])->first(['shuma', 'kryer']);
                $payment = (object) [
                    'value' => $paymentQuery['shuma'],
                    'is_completed' => $paymentQuery['kyer']
                ];

                $receiverQuery = Marres::where('marres_id', $package['marres_id'])
                    ->first(['emer', 'mbiemer', 'adrese']);
                $receiver = (object) [
                    'name' => $receiverQuery['emer'],
                    'surnmae' => $receiverQuery['mbiemer'],
                    'address' => $receiverQuery['adrese'],
                ];

                return response()->json([
                    'history' => $history,
                    'payment' => $payment,
                    'receiver' => $receiver,
                    'type' => $package['tipi'],
                    'package_priority' => $package['tipi_dergeses'],
                    'comment' => $package['koment']
                ], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'Did not find the requested package'], 404);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 401);
        }
    }

    public function getAllWarehouses() {
        $warehouses = Magazine::all();
        return $warehouses;
    }
}
