<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HalamanController extends Controller
{
    //

    public function index()
    {
        $datas['DataUser'] = User::find(Auth::id()); //panggil model, dan trigger auth (request)
        // dd($datas); //lihat (respon) 
       
        $datas['notif_count'] = count(auth()->user()->unreadNotifications);
        $datas['notifications'] = auth()->user()->unreadNotifications;

        return view('halaman_depan.profil_user.formulir',compact('datas'));
    }

   
    public function updateUser(Request $request, $id)
    {
        if ($request->jeniskelamn == 'L') {
            $jk = "bpk";
        } else {
            $jk ="ibu";
        }
        

        $datas = User::where('id',$id)->update(  [
            'nopeserta' => $request->nopeserta,
            'nokartu' => $request->nokartu,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kodepos' => $request->kodepos,
            'email' => $request->email,
            'nohp'=> str_replace('-','',$request->nohp),
            'tanggallahir' => $request->tanggallahir,
            'inisial_nama' => $jk,
            'jml_turunan' => $request->jml_turunan,
     ] );

     return redirect('person');

    }

    public function beranda()
    {
        $datas['total_notif'] = count(auth()->user()->unreadNotifications);
        $datas['notifications'] = auth()->user()->unreadNotifications;
        return view('halaman_depan.beranda', compact('datas'));
    }

    public function keluhan()
    {

        $datas['total_notif'] = count(auth()->user()->unreadNotifications);
        return view('halaman_depan.buat_keluhan',compact('datas'));
    }

    public function riwayat()
    {
        $datas['total_notif'] = count(auth()->user()->unreadNotifications);
        return view('halaman_depan.lyn_riwayat.riwayat',compact('datas'));

    }


    public function visual()
    {
        # code...
        return view('halaman_depan.visual');
    }

    public function restitusi()
    {
        $datas['total_notif'] = count(auth()->user()->unreadNotifications);
        return view('halaman_depan.lyn_restitusi.restitusi',compact('datas'));
    }

    public function ApiChat()
    {
                # code...
        //         $api = new Gidkom\OpenFireRestApi\OpenFireRestApi;
        // # Set the required config parameters
        // $api->secret = "MySecret";
        // $api->host = "jabber.myserver.com";
        // $api->port = "9090";  # default 9090

        // # Optional parameters (showing default values)

        // $api->useSSL = false;
        // $api->plugin = "/plugins/restapi/v1";  # plugin 
        // # Check result if command is succesful
        // if($result['status']) {
        //     # Display result
        //     print_r($result['data']);
        // } else {
        //     # Something went wrong
        //     echo 'Error: ';
        //     echo $result['data'];
        // }


        $login = 'admin';
        $password = '12345678';
        $url = 'http://127.0.0.1:9090/plugins/restapi/v1/users';



        $ch = curl_init();
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));//xml
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));//xml

        curl_setopt($ch, CURLOPT_URL,$url);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");

        $result = curl_exec($ch);
        curl_close($ch);  
        // echo($result);
        // print_r ($result);

        // echo json_encode($result);
        // echo $result;


        $xml = simplexml_load_string($result);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        
        print_r($json);


    }

    public function profil()
    {
        # code...
        $datas['total_notif'] = count(auth()->user()->unreadNotifications);
        $datas['DataUser'] = User::find(Auth::id()); //panggil model, dan trigger auth (request)
        return view('halaman_depan.profil_user.profil',compact('datas'));
    }


}
