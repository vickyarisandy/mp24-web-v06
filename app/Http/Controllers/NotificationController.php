<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\PasienKeDokter;

use Notification;


use App\Models\LogDB;
// use Auth;
use Illuminate\Support\Facades\Auth;


use App\Notifications\OffersNotification;



class NotificationController extends Controller
{
    public function index()
    {
        return view('order');
    }

    public function sendOrderNotification() {


        // $user = User::first();
        $user = Auth()->user();

        $orderPasienkeDokter = [
            'name' => $user->nama,
            'body' => 'You received an order.',
            'thanks' => 'Thank you',
            'pesan' => 'Keluhan teks',
            'orderUrl' => url('/'),
            'user_id' => $user->id,
            'email' => $user->email,
        ];

        Notification::send($user, new PasienKeDokter($orderPasienkeDokter));
        // LogDB::record(Auth::user()->id, 'Akses notif pasein ke dokter', 'oleh Sistem');
        dd(Auth::user()->id);
        // dd($user);
        dd('Task completed!');
    }

    public function notifcaca()
    {
        # code...
        $datas['notif_count'] = count(auth()->user()->unreadNotifications);
        $datas['notifications'] = auth()->user()->unreadNotifications;
        // echo json_encode($datas);   
        dd($datas);
    }

 
    public function baca(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }

}
