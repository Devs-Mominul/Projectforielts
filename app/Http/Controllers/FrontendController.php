<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Mail\FormSubmissionMail;
use App\Models\Cv;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class FrontendController extends Controller
{

    public function assessment_data_post(Request $request){
        // Validate and process your form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|min:8|max:23',
            'location' => 'required',
            'message' => 'required|min:5',
             'applicant_cv_name' => 'required|mimes:doc,docx,xlx,csv,pdf|max:8024',
            'spouse_cv_name' =>'required|mimes:doc,docx,xlx,csv,pdf|max:8024',
        ]);
        // applicant_cv_name
           $file=$request->applicant_cv_name;
           $extension=$file->extension();
            $file_name = time().'.'.$extension;
            $file->move(public_path('upload/applicant_cv_name/'), $file_name);
        // spouse_cv_name
        $spous_cv_file=$request->spouse_cv_name;
           $extension= $spous_cv_file->extension();
            $spous_cv_file_name = time().'.'.$extension;
            $spous_cv_file->move(public_path('upload/spouse_cv_name/'), $spous_cv_file);
        $cv=Cv::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'location'=>$request->location,
            'message'=>$request->message,
            'applicant_cv_name'=>$file_name,
            'spouse_cv_name'=>$spous_cv_file_name,



        ]);

        // Send email


        Mail::to('webdesignermominulhaque@gmail.com')->send(new WelcomeEmail($cv));

        // Redirect or handle response as needed

        return back()->with('assess_success', "Thank you for your Submitting query! We will contact you soon");
    }

    public function privacy_policy(){
        return view('frontend.privacypolicy');
    }
}
