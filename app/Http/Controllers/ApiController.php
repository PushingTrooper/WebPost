<?php

namespace App\Http\Controllers;

use App\Models\HistorikPorosi;
use App\Models\Magazine;
use App\Models\Marres;
use App\Models\Pagesa;
use App\Models\Perdorues;
use App\Models\Porosi;
use App\Models\Qytet;
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Object_;

class ApiController extends Controller
{
    public function getAllUsers()
    {
        return ["users" => Perdorues::all()];
    }

    public function login(Request $request): JsonResponse
    {
        if ($request->has(['email', 'password'])) {
            $user = Perdorues::where('email', $request['email'])->where('password', $request['password'])->first();

            if ($user != null) {
                return response()->json(['success' => 'success', 'message' => 'You have successfully logged in', 'role_id' => $user['rol_id'],
                    'user_id' => $user['perdorues_id'], 'warehouse_id' => $user['magazine_id']], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'The email or password are incorrect!'], 403);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters!'], 400);
        }
    }

    public function registerCustomer(Request $request): JsonResponse
    {
        if ($request->has(['email', 'password', 'name', 'surname', 'address'])) {
            $email = $request['email'];
            $password = $request['password'];
            $name = $request['name'];
            $surname = $request['surname'];
            $address = $request['address'];

            $user = Perdorues::where('email', $request['email'])->first();
            if($user == null) {
                $new_user = array('email' => $email, 'password' => $password,
                    'emri' => $name, 'mbiemri' => $surname,
                    'adrese' => $address, 'rol_id' => 4,
                    'magazine_id' => 0, 'qytet_id' => 0,
                    'paga' => 0, 'foto_profili' => '',
                    'latitude' => 90, 'longitude' => 90,
                    'kerkuar_ndryshim_fjalekalimi' => 0);

                Perdorues::create($new_user);
                return response()->json(['success' => 'success', 'message' => 'The user is successfully created'], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'User already exists'], 401);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function registerAdmin(Request $request): JsonResponse
    {
        if ($request->has(['email', 'password', 'name', 'surname', 'pay', 'address'])) {
            $email = $request['email'];
            $password = $request['password'];
            $name = $request['name'];
            $surname = $request['surname'];
            $pay = $request['pay'];
            $address = $request['address'];

            $user = Perdorues::where('email', $request['email'])->first();
            if($user == null) {
                $new_user = array('email' => $email, 'password' => $password,
                    'emri' => $name, 'mbiemri' => $surname,
                    'adrese' => $address, 'rol_id' => 1,
                    'magazine_id' => 0, 'qytet_id' => 0,
                    'paga' => $pay, 'foto_profili' => '',
                    'latitude' => 90, 'longitude' => 90,
                    'kerkuar_ndryshim_fjalekalimi' => 0);

                Perdorues::create($new_user);
                return response()->json(['success' => 'success', 'message' => 'The user is successfully created'], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'User already exists'], 401);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function registerWarehouseman(Request $request): JsonResponse
    {
        if ($request->has(['email', 'password', 'name', 'surname', 'pay', 'magazine_id', 'city_id', 'address'])) {
            $email = $request['email'];
            $password = $request['password'];
            $name = $request['name'];
            $surname = $request['surname'];
            $pay = $request['pay'];
            $warehouseId = $request['magazine_id'];
            $cityId = $request['city_id'];
            $address = $request['address'];

            $user = Perdorues::where('email', $request['email'])->first();
            if($user == null) {
                $new_user = array('email' => $email, 'password' => $password,
                    'emri' => $name, 'mbiemri' => $surname,
                    'adrese' => $address, 'rol_id' => 2,
                    'magazine_id' => $warehouseId, 'qytet_id' => $cityId,
                    'paga' => $pay, 'foto_profili' => '',
                    'latitude' => 90, 'longitude' => 90,
                    'kerkuar_ndryshim_fjalekalimi' => 0);

                Perdorues::create($new_user);
                return response()->json(['success' => 'success', 'message' => 'The user is successfully created'], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'User already exists'], 401);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function registerPostman(Request $request): JsonResponse
    {
        if ($request->has(['email', 'password', 'name', 'surname', 'pay', 'city_id', 'address'])) {
            $email = $request['email'];
            $password = $request['password'];
            $name = $request['name'];
            $surname = $request['surname'];
            $pay = $request['pay'];
            $cityId = $request['city_id'];
            $address = $request['address'];

            $user = Perdorues::where('email', $request['email'])->first();
            if($user == null) {
                $new_user = array('email' => $email, 'password' => $password,
                    'emri' => $name, 'mbiemri' => $surname,
                    'adrese' => $address, 'rol_id' => 3,
                    'magazine_id' => 0, 'qytet_id' => $cityId,
                    'paga' => $pay, 'foto_profili' => '',
                    'latitude' => 90, 'longitude' => 90,
                    'kerkuar_ndryshim_fjalekalimi' => 0);

                Perdorues::create($new_user);
                return response()->json(['success' => 'success', 'message' => 'The user is successfully created'], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'User already exists'], 401);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function getAllPackages(Request $request): JsonResponse
    {
        if ($request->has('user_id')) {
            $user = Perdorues::where('perdorues_id', $request['user_id'])->first();
            if ($user['rol_id'] != 4) {
                $packages = Porosi::all('porosi_id',
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
                    if($first_status!=null) {
                        $sender = Perdorues::where('perdorues_id', $first_status['perdorues_id'])
                            ->first(['emri']);

                        $last_status_name = Status::where('status_id', $last_status['status_id'])
                            ->first(['status_id', 'status']);

                        $receiver = Marres::where('marres_id', $package['marres_id'])
                            ->first(['emer', 'adrese']);

                        $response = (object)[
                            'tracking_code' => $package['gjurmim_id'],
                            'last_status' => $last_status_name['status'],
                            'last_updated' => $last_status['data_krijimit'],
                            'receiver' => (object)['name' => $receiver['emer'], 'address' => $receiver['adrese']],
                            'sender_name' => $sender['emri'],
                            'package_priority' => $package['tipi_dergeses']
                        ];
                        $responses[] = $response;
                    }
                }


                return response()->json([
                    'packages' => $responses
                ], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'Permission denied'], 403);
            }

        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function getPackagesForUser(Request $request): JsonResponse
    {
        if ($request->has('user_id')) {
            $user = Perdorues::where('perdorues_id', $request['user_id'])->first();
            if ($user['rol_id'] == 4) {
                $packages = Porosi::all('porosi_id',
                    'gjurmim_id',
                    'pagese_id',
                    'marres_id',
                    'tipi_dergeses');

                $responses = array();

                foreach ($packages as $package) {
                    $last_status = HistorikPorosi::where('porosi_id', $package['porosi_id'])
                        ->latest('data_krijimit')->first(['status_id', 'data_krijimit']);

                    $first_status = HistorikPorosi::where(['porosi_id' => $package['porosi_id'], 'perdorues_id' => $user['rol_id']])
                        ->first(['perdorues_id']);
                    if($first_status!=null) {
                        $sender = Perdorues::where('perdorues_id', $first_status['perdorues_id'])
                            ->first(['emri']);

                        $last_status_name = Status::where('status_id', $last_status['status_id'])
                            ->first(['status_id', 'status']);

                        $receiver = Marres::where('marres_id', $package['marres_id'])
                            ->first(['emer', 'adrese']);

                        $response = (object)[
                            'tracking_code' => $package['gjurmim_id'],
                            'last_status' => $last_status_name['status'],
                            'last_updated' => $last_status['data_krijimit'],
                            'receiver' => (object)['name' => $receiver['emer'], 'address' => $receiver['adrese']],
                            'sender_name' => $sender['emri'],
                            'package_priority' => $package['tipi_dergeses']
                        ];
                        $responses[] = $response;
                    }
                }


                return response()->json([
                    'packages' => $responses
                ], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'Permission denied'], 403);
            }

        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function getLogistics(Request $request): JsonResponse
    {
        if ($request->has('user_id', 'warehouse_id')) {
            $user = Perdorues::where('perdorues_id', $request['user_id'])->first();
            $warehouseId = $request['warehouse_id'];
            if ($user['rol_id'] != 4) {
                $packages = Porosi::all('porosi_id',
                    'gjurmim_id',
                    'pagese_id',
                    'marres_id',
                    'tipi_dergeses');

                $coming_in = array();
                $going_out = array();

                foreach ($packages as $package) {
                    $last_status = HistorikPorosi::where(['porosi_id' => $package['porosi_id'], 'magazine_id' => $warehouseId])
                        ->latest('data_krijimit')->first(['status_id', 'data_krijimit']);
                    if($last_status!=null) {
                        if($last_status['status_id'] == 4 && Carbon::parse($last_status['data_krijimit']) >= Carbon::now()->subDay()) {
                            $first_status = HistorikPorosi::where('porosi_id', $package['porosi_id'])
                                ->first(['perdorues_id']);
                            $sender = Perdorues::where('perdorues_id', $first_status['perdorues_id'])
                                ->first(['emri']);

                            $last_status_name = Status::where('status_id', $last_status['status_id'])
                                ->first(['status_id', 'status']);

                            $receiver = Marres::where('marres_id', $package['marres_id'])
                                ->first(['emer', 'adrese']);

                            $response = (object)[
                                'tracking_code' => $package['gjurmim_id'],
                                'last_status' => $last_status_name['status'],
                                'last_updated' => $last_status['data_krijimit'],
                                'receiver' => (object)['name' => $receiver['emer'], 'address' => $receiver['adrese']],
                                'sender_name' => $sender['emri'],
                                'package_priority' => $package['tipi_dergeses']
                            ];
                            $coming_in[] = $response;
                        } else if(($last_status['status_id'] == 3 || $last_status['status_id'] == 5) && Carbon::parse($last_status['data_krijimit']) >= Carbon::now()->subDay()) {
                            $first_status = HistorikPorosi::where('porosi_id', $package['porosi_id'])
                                ->first(['perdorues_id']);
                            $sender = Perdorues::where('perdorues_id', $first_status['perdorues_id'])
                                ->first(['emri']);

                            $last_status_name = Status::where('status_id', $last_status['status_id'])
                                ->first(['status_id', 'status']);

                            $receiver = Marres::where('marres_id', $package['marres_id'])
                                ->first(['emer', 'adrese']);

                            $response = (object)[
                                'tracking_code' => $package['gjurmim_id'],
                                'last_status' => $last_status_name['status'],
                                'last_updated' => $last_status['data_krijimit'],
                                'receiver' => (object)['name' => $receiver['emer'], 'address' => $receiver['adrese']],
                                'sender_name' => $sender['emri'],
                                'package_priority' => $package['tipi_dergeses']
                            ];
                            $going_out[] = $response;
                        }
                    }
                }


                return response()->json([
                    'coming_in' => $coming_in,
                    'going_out' => $going_out
                ], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'Permission denied'], 403);
            }

        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function getPackageDetails(Request $request): JsonResponse
    {
        if ($request->has('tracking_code')) {
            $package = Porosi::where('gjurmim_id', $request['tracking_code'])
                ->first(['porosi_id', 'pagese_id', 'marres_id', 'tipi', 'tipi_dergeses', 'koment']);

            if ($package != null) {
                $historyOrder = HistorikPorosi::where('porosi_id', $package['porosi_id'])
                    ->get(['magazine_id', 'perdorues_id', 'status_id', 'data_krijimit']);

                $history = array();

                foreach ($historyOrder as $time) {
                    $user = Perdorues::where('perdorues_id', $time['perdorues_id'])
                        ->first(['perdorues_id', 'emri', 'mbiemri', 'rol_id']);

                    $status = Status::where('status_id', $time['status_id'])->first('status');

                    $history[] = (object)[
                        'warehouse_id' => $time['magazine_id'],
                        'user' =>
                            ['id' => $user['perdorues_id'], 'role' => $user['rol_id'],
                                'name' => $user['emri'], 'surname' => $user['mbiemri']],
                        'status_id' => $time['status_id'],
                        'status' => $status['status'],
                        'date' => $time['data_krijimit']
                    ];
                }

                $paymentQuery = Pagesa::where('pagese_id', $package['pagese_id'])->first(['shuma', 'kryer']);
                $payment = (object)[
                    'value' => $paymentQuery['shuma'],
                    'is_completed' => $paymentQuery['kyer']
                ];

                $receiverQuery = Marres::where('marres_id', $package['marres_id'])
                    ->first(['emer', 'mbiemer', 'adrese']);
                $receiver = (object)[
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
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function getAllCities(): JsonResponse
    {
        $cities = Qytet::all();
        return response()->json(['cities' => $cities], 200);
    }

    public function getAllWarehouses(): JsonResponse
    {
        $warehouses = Magazine::all();
        return response()->json(['warehouses' => $warehouses], 200);
    }

    private function goOneStatusUp($last_status_id, $package_id, $last_status, $user_id)
    {
        $new_status_id = $last_status_id + 1;
        $new_status = array('porosi_id' => $package_id, 'status_id' => $new_status_id,
            'magazine_id' => $last_status['magazine_id'], 'perdorues_id' => $user_id,
            'data_krijimit' => Carbon::now());

        HistorikPorosi::create($new_status);
    }

    public function changeStatusOfPackage(Request $request): JsonResponse
    {
        if ($request->has(['user_id', 'tracking_code'])) {
            $user_id = $request['user_id'];
            $tracking_code = $request['tracking_code'];
            $current_package = Porosi::where('gjurmim_id', $tracking_code)->first('porosi_id');
            $package_id = $current_package['porosi_id'];
            $last_status = HistorikPorosi::where('porosi_id', $package_id)
                ->latest('data_krijimit')->first(['status_id', 'magazine_id']);
            $last_status_id = $last_status['status_id'];

            $user = Perdorues::where('perdorues_id', $user_id)->first('rol_id');
            if ($user != null) {
                $role_id = $user['rol_id'];
                if ($role_id == 2) {
                    if ($last_status_id == 1 || $last_status_id == 3) {
                        $this->goOneStatusUp($last_status_id, $package_id, $last_status, $user_id);
                        return response()->json(['success' => 'success', 'message' => 'Status updated successfully'], 200);
                    } else {
                        return response()->json(['success' => 'failed', 'message' => 'You don\'t have the rights to change this status!'], 403);
                    }
                } else if ($role_id == 3) {
                    if ($last_status_id == 2 || $last_status_id == 4 || $last_status_id == 5 || $last_status_id == 6) {
                        $this->goOneStatusUp($last_status_id, $package_id, $last_status, $user_id);
                        return response()->json(['success' => 'success', 'message' => 'Status updated successfully'], 200);
                    } else {
                        return response()->json(['success' => 'failed', 'message' => 'You don\'t have the rights to change this status!'], 403);
                    }
                } else if ($role_id == 1) {
                    if ($last_status_id < 7) {
                        $this->goOneStatusUp($last_status_id, $package_id, $last_status, $user_id);
                        return response()->json(['success' => 'success', 'message' => 'Status updated successfully'], 200);
                    } else {
                        return response()->json(['success' => 'failed', 'message' => 'You don\'t have the rights to change this status!'], 403);
                    }
                } else {
                    return response()->json(['success' => 'failed', 'message' => 'You don\'t have the rights to change this status!'], 403);
                }
            } else {
                return response()->json(['success' => 'failed', 'message' => 'This user does not exist'], 404);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function createNewPackage(Request $request): JsonResponse {
        if($request->has(['type', 'package_priority', 'comment', 'receiver_name',
            'receiver_surname', 'receiver_address', 'city_id', 'pay', 'user_id'])) {
            $type = $request['type'];
            $priority = $request['package_priority'];
            $comment = $request['comment'];
            $rName = $request['receiver_name'];
            $rSurname = $request['receiver_surname'];
            $rAddress = $request['receiver_address'];
            $cityId = $request['city_id'];
            $paySum = $request['pay'];
            $userId = $request['user_id'];

            $newReceiver = ['qytet_id' => $cityId, 'emer' => $rName, 'mbiemer' => $rSurname, 'adrese' => $rAddress];
            $receiver = Marres::create($newReceiver)->latest()->first();

            $newPay = ['shuma' => $paySum, 'kryer' => 0, 'nga_derguesi' => 1, 'data_pagimit' => Carbon::now()];
            $pay = Pagesa::create($newPay)->latest()->first();

            $newPackage = ['pagese_id' => $pay['pagese_id'], 'marres_id' => $receiver['marres_id'], 'gjurmim_id' => random_int(0, 746876), 'tipi' => $type,
                'tipi_dergeses' => $priority, 'koment' => $comment];
            $package = Porosi::create($newPackage)->latest()->first();

            $newStory = ['porosi_id' => $package['porosi_id'], 'status_id' => 1, 'magazine_id' => 0, 'perdorues_id' => $userId, 'data_krijimit' => Carbon::now()];
            HistorikPorosi::create($newStory);

            return response()->json(['success' => 'success', 'message' => 'Package created successfully'], 200);

        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function editPackage(Request $request): JsonResponse
    {
        if ($request->has(['tracking_code', 'user_id', 'receiver_name', 'receiver_surname',
            'receiver_address', 'type', 'package_priority', 'comment'])) {

            $tracking_code = $request['tracking_code'];
            $user_id = $request['user_id'];
            $receiver_name = $request['receiver_name'];
            $receiver_surname = $request['receiver_surname'];
            $receiver_address = $request['receiver_address'];
            $type = $request['type'];
            $package_priority = $request['package_priority'];
            $comment = $request['comment'];

            $package = Porosi::where('gjurmim_id', $tracking_code)->first();
            //$receiver = Marres::where('marres_id', $package['marres_id'])->first();
            $receiver_new_values = ['emer' => $receiver_name, 'mbiemer' => $receiver_surname, 'adrese' => $receiver_address];
            Marres::where('marres_id', $package['marres_id'])->update($receiver_new_values);

            $package_new_values = ['tipi' => $type, 'tipi_dergeses' => $package_priority, 'koment' => $comment];
            Porosi::where('gjurmim_id', $tracking_code)->update($package_new_values);

            return response()->json(['success' => 'success', 'message' => 'Package updated successfully'], 200);
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function reportLostPackage(Request $request): JsonResponse
    {
        if ($request->has(['user_id', 'tracking_code'])) {
            $user_id = $request['user_id'];
            $tracking_code = $request['tracking_code'];

            $user = Perdorues::where('perdorues_id', $user_id)->first('rol_id');
            if ($user != null) {
                $role_id = $user['rol_id'];
                if ($role_id != 4) {
                    $current_package = Porosi::where('gjurmim_id', $tracking_code)->first('porosi_id');
                    $package_id = $current_package['porosi_id'];
                    $last_status = HistorikPorosi::where('porosi_id', $package_id)
                        ->latest('data_krijimit')->first(['status_id', 'magazine_id']);
                    $last_status_id = $last_status['status_id'];

                    if ($last_status_id < 8) {
                        $new_status = array('porosi_id' => $package_id, 'status_id' => 8,
                            'magazine_id' => $last_status['magazine_id'], 'perdorues_id' => $user_id,
                            'data_krijimit' => Carbon::now());

                        HistorikPorosi::create($new_status);
                        return response()->json(['success' => 'success',
                            'message' => 'The package was reported as lost'], 200);
                    } else {
                        return response()->json(['success' => 'success',
                            'message' => 'The package was already reported as lost'], 409);
                    }
                } else {
                    return response()->json(['success' => 'failed',
                        'message' => 'You don\'t the required permissions to report lost packages'], 403);
                }
            } else {
                return response()->json(['success' => 'failed',
                    'message' => 'User was not found'], 404);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function deletePackage(Request $request): JsonResponse
    {
        if ($request->has(['user_id', 'tracking_code'])) {
            $user_id = $request['user_id'];
            $tracking_code = $request['tracking_code'];

            $user = Perdorues::where('perdorues_id', $user_id)->first('rol_id');
            if ($user != null) {
                $role_id = $user['rol_id'];
                if ($role_id == 1 || $role_id == 2) {
                    $current_package = Porosi::where('gjurmim_id', $tracking_code)->first('porosi_id');
                    $package_id = $current_package['porosi_id'];
                    $last_status = HistorikPorosi::where('porosi_id', $package_id)
                        ->latest('data_krijimit')->first(['status_id', 'magazine_id']);
                    $last_status_id = $last_status['status_id'];

                    if ($last_status_id < 9) {
                        $new_status = array('porosi_id' => $package_id, 'status_id' => 9,
                            'magazine_id' => $last_status['magazine_id'], 'perdorues_id' => $user_id,
                            'data_krijimit' => Carbon::now());

                        HistorikPorosi::create($new_status);
                        return response()->json(['success' => 'success',
                            'message' => 'The package was deleted'], 200);
                    } else {
                        return response()->json(['success' => 'success',
                            'message' => 'The package was already deleted'], 409);
                    }
                } else {
                    return response()->json(['success' => 'failed',
                        'message' => 'You don\'t the required permissions to delete packages'], 403);
                }
            } else {
                return response()->json(['success' => 'failed',
                    'message' => 'User was not found'], 404);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function getAllPostmenLocation(Request $request): JsonResponse
    {
        if ($request->has(['user_id'])) {
            $user_id = $request['user_id'];
            $user = Perdorues::where('perdorues_id', $user_id)->first('rol_id');
            if ($user != null) {
                $role_id = $user['rol_id'];
                if ($role_id == 1) {
                    $postmen = Perdorues::where('rol_id', 3)
                        ->get(['emri', 'mbiemri', 'perdorues_id', 'latitude', 'longitude']);

                    $postmen_response = array();
                    foreach ($postmen as $postman) {
                        $postmen_response[] = (object)[
                            'name' => $postman['emri'],
                            'surname' => $postman['mbiemri'],
                            'user_id' => $postman['perdorues_id'],
                            'latitude' => $postman['latitude'],
                            'longitude' => $postman['longitude']
                        ];
                    }
                    return response()->json(['postmen' => $postmen_response], 200);
                } else {
                    return response()->json(['success' => 'failed',
                        'message' => 'You don\'t the required permissions for this request'], 403);
                }
            } else {
                return response()->json(['success' => 'failed',
                    'message' => 'User was not found'], 404);
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    public function changePayAndRole(Request $request): JsonResponse
    {
        if ($request->has(['current_user_id', 'user_id', 'pay', 'role_id'])) {
            $current_user_id = $request['current_user_id'];
            $user_id = $request['user_id'];
            $pay = $request['pay'];
            $role_id = $request['role_id'];

            if (!is_numeric($pay)) {
                return response()->json(['success' => 'failed', 'message' => 'Pay is not a number'], 400);
            } else if ($role_id > 4) {
                //TODO: Check the number roles in the future if you want
                return response()->json(['success' => 'failed', 'message' => 'Role doesn\'t exist'], 400);
            } else {
                $current_user = Perdorues::where('perdorues_id', $current_user_id)->first('rol_id');
                if ($current_user != null) {
                    $current_role_id = $current_user['rol_id'];
                    if ($current_role_id == 1) {
                        $user = Perdorues::where('perdorues_id', $user_id)->first('rol_id');
                        if ($user != null) {
                            $new_values = ['paga' => $pay, 'rol_id' => $role_id];
                            Perdorues::where('perdorues_id', $user_id)->update($new_values);

                            return response()->json(['success' => 'success',
                                'message' => 'The user was updated'], 200);
                        } else {
                            return response()->json(['success' => 'failed',
                                'message' => 'Selected user was not found'], 404);
                        }

                    } else {
                        return response()->json(['success' => 'failed',
                            'message' => 'You don\'t the required permissions'], 403);
                    }
                } else {
                    return response()->json(['success' => 'failed',
                        'message' => 'User was not found'], 404);
                }
            }
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    function getAllUsersReqPassChange(): JsonResponse {
        $users = Perdorues::where('kerkuar_ndryshim_fjalekalimi', 1)->get(['emri', 'mbiemri', 'email', 'password']);
        return response()->json(['users' => $users], 200);
    }

    function changePassword(Request $request): JsonResponse {
        if($request->has(['user_id', 'new_password'])) {
            $new_password = ['password' => $request['new_password'], 'kerkuar_ndryshim_fjalekalimi' => 0];
            Perdorues::where('perdorues_id', $request['user_id'])->update($new_password);

            return response()->json(['success' => 'success', 'message' => 'Fjalëkalimi u ndryshua me sukses'], 200);
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    function denyPasswordChange(Request $request) {
        if($request->has(['user_id'])) {
            $array = ['kerkuar_ndryshim_fjalekalimi' => 0];
            Perdorues::where('perdorues_id', $request['user_id'])->update($array);

            return response()->json(['success' => 'success', 'message' => 'Përdoruesi u hoq nga lista'], 200);
        } else {
            return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
        }
    }

    function storeImage(Request $request) {
        if ($request->hasFile('image')) {
            if($request->has('user_id')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName ();

                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                $extension = $request->file('image')->getClientOriginalExtension();

                $fileNameToStore = $filename. '_'. time().'.'.$extension;

                $path = $request->file('image')->storeAs('public/image', $fileNameToStore);

                $newAvatarPath = ['foto_profili'=> $path];
                Perdorues::where('perdorues_id', $request['user_id'])->update($newAvatarPath);

                return response()->json(['path' => $path], 200);
            } else {
                return response()->json(['success' => 'failed', 'message' => 'Give all the required parameters'], 400);
            }
        }
        else {
            $fileNameToStore = 'noimage.jpg';
            return response()->json(['ew' => 'no'], 400);
        }
    }

    function getAdminMetrics() {
        $history = HistorikPorosi::all();

        $addedSum = 0;
        $waitingSum = 0;
        $nisurSum = 0;
        $inventorySum = 0;
        $arrivedSum = 0;
        $returningSum = 0;
        $returnedSum = 0;
        $lostSum = 0;
        $deletedSum = 0;

        foreach ($history as $item) {
            switch ($item['status_id']) {
                case 1: {
                    $addedSum++;
                    break;
                }
                case 2: {
                    $waitingSum++;
                    break;
                }
                case 3: {
                    $nisurSum++;
                    break;
                }
                case 4: {
                    $inventorySum++;
                    break;
                }
                case 5: {
                    $arrivedSum++;
                    break;
                }
                case 6: {
                    $returningSum++;
                    break;
                }
                case 7: {
                    $returnedSum++;
                    break;
                }
                case 8: {
                    $lostSum++;
                    break;
                }
                case 9: {
                    $deletedSum++;
                    break;
                }
            }
        }

        $users = Perdorues::all();

        $adminSum = 0;
        $warehousemanSum = 0;
        $postmanSum = 0;
        $clientSum = 0;

        foreach ($users as $user) {
            switch ($user['rol_id']) {
                case 1: {
                    $adminSum++;
                    break;
                }
                case 2: {
                    $warehousemanSum++;
                    break;
                }
                case 3: {
                    $postmanSum++;
                    break;
                }
                case 4: {
                    $clientSum++;
                    break;
                }
            }
        }

        $packages = Porosi::all();

        $expressSum = 0;
        $normalSum = 0;
        $letterSum = 0;
        $packageSum = 0;

        foreach ($packages as $package) {
            switch ($package['tipi']) {
                case 'paketë': {
                    $packageSum++;
                    break;
                }
                case 'letër': {
                    $letterSum++;
                    break;
                }
            }

            switch ($package['tipi_dergeses']){
                case 'normal': {
                    $normalSum++;
                    break;
                }
                case 'ekspres': {
                    $expressSum++;
                    break;
                }
            }
        }

        $response = (object) [
            'added' => $addedSum,
            'pritje' => $waitingSum,
            'niusr' => $nisurSum,
            'inventory' => $inventorySum,
            'arrived' => $arrivedSum,
            'returning' => $returningSum,
            'returned' => $returnedSum,
            'lost' => $lostSum,
            'deleted' => $deletedSum,
            'admin' => $adminSum,
            'warehouse' => $warehousemanSum,
            'postman' => $postmanSum,
            'client' => $clientSum,
            'express' => $expressSum,
            'normal' => $normalSum,
            'letter' => $letterSum,
            'package' => $packageSum
        ];

        return response()->json($response, 200);
    }
}
