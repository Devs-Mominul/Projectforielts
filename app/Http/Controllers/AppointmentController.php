<?php

namespace App\Http\Controllers;
use App\Models\Appointment;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|max:20|min:8',
            'when_study' => 'required',
            'study_destination' => 'required',
            'appointment_date' => 'required',
        ]);
        Appointment::insert([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'when_study' => $request->when_study,
            'study_destination' => $request->study_destination,
            'appointment_date' => $request->appointment_date,
        ]);

            $url = "https://www.bangladeshsms.com/smsapi";
            $data = [
            "api_key" => "C20023825c0e4e9eebcfc2.68612628",
            "type" => "unicode",
            "contacts" => "01301262566",
            "senderid" => "GATEWAY IT",
            "msg" => "আপনার অ্যাপয়েন্টমেন্ট বই সফলভাবে হয়েছে। ",
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        // return $response;
        //POST Method example
        // $url = "http://66.45.237.70/api.php";
        // $number = $validatedData['phone_number'];
        // $text = "Congratulations Your, Booked has been Successfully! We will Contact you soon Inshallah";
        // $data = array(
        //     'username' => "c2002382",
        //     'password' => "@GateWay112233#",
        //     'number' => "$number",
        //     'message' => "$text",
        //     // Initialize cURL
        //     $ch = curl_init(),
        //     curl_setopt($ch, CURLOPT_URL, $url),
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($validatedData)),
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true),
        //     $smsresult = curl_exec($ch),
        //     $p = explode("|", $smsresult),
        //     $sendstatus = $p[0],
        // );

        Appointment::create($validatedData);

        return back()->with('success', 'Your, Appointment booked successfully!');
    }
    public function get_admitted_university(){
        return view('backend.getadmitted');
    }
    public function discover_future_college(){
        return view('backend.discoverfuture');
    }
    public function enquery_form(){
        return view('backend.enqueryform');
    }

}
