<?php

namespace App\Http\Controllers;

use App\ActivateProfile;
use App\Images;
use App\Mail;
use App\Profiles;
use App\UserMaster;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail as Email;
use Exception;

session_start();

class User_loginController extends Controller
{
    public function register(Request $request)
    {
        $contact = trim(request('contact'));
        $email = trim(request('email'));
        $useremail = Profiles::where(['email' => $email])->first();
        $usermob = Profiles::where(['contact' => $contact])->first();
//        echo 'hi'.$contact;
        if (isset($useremail)) {
            return 'Email Already';
//            return redirect('registration')->withInput()->withErrors('Email is Already Linked With Another Account!!!!');
        } elseif (isset($usermob)) {
            return 'Mobile Already';
//            return redirect('registration')->withInput()->withErrors('Mobile Number Already Linked With Another Account!!!!!!');
        } else {
            $reg = new Profiles();
            $reg->email = request('email');
            $reg->contact = request('contact');
            $reg->password = request('password');
            $reg->gender = request('gender');
            if (request('name') != null)
                $reg->name = request('name');
//            if (request('create_for') != null)
//                $reg->create_for = request('create_for');
            if (request('dob') != null)
                $reg->dob = Carbon::parse(request('dob'))->format('Y-m-d');
            if (request('height') != null)
                $reg->height = request('height');
            if (request('gotra') != null)
                $reg->gotra = request('gotra') == '' ? 'Not mentioned' : request('gotra');
            if (request('father_side_gotra') != null)
                $reg->father_side_gotra = request('father_side_gotra');
            if (request('mother_side_gotra') != null)
                $reg->mother_side_gotra = request('mother_side_gotra');
            if (request('status') != null)
                $reg->status = request('status');
            if (request('living') != null)
                $reg->living = request('living');
            if (request('religion') != null)
                $reg->religion = request('religion');
            if (request('caste') != null)
                $reg->caste = request('caste');
            if (request('subcaste') != null)
                $reg->subcaste = request('subcaste');
            if (request('manglik') != null)
                $reg->manglik = request('manglik');
            if (request('language') != null)
                $reg->language = request('language');
            if (request('highest_degree') != null)
                $reg->education = request('highest_degree');
            if (request('education_detail') != null)
                $reg->education_detail = request('education_detail');
            if (request('college_name') != null)
                $reg->college_name = request('college_name');
            if (request('occupation') != null)
                $reg->occupation = request('occupation');
            if (request('occupation_detail') != null)
                $reg->occupation_detail = request('occupation_detail');
            if (request('anual_income') != null)
                $reg->salary = request('anual_income');
            if (request('f_values') != null)
                $reg->f_values = request('f_values');
            if (request('f_type') != null)
                $reg->f_type = request('f_type');
            if (request('f_status') != null)
                $reg->f_status = request('f_status');
            if (request('f_based') != null)
                $reg->origin = request('f_based');
            if (request('family_income') != null)
                $reg->f_income = request('family_income');
            if (request('brothers') != null)
                $reg->brothers = request('brothers');
            if (request('sisters') != null)
                $reg->sisters = request('sisters');
            if (request('bro_married') != null)
                $reg->bro_married = request('bro_married');
//            if (request('married_sister') != null)
            $reg->sis_married = request('married_sister');
            if (request('father_occupation') != null)
                $reg->father_occupation = request('father_occupation');
            if (request('mother_occupation') != null)
                $reg->mother_occupation = request('mother_occupation');
            if (request('state') != null)
                $reg->state = request('state');
            if (request('city') != null)
                $reg->city = request('city');
            if (request('address') != null)
                $reg->address = request('address');
            if (request('about_me') != null)
                $reg->about_me = request('about_me');
            if (request('about_family') != null)
                $reg->about_fam = request('about_family');
            if (request('horoscope_match') != null)
                $reg->horoscope_match = request('horoscope_match');
            if (request('rashi') != null)
                $reg->rashi = request('rashi');
            if (request('star') != null)
                $reg->star = request('star');
            if (request('p_agefrom') != null)
                $reg->p_agefrom = request('p_agefrom');
            if (request('weight') != null)
                $reg->weight = request('weight');
            if (request('p_children') != 'Have Children' && request('p_children') != "Doesn't Matter" && request('p_children') != "")
                $reg->p_children = request('p_children');
            if (request('tob') != null)
                $reg->tob = date_format(date_create(request('tob')), "h:i A");
            if (request('bop') != null)
                $reg->bop = request('bop');
            if (request('body_type') != null)
                $reg->body_type = request('body_type');
            if (request('complexion') != null)
                $reg->complexion = request('complexion');

            if (request('smoking_habit') != null)
                $reg->smoking_habit = request('smoking_habit');
            if (request('drinking_habit') != null)
                $reg->drinking_habit = request('drinking_habit');
            if (request('p_smoking_habit') != null)
                $reg->p_smoking_habit = request('p_smoking_habit');
            if (request('p_drinking_habit') != null)
                $reg->p_drinking_habit = request('p_drinking_habit');
            if (request('job_location') != null)
                $reg->job_location = request('job_location');

            if (request('physical') != null)
                $reg->physical = request('physical');
            if (request('p_physical') != null)
                $reg->p_physical = request('p_physical');
            if (request('blood_group') != null)
                $reg->blood_group = request('blood_group');
            if (request('diet') != null)
                $reg->diet = request('diet');

            if (request('p_ageto') != null)
                $reg->p_ageto = request('p_ageto');
            if (request('p_status') != null)
                $reg->p_status = request('p_status');
            if (request('p_heightfrom') != null)
                $reg->p_heightfrom = request('p_heightfrom');
            if (request('p_heightto') != null)
                $reg->p_heightto = request('p_heightto');
            if (request('p_language') != null)
                $reg->p_language = request('p_language');
            if (request('p_city') != null)
                $reg->p_city = request('p_city');
            if (request('p_state') != null)
                $reg->p_state = request('p_state');
            if (request('p_salary') != null)
                $reg->p_salary = request('p_salary');
            if (request('p_religion') != null)
                $reg->p_religion = request('p_religion');
            
           if  (request('education_partner') != null)
               $reg->education_partner = request('education_partner');
            
           if  (request('occupation_partner') != null)
               $reg->occupation_partner = request('occupation_partner');
            
            
            if (request('dob') != null)
                $reg->age = Carbon::parse($reg->dob)->diff(Carbon::now())->format('%y');
            $otp = rand(100000, 999999);
            $reg->otp = $otp;
            $reg->date_created = Carbon::now('Asia/Kolkata');
            $reg->save();

            $activate = new ActivateProfile();
            $activate->id = $reg->id;
            $activate->active = 'no';
            $activate->save();

            $images = new Images();
            $images->id = $reg->id;
            $images->save();
            echo 'Registration Success';

            if (request('admin_reg') == 0) {
               // file_get_contents("http://api.bulksmsplans.com/api/SendSMS?api_id=API63344742229&api_password=delhi123&sms_type=T&encoding=T&sender_id=MMMTRI&phonenumber=$reg->contact&textmessage=Dear%20Mangal%20Mandap%20user%20Your%20verification%20code%20is%20$reg->otp");
                
                // Commented by VKC
                try{
                    $curl = curl_init();
	            $data = array();
	            $data['api_id'] = "mangalmandap2016@gmail.com";
	            $data['api_password'] = "4177c413ae0f193f5f0295c8636438471544597882";
	            $data['sms_type'] = "Transactional";
	            $data['sms_encoding'] = "text";
	            $data['sender'] = "MMMTRI";
	            $data['number'] = "$reg->contact";
	            $data['message'] = "Dear Mangal Mandap User,
Your verification code is $reg->otp
MMMTRI";
	            $data['template_id'] = "1407162367398093914";
	            
	            $data_string = json_encode($data);
	            
	            $ch = curl_init('https://www.bulksmsplans.com/api/send_sms');
	            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	                'Content-Type: application/json',
	                'Content-Length: ' . strlen($data_string))
	            );
	            $result = curl_exec($ch); 
                    
                 //   return 'reverify';
                }
                catch (Exception $e) {
                    echo 'Incorrect';
                }
                
                  
                  // Starts : Delete/Comment if any issue occurs
                try{
                    $details = [
                    'otp' => $reg->otp,
                    'subject' => "MANGALMANDAP.COM PROFILE VERIFICATION",
                    'title' => "Dear $reg->name",
                    'body' => "Thanks for getting started with mangal mandap! It's our pleasure to have you part of our family. You are almost ready to resume enjoying at mangal mandap. We need a little more information to complete your registration reverification, including confirmation of your email address to proceed further.",
                    'page' => "registration",
                    'instructions' => "We are always around and love hearing from you. Please get in touch if you want to ask something or even just to provide your valuable feedback"
                    ];
                   
                    Email::to($reg->email)->send(new \App\Mail\CustomMail($details));
                    
                 //   return 'reverify';
                }
                catch (Exception $e) {
                    echo 'Incorrect';
                }
                // Ends : Delete/Comment if any issue occurs
               
            } else {
                $reg->is_verified = 1;
                $reg->save();
                $_SESSION['user_master'] = $reg;
                $_SESSION['age1'] = null;
                $_SESSION['age2'] = null;
                $_SESSION['gender'] = null;
                $_SESSION['religion'] = null;

                $_SESSION['age1'] = $reg->gender == 'male' ? $reg->age - 6 : $reg->age;
                $_SESSION['age2'] = $reg->gender == 'male' ? $reg->age : $reg->age + 6;
                $_SESSION['gender'] = $reg->gender == 'male' ? 'female' : 'male';
                $_SESSION['religion'] = $reg->religion;

                return redirect('/profile_photo')->with('message', 'Registration has been successful...');
            }
            //return 'Registration Success';

            return redirect('/registration')->with('message', 'Registration has been successful, verification code has been sent to your email address please verify your account.');
        }
    }

    public
    function checkno()
    {
//        $this->sendmail(123, 'bijendrasahu888@gmail.com');
//        echo 'done';
        $contact = request('contact');
        $user_master = new Profiles();
        if (!$user_master->checkcontact($contact)) {
            echo 'already';
        } else {
            echo 'ok';
        }
    }

    public function checkemail()
    {
        $email = request('email');
        $user_master = new Profiles();
        if (!$user_master->checkemail($email)) {
            echo 'already';
        } else {
            echo 'ok';
        }
    }

    public function forgot_password()
    {
        $otp = rand(100000, 999999);
        $contact = request('contact');
        $user = Profiles::where(['contact' => $contact])->orWhere(['email'=> $contact])->first();
        if (isset($user)) {
            
            // $user_master = Profiles::find($user->id);
            $user_master = $user;
            $user_master->password = $otp;
            $user_master->save();

            // file_get_contents("http://api.bulksmsplans.com/api/SendSMS?api_id=API63344742229&api_password=delhi123&sms_type=T&encoding=T&sender_id=MMMTRI&phonenumber=$user_master->contact&textmessage=Dear%20user%20Password%20to%20login%20into%20MangalMandap%20is%20$otp");
            
            $curl = curl_init();
            $data = array();
            $data['api_id'] = "mangalmandap2016@gmail.com";
            $data['api_password'] = "4177c413ae0f193f5f0295c8636438471544597882";
            $data['sms_type'] = "Transactional";
            $data['sms_encoding'] = "text";
            $data['sender'] = "MMMTRI";
            $data['number'] = "$user_master->contact";
            $data['message'] = "You recently requested to reset your password for your mangal mandap account. Your OTP has been generated for login is $otp.
            MMMTRI";
            $data['template_id'] = "1407162374592201928";
            
            $data_string = json_encode($data);
            
            $ch = curl_init('https://www.bulksmsplans.com/api/send_sms');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
            );
            $result = curl_exec($ch); 
             
             
            //$this->sendmail($user_master->email);
            
            // Starts: Added By VC on 17012021
            try{
                $details = [
                'otp' => $otp,
                'subject' => "Your Mangal Mandap One Time Password (OTP)",
                'title' => "Dear $user_master->name",
                'body' => "You recently requested to reset your password for your mangal mandap account. A one time password has been generated for you, please use '$otp' for the login again.",
                'page' => "forget-password",
                'instructions' => "If you did not request an OTP, You can safely ignore this email. Only a person with access to your email can reset your account password."
                ];
                
                Email::to($user_master->email)->send(new \App\Mail\CustomMail($details));
            }
            catch (Exception $e) {
                echo $e;
                // echo 'Incorrect';
            }
            // Ends: Added By VC on 17012021
            
            //$_SESSION['user_master'] = $user_master;
            echo 'ok';
        } else {
            echo 'Incorrect';
        }
    }

    public function resend_code()
    {
        $otp = rand(100000, 999999);
        $contact = request('contact');
        $user = Profiles::where(['contact' => $contact])->orWhere(['email'=> $contact])->first();
        if (isset($user)) {
            $user_master = Profiles::find($user->id);
            $user_master->otp = $otp;
            $user_master->save();
            
            $curl = curl_init();
            $data = array();
            $data['api_id'] = "mangalmandap2016@gmail.com";
            $data['api_password'] = "4177c413ae0f193f5f0295c8636438471544597882";
            $data['sms_type'] = "Transactional";
            $data['sms_encoding'] = "text";
            $data['sender'] = "MMMTRI";
            $data['number'] = "$user_master->contact";
            $data['message'] = "You have requested to resend the code for Registration/Forgot Password/Account Verification. Your OTP is for login is $otp.
            MMMTRI";
            $data['template_id'] = "1407162419104898582";
            
            $data_string = json_encode($data);
            
            try{
                    $ch = curl_init('https://www.bulksmsplans.com/api/send_sms');
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($data_string))
                    );
                    $result = curl_exec($ch); 
                    echo 'ok';
                }
                catch (Exception $e) {
                    echo 'Incorrect';
                }
            
            // file_get_contents("http://api.bulksmsplans.com/api/SendSMS?api_id=API63344742229&api_password=delhi123&sms_type=T&encoding=T&sender_id=MMMTRI&phonenumber=$user_master->contact&textmessage=Dear%20user%20verification%20code%20to%20verify%20MangalMandap%20account%20is%20$otp");
            // comment by VKC
            // file_get_contents("https://www.bulksmsplans.com/api/send_sms?api_id=mangalmandap2016%40gmail.com&api_password=4177c413ae0f193f5f0295c8636438471544597882&sms_type=Transactional&sms_encoding=text&sender=MMMTRI&number=$user_master->contact&message=Dear%20user%20verification%20code%20to%20verify%20MangalMandap%20account%20is%20$otp");
//            $_SESSION['user_master'] = $user_master;
            // echo 'ok';
        } else {
            echo 'Incorrect';
        }
    }

    public function sendmail($email, $name, $gender)
    {
        /***********Mail************/
        $allmails = [$email];

        foreach ($allmails as $mail) {
            $emails[] = $mail;
        }
        if (count($emails) > 0) {
            $mail = new Mail();
            $mail->to = implode(",", $emails);
            $mail->subject = 'Welcome To Mangal Mandap';
            $siteurl = 'https://www.mangalmandap.com//';
            $username = ucfirst($name);
            $salutation = $gender == 'male' ? "Mr." : "Ms.";

            $message = '<table width="650" cellpadding="0" cellspacing="0" align="center" style="background-color:#ececec;padding:40px;font-family:sans-serif;overflow:scroll"><tbody><tr><td><table cellpadding="0" cellspacing="0" align="center" width="100%"><tbody><tr><td><div style="line-height:50px;text-align:center;background-color:#fff;border-radius:5px;padding:20px"><a href="' . $siteurl . '" target="_blank" ><img src="' . $siteurl . 'images/mangal_logo.jpg" style="width:100%"></a></div></td></tr><tr><td><div><img src="' . $siteurl . 'images/acknowledgement.jpg" style="height:auto;width:100%;" tabindex="0"><div dir="ltr" style="opacity: 0.01; left: 775px; top: 343px;"><div><div class="aSK J-J5-Ji aYr"></div></div></div></div></td></tr><tr><td style="background-color:#fff;padding:20px;border-radius:0px 0px 5px 5px;font-size:14px"><div style="width:100%"><h1 style="color:#007cc2;text-align:center">Thank you ' . $salutation . ' ' . $username . '</h1><p style="font-size:14px;text-align:center;color:#333;padding:10px 20px 10px 20px">Thank you for your registration in www.mangalmandap.com is Mangal Mandap is a leading Indian matrimonial matchmaking service provider. Our team is committed to provide 360 degree solutions to all prospective Indian brides and grooms for marriage.</p></div></td></tr></tbody></table></td></tr><tr><td style="padding:20px;font-size:12px;color:#797979;text-align:center;line-height:20px;border-radius:5px 5px 0px 0px">DISCLAIMER - The information contained in this electronic message (including any accompanying documents) is solely intended for the information of the 
            ee(s) not be reproduced or redistributed or passed on directly or indirectly in any form to any other person.</td></tr></tbody></table>';

            $mail->body = $message;
            if ($mail->send_mail()) {
//                return redirect('/')->with('message', 'Registration has been successful1');
                //return redirect('mail')->withErrors('Email sent...');
            } else {
//                return redirect('/')->with('message', 'Registration has been successful0');
                //return redirect('mail')->withInput()->withErrors('Something went wrong. Please contact admin');
            }
//            echo $message;
        }
        /***********Mail************/
    }


    public function testup(){
        $pr = DB::select("SELECT id, gender, is_show_pic, is_show_img, is_show_dob, is_show_contact from profiles where gender = 'male' ORDER by id desc");
        foreach ($pr as $p){
            $pro = Profiles::find($p->id);
            $pro->is_show_pic = 1;
            $pro->is_show_dob = 1;
            $pro->is_show_img = 1;
            $pro->is_show_contact = 1;
            $pro->save();
        }
        echo "Done";
    }

    public function mail_test()
    {
        /***********Mail************/
        $allmails = [request('email')];

        foreach ($allmails as $mail) {
            $emails[] = $mail;
        }
        if (count($emails) > 0) {
            $mail = new \App\Mail();
            $mail->to = implode(",", $emails);
            $mail->subject = 'Welcome To Mangal Mandap';
            $siteurl = 'http://www.mangalmandap.com/';
            $username = request('name');
            $salutation = request('gender') == 'male' ? "Mr." : "Ms.";

            $message = '<table width="650" cellpadding="0" cellspacing="0" align="center" style="background-color:#ececec;padding:40px;font-family:sans-serif;overflow:scroll"><tbody><tr><td><table cellpadding="0" cellspacing="0" align="center" width="100%"><tbody><tr><td><div style="line-height:50px;text-align:center;background-color:#fff;border-radius:5px;padding:20px"><a href="' . $siteurl . '" target="_blank" ><img src="' . $siteurl . 'images/mangal_logo.jpg" style="width:100%"></a></div></td></tr><tr><td><div><img src="' . $siteurl . 'images/acknowledgement.jpg" style="height:auto;width:100%;" tabindex="0"><div dir="ltr" style="opacity: 0.01; left: 775px; top: 343px;"><div><div class="aSK J-J5-Ji aYr"></div></div></div></div></td></tr><tr><td style="background-color:#fff;padding:20px;border-radius:0px 0px 5px 5px;font-size:14px"><div style="width:100%"><h1 style="color:#007cc2;text-align:center">Thank you ' . $salutation . ' ' . $username . '</h1><p style="font-size:14px;text-align:center;color:#333;padding:10px 20px 10px 20px">Thank you for your registration in www.mangalmandap.com is Mangal Mandap is a leading Indian matrimonial matchmaking service provider. Our team is committed to provide 360 degree solutions to all prospective Indian brides and grooms for marriage.</p></div></td></tr></tbody></table></td></tr><tr><td style="padding:20px;font-size:12px;color:#797979;text-align:center;line-height:20px;border-radius:5px 5px 0px 0px">DISCLAIMER - The information contained in this electronic message (including any accompanying documents) is solely intended for the information of the addressee(s) not be reproduced or redistributed or passed on directly or indirectly in any form to any other person.</td></tr></tbody></table>';

            $mail->body = $message;
            if ($mail->send_mail()) {
                // return "Done";
//                return redirect('/')->with('message', 'Registration has been successful1');
                //return redirect('mail')->withErrors('Email sent...');
            } else {
                return "Mail Server Not Responding";
//                return redirect('/')->with('message', 'Registration has been successful0');
                //return redirect('mail')->withInput()->withErrors('Something went wrong. Please contact admin');
            }
//            echo $message;
        }
        /***********Mail************/
    }


    public function login()
    {
        $mobile = request('login_mobile');
        $password = request('login_password');
//        $user = DB::selectOne("SELECT * FROM `profiles` WHERE email = '$mobile' and password = '$password'");
        $user = Profiles::where(['email' => $mobile, 'password' => $password])->first();
        $otp = rand(100000, 999999);
        if (isset($user)) {
            if ($user->is_active == 1) {
                if ($user->is_verified == 1) {
                    $_SESSION['user_master'] = $user;
                    $_SESSION['age1'] = null;
                    $_SESSION['age2'] = null;
                    $_SESSION['gender'] = null;
                    $_SESSION['religion'] = null;

                    $_SESSION['age1'] = $user->gender == 'male' ? $user->age - 6 : $user->age;
                    $_SESSION['age2'] = $user->gender == 'male' ? $user->age : $user->age + 6;
                    $_SESSION['gender'] = $user->gender == 'male' ? 'female' : 'male';
                    $_SESSION['religion'] = $user->religion;
                    return 'Success';
                } else {
                    $user_master = Profiles::find($user->id);
                    $user_master->otp = $otp;
                    $user_master->save();
                    // file_get_contents("http://api.bulksmsplans.com/api/SendSMS?api_id=API63344742229&api_password=delhi123&sms_type=T&encoding=T&sender_id=MMMTRI&phonenumber=$user_master->contact&textmessage=Dear%20Mangal%20Mandap%20user%20Your%20verification%20code%20is%20$user_master->otp");
                    //   comment by VKC
                      file_get_contents("https://www.bulksmsplans.com/api/send_sms?api_id=mangalmandap2016%40gmail.com&api_password=4177c413ae0f193f5f0295c8636438471544597882&sms_type=Transactional&sms_encoding=text&sender=MMMTRI&number=$user_master->contact&message=Dear%20Mangal%20Mandap%20user%20Your%20verification%20code%20is%20$user_master->otp");
                    return 'NotVerified';
                }
            } else {
                return 'Inactivate';
            }
        } else {
            return "Invalid";
        }
    }

    public function verify_otp()
    {
        $otp = request('txtotp');
        $user = Profiles::where(['otp' => $otp])->first();
        if (isset($user)) {
            $user_master = Profiles::find($user->id);
            if (isset($_SESSION['session_contact']) && isset($_SESSION['otp'])) {
                if ($_SESSION['otp'] == $otp) {
                    $user_master->contact = $_SESSION['session_contact'];
                    $user_master->save();
                    $_SESSION['session_contact'] = null;
                    $_SESSION['otp'] = null;
                    return 'contact_verified';
                } else {
                    $user_master->is_verified = 1;
                    $user_master->save();
                    $_SESSION['user_master'] = $user_master;
                    $_SESSION['age1'] = null;
                    $_SESSION['age2'] = null;
                    $_SESSION['gender'] = null;
                    $_SESSION['religion'] = null;

                    $_SESSION['age1'] = $user->gender == 'male' ? $user->age - 4 : $user->age;
                    $_SESSION['age2'] = $user->gender == 'male' ? $user->age : $user->age + 4;
                    $_SESSION['gender'] = $user->gender == 'male' ? 'female' : 'male';
                    $_SESSION['religion'] = $user->religion;
                    echo 'ok';
                }
            } else {
                $user_master->is_verified = 1;
                $user_master->save();
                $_SESSION['user_master'] = $user_master;
                $_SESSION['age1'] = null;
                $_SESSION['age2'] = null;
                $_SESSION['gender'] = null;
                $_SESSION['religion'] = null;

                $_SESSION['age1'] = $user->gender == 'male' ? $user->age - 4 : $user->age;
                $_SESSION['age2'] = $user->gender == 'male' ? $user->age : $user->age + 4;
                $_SESSION['gender'] = $user->gender == 'male' ? 'female' : 'male';
                $_SESSION['religion'] = $user->religion;
                echo 'ok';
            }

        } else {
            echo 'Incorrect';
        }
    }


    /*********************Profile update**************/
    public function profile_update()
    {
        if (isset($_SESSION['user_master'])) {
            $reg = Profiles::find($_SESSION['user_master']->id);
            $reg->email = request('email');
//            if ($reg->contact != request('contact'))
//                $reg->contact = request('contact');
//            $reg->password = request('password');
//            $reg->gender = request('gender');
//            if (request('gender') != null)
//                $reg->is_once_gender = 1;

            if (request('name') != null)
                $reg->name = request('name');
//            if (request('create_for') != null)
//                $reg->create_for = request('create_for');
            if (request('dob') != null)
                $reg->dob = Carbon::parse(request('dob'))->format('Y-m-d');
            if (request('height') != null)
                $reg->height = request('height');
            if (request('gotra') != null)
                $reg->gotra = request('gotra') == '' ? 'Not mentioned' : request('gotra');
            if (request('father_side_gotra') != null)
                $reg->father_side_gotra = request('father_side_gotra');
            if (request('mother_side_gotra') != null)
                $reg->mother_side_gotra = request('mother_side_gotra');
            if (request('Marital_Status') != null)
                $reg->status = request('Marital_Status');
            if (request('living') != null)
                $reg->living = request('living');
            if (request('mob') != null)
                $reg->mob2 = request('mob'); //change to mob2 alternate
            if (request('mob2') != null)
                $reg->landline = request('mob2'); //change to landline
            if (request('religion') != null)
                $reg->religion = request('religion');
                $reg->is_once_religion = 1;
            if (request('state') != null)
                $reg->state = request('state');
             if (request('city') != null)
                $reg->city = request('city');
            if (request('address') != null)
                $reg->address = request('address'); 
            if (request('caste') != null)
                $reg->caste = request('caste');
            if (request('subcaste') != null)
                $reg->subcaste = request('subcaste');
            if (request('manglik') != null)
                $reg->manglik = request('manglik');
            if (request('language') != null)
                $reg->language = request('language');
            if (request('highest_degree') != null)
                $reg->education = request('highest_degree');
            if (request('education_detail') != null)
                $reg->education_detail = request('education_detail');
            if (request('college_name') != null)
                $reg->college_name = request('college_name');
            if (request('occupation') != null)
                $reg->occupation = request('occupation');
            if (request('occupation_detail') != null)
                $reg->occupation_detail = request('occupation_detail');
            if (request('anual_income') != null)
                $reg->salary = request('anual_income');
            if (request('f_values') != null)
                $reg->f_values = request('f_values');
            if (request('f_type') != null)
                $reg->f_type = request('f_type');
            if (request('f_status') != null)
                $reg->f_status = request('f_status');
            if (request('f_based') != null)
                $reg->origin = request('f_based');
            if (request('family_income') != null)
                $reg->f_income = request('family_income');
            if (request('brothers') != null)
                $reg->brothers = request('brothers');
            if (request('sisters') != null)
                $reg->sisters = request('sisters');
            if (request('bro_married') != null)
                $reg->bro_married = request('bro_married');
            if (request('sis_married') != null)
                $reg->sis_married = request('sis_married');
            if (request('father_occupation') != null)
                $reg->father_occupation = request('father_occupation');
            if (request('mother_occupation') != null)
                $reg->mother_occupation = request('mother_occupation');
            if (request('about_me') != null)
                $reg->about_me = request('about_me');
            if (request('about_family') != null)
                $reg->about_fam = request('about_family');
            if (request('horoscope_match') != null)
                $reg->horoscope_match = request('horoscope_match');
            if (request('rashi') != null)
                $reg->rashi = request('rashi');
            if (request('star') != null)
                $reg->star = request('star');
            if (request('bop') != null)
                $reg->bop = request('bop');
            if (request('p_agefrom') != null)
                $reg->p_agefrom = request('p_agefrom');
            if (request('weight') != null)
                $reg->weight = request('weight');
            if (request('p_children') != 'Have Children' && request('p_children') != "Doesn't Matter" && request('p_children') != "")
                $reg->p_children = request('p_children');
            if (request('tob') != null)
                $reg->tob = $reg->tob = date_format(date_create(request('tob')), "h:i A");
            if (request('bop') != null)
                $reg->bop = request('bop');
            if (request('body_type') != null)
                $reg->body_type = request('body_type');
            if (request('complexion') != null)
                $reg->complexion = request('complexion');
            if (request('smoking_habit') != null)
                $reg->smoking_habit = request('smoking_habit');
            if (request('drinking_habit') != null)
                $reg->drinking_habit = request('drinking_habit');
            if (request('p_smoking_habit') != null)
                $reg->p_smoking_habit = request('p_smoking_habit');
            if (request('p_drinking_habit') != null)
                $reg->p_drinking_habit = request('p_drinking_habit');
            if (request('job_location') != null)
                $reg->job_location = request('job_location');
            if (request('p_ageto') != null)
                $reg->p_ageto = request('p_ageto');
            if (request('p_status') != null)
                $reg->p_status = request('p_status');
            if (request('p_heightfrom') != null)
                $reg->p_heightfrom = request('p_heightfrom');
            if (request('p_heightto') != null)
                $reg->p_heightto = request('p_heightto');
            if (request('p_language') != null)
                $reg->p_language = request('p_language');
            if (request('p_city') != null)
                $reg->p_city = request('p_city');
            if (request('p_state') != null)
                $reg->p_state = request('p_state');
            
            if (request('physical') != null)
                $reg->physical = request('physical');
            if (request('p_physical') != null)
                $reg->p_physical = request('p_physical');
            if (request('blood_group') != null)
                $reg->blood_group = request('blood_group');
            if (request('diet') != null)
                $reg->diet = request('diet');

            if (request('p_salary') != null)
                $reg->p_salary = request('p_salary');
            if (request('p_religion') != null)
                $reg->p_religion = request('p_religion');
           
             if  (request('education_partner') != null)
               $reg->education_partner = request('education_partner');
            
           if  (request('occupation_partner') != null)
               $reg->occupation_partner = request('occupation_partner');
            
            
            
            if (request('dob') != null)
                $reg->age = Carbon::parse($reg->dob)->diff(Carbon::now())->format('%y');
            if (request('dob') != null)
                $reg->is_once_dob = 1;
            $otp = rand(100000, 999999);
            if ($reg->contact != request('contact')) {
                $_SESSION['session_contact'] = request('contact');
                $_SESSION['otp'] = $otp;
                $cnt = $_SESSION['session_contact'];
                $reg->otp = $otp;
                $reg->save();
                // file_get_contents("http://api.bulksmsplans.com/api/SendSMS?api_id=API63344742229&api_password=delhi123&sms_type=T&encoding=T&sender_id=MMMTRI&phonenumber=$cnt&textmessage=Dear%20Mangal%20Mandap%20user%20Your%20verification%20code%20is%20$otp");
                
                // Commented by VKC
                file_get_contents("https://www.bulksmsplans.com/api/send_sms?api_id=mangalmandap2016%40gmail.com&api_password=4177c413ae0f193f5f0295c8636438471544597882&sms_type=Transactional&sms_encoding=text&sender=MMMTRI&number=$cnt&message=Dear%20Mangal%20Mandap%20user%20Your%20verification%20code%20is%20$otp");
                
                // Starts : Delete/Comment if any issue occurs
                try{
                    $details = [
                    'otp' => $reg->otp,
                    'subject' => "MANGALMANDAP.COM PROFILE VERIFICATION",
                    'title' => "Dear $reg->name",
                    'body' => "Thanks for getting started with mangal mandap! It's our pleasure to have you part of our family. You are almost ready to resume enjoying at mangal mandap. We need a little more information to complete your registration reverification, including confirmation of your email address to proceed further.",
                    'page' => "registration",
                    'instructions' => "We are always around and love hearing from you. Please get in touch if you want to ask something or even just to provide your valuable feedback"
                    ];
                   
                    Email::to($reg->email)->send(new \App\Mail\CustomMail($details));
                    
                    return 'reverify';
                }
                catch (Exception $e) {
                    echo 'Incorrect';
                }
                // Ends : Delete/Comment if any issue occurs
                
                
                //http://api.bulksmsplans.com/api/SendSMS?api_id=API63344742229&api_password=delhi123&sms_type=T&encoding=T&sender_id=MMMTRI&phonenumber=9584866999&textmessage=test
                
                
                // return 'reverify';
            }
            $reg->save();

//            $activate = new ActivateProfile();
//            $activate->id = $reg->id;
//            $activate->active = 'no';
//            $activate->save();
//
//            $images = new Images();
//            $images->id = $reg->id;
//            $images->save();
//            return redirect('edit_profile')->with('message', 'Profile has been updated');
        } else {
            return redirect('/')->withErrors('Please login first');
        }

    }

    public function profile_update_admin()
    {
//        echo request('user_by_admin');
//        if (isset($_SESSION['user_master'])) {
//            $reg = Profiles::find(request('user_by_admin'));
        $reg = Profiles::find(request('user_by_admin'));
        $reg->email = request('email');
        $reg->contact = request('contact');
//            $reg->password = request('password');
//            $reg->gender = request('gender');
        if (request('name') != null)
            $reg->name = request('name');
//        if (request('create_for') != null)
//            $reg->create_for = request('create_for');
        if (request('dob') != null)
            $reg->dob = Carbon::parse(request('dob'))->format('Y-m-d');
        if (request('height') != null)
            $reg->height = request('height');
        if (request('gotra') != null)
            $reg->gotra = request('gotra') == '' ? 'Not mentioned' : request('gotra');
        if (request('father_side_gotra') != null)
            $reg->father_side_gotra = request('father_side_gotra');
        if (request('mother_side_gotra') != null)
            $reg->mother_side_gotra = request('mother_side_gotra');
        if (request('Marital_Status') != null)
            $reg->status = request('Marital_Status');
        if (request('living') != null)
            $reg->living = request('living');
        if (request('mob') != null)
            $reg->mob2 = request('mob'); //change to mob2 alternate
        if (request('mob2') != null)
            $reg->landline = request('mob2'); //change to landline
        if (request('religion') != null)
            $reg->religion = request('religion');
        if (request('caste') != null)
            $reg->caste = request('caste');
        if (request('subcaste') != null)
            $reg->subcaste = request('subcaste');
        if (request('manglik') != null)
            $reg->manglik = request('manglik');
        if (request('language') != null)
            $reg->language = request('language');
        if (request('highest_degree') != null)
            $reg->education = request('highest_degree');
        if (request('education_detail') != null)
            $reg->education_detail = request('education_detail');
        if (request('college_name') != null)
            $reg->college_name = request('college_name');
        if (request('occupation') != null)
            $reg->occupation = request('occupation');
        if (request('occupation_detail') != null)
            $reg->occupation_detail = request('occupation_detail');
        if (request('anual_income') != null)
            $reg->salary = request('anual_income');
        if (request('state') != null)
            $reg->state = request('state');
         if (request('city') != null)
             $reg->city = request('city');
         if (request('address') != null)
                $reg->address = request('address');
        if (request('f_values') != null)
            $reg->f_values = request('f_values');
        if (request('f_type') != null)
            $reg->f_type = request('f_type');
        if (request('f_status') != null)
            $reg->f_status = request('f_status');
        if (request('f_based') != null)
            $reg->origin = request('f_based');
        if (request('family_income') != null)
            $reg->f_income = request('family_income');
        if (request('brothers') != null)
            $reg->brothers = request('brothers');
        if (request('sisters') != null)
            $reg->sisters = request('sisters');
        if (request('bro_married') != null)
            $reg->bro_married = request('bro_married');
        if (request('sis_married') != null)
            $reg->sis_married = request('sis_married');
        if (request('father_occupation') != null)
            $reg->father_occupation = request('father_occupation');
        if (request('mother_occupation') != null)
            $reg->mother_occupation = request('mother_occupation');
        if (request('about_me') != null)
            $reg->about_me = request('about_me');
        if (request('about_family') != null)
            $reg->about_fam = request('about_family');
        if (request('horoscope_match') != null)
            $reg->horoscope_match = request('horoscope_match');
        if (request('rashi') != null)
            $reg->rashi = request('rashi');
        if (request('star') != null)
            $reg->star = request('star');
        if (request('bop') != null)
            $reg->bop = request('bop');
        if (request('p_agefrom') != null)
            $reg->p_agefrom = request('p_agefrom');
        if (request('weight') != null)
            $reg->weight = request('weight');
        if (request('p_children') != 'Have Children' && request('p_children') != "Doesn't Matter" && request('p_children') != "")
            $reg->p_children = request('p_children');
        if (request('body_type') != null)
            $reg->body_type = request('body_type');
        if (request('tob') != null)
            $reg->tob = request('tob');
        if (request('bop') != null)
            $reg->bop = request('bop');
        if (request('bop') != null)
            $reg->bop = request('bop');
        if (request('complexion') != null)
            $reg->complexion = request('complexion');
        if (request('smoking_habit') != null)
            $reg->smoking_habit = request('smoking_habit');
        if (request('drinking_habit') != null)
            $reg->drinking_habit = request('drinking_habit');
        if (request('p_smoking_habit') != null)
            $reg->p_smoking_habit = request('p_smoking_habit');
        if (request('p_drinking_habit') != null)
            $reg->p_drinking_habit = request('p_drinking_habit');
        if (request('job_location') != null)
            $reg->job_location = request('job_location');
        if (request('p_ageto') != null)
            $reg->p_ageto = request('p_ageto');
        if (request('physical') != null)
            $reg->physical = request('physical');
        if (request('p_status') != null)
            $reg->p_status = request('p_status');
        if (request('p_heightfrom') != null)
            $reg->p_heightfrom = request('p_heightfrom');
        if (request('p_heightto') != null)
            $reg->p_heightto = request('p_heightto');
        if (request('p_language') != null)
            $reg->p_language = request('p_language');
        if (request('p_city') != null)
            $reg->p_city = request('p_city');
        if (request('p_state') != null)
            $reg->p_state = request('p_state');
        if (request('p_salary') != null)
            $reg->p_salary = request('p_salary');
        
        if (request('p_religion') != null)
            $reg->p_religion = request('p_religion');

        if (request('education_partner') != null)
            $reg->education_partner = request('education_partner');
            
        if (request('occupation_partner') != null)
            $reg->occupation_partner = request('occupation_partner');


        

        if (request('dob') != null)
            $reg->age = Carbon::parse($reg->dob)->diff(Carbon::now())->format('%y');
//        $otp = rand(100000, 999999);
//        $reg->otp = $otp;
//        $reg->is_verified = 1;
        $reg->save();

//            $activate = new ActivateProfile();
//            $activate->id = $reg->id;
//            $activate->active = 'no';
//            $activate->save();
//
//            $images = new Images();
//            $images->id = $reg->id;
//            $images->save();
//            return redirect('edit_profile')->with('message', 'Profile has been updated');
//        } else {
//            return redirect('/')->withErrors('Please login first');
//        }

    }


    public function getAadhar()
    {
        $user = Profiles::find($_SESSION['user_master']->id);
        return view('web.profile.upload_aadhar')->with(['user' => $user]);
    }

    public function admingetAadhar()
    {
        $user = Profiles::find(request('user_id'));
        return view('web.profile.upload_aadhar')->with(['user' => $user]);
    }

    public function aadhar_upload(Request $request)
    {
        if (isset($_SESSION['user_master'])) {
            $user = Profiles::find($_SESSION['user_master']->id);
            $destination_path = 'aadhar/';
            $file = $request->file('aadhar');
            if ($request->file('aadhar') != null) {
                $filename = rand(100000, 999999) . $user->id . '.jpg';
                $file->move($destination_path, $filename);
                $user->aadhar = $destination_path . $filename;
                $user->save();
            }
            $file = $request->file('aadhar_back');
            if ($request->file('aadhar_back') != null) {
                $filename = rand(100000, 999999) . $user->id . '.jpg';
                $file->move($destination_path, $filename);
                $user->aadhar_back = $destination_path . $filename;
                $user->save();
            }
            return redirect('candidate_list')->with('message', 'Aadhar has been updated');
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }

    public function aadharUpdate($id)
    {
        if (isset($_SESSION['user_master'])) {
            $user = Profiles::find($id);
            $user->aadhar = null;
            $user->aadhar_back = null;
            $user->save();
            return redirect('candidate_list')->with('message', 'Aadhar has been deleted');
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }


    public function getUpload()
    {
        return view('web.profile.upload_pic');
    }


    public function upload_pic(Request $request)
    {
        if (isset($_SESSION['user_master'])) {
            $user = Profiles::find($_SESSION['user_master']->id);
            $images = Images::find($user->id);
            $destination_path = 'uploads/';
            $file = $request->file('pp1');
            if ($request->file('pp1') != null) {
                $filename = rand(100000, 999999) . '_' . $user->id . '_1.jpg';
                $file->move($destination_path, $filename);
                $images->pic1 = $destination_path . $filename;
                $images->save();
            }
            $file = $request->file('pp2');
            if ($request->file('pp2') != null) {
                $filename = rand(100000, 999999) . '_' . $user->id . '_2.jpg';
                $file->move($destination_path, $filename);
                $images->pic2 = $destination_path . $filename;
                $images->save();
            }
            $file = $request->file('pp3');
            if ($request->file('pp3') != null) {
                $filename = rand(100000, 999999) . '_' . $user->id . '_3.jpg';
                $file->move($destination_path, $filename);
                $images->pic3 = $destination_path . $filename;
                $images->save();
            }
            return redirect('profile_photo')->with('message', 'Profile Pictures has been updated');
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }


    public function getUploadedUpdate($id)
    {
        if (isset($_SESSION['user_master'])) {
            $user = Profiles::find($_SESSION['user_master']->id);
            $images = Images::find($user->id);
            if ($id == 1)
                $images->pic1 = $user->gender == 'male' ? 'images/male.png' : 'images/female.png';
            else if ($id == 2)
                $images->pic2 = null;
            else
                $images->pic3 = null;
            $images->save();
            return redirect('profile_photo')->with('message', 'Profile Pictures has been deleted');
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }

    /*********************Profile update**************/


    public function userlist()
    {
        $user_data = Profiles::paginate(10);
        return view('adminview.userlist', ['user_data' => $user_data]);
    }

    public function deactivate_user()
    {
        $data = array(
            'is_active' => '0'
        );
        Profiles::where('id', request('IDD'))
            ->update($data);
        return 1;
    }


    public function activate_user()
    {
        $data = array(
            'is_active' => '1'
        );
        Profiles::where('id', request('IDD'))
            ->update($data);
        return 1;
    }

    public function usershow($id)
    {
        $user_data = Profiles::find($id);
        return view('adminview.show_user_full', ['user_data' => $user_data]);
    }

//ALTER TABLE `images` CHANGE `pic1` `pic1` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
//ALTER TABLE `profiles` ADD `college_name` VARCHAR(100) NULL DEFAULT NULL AFTER `education_partner`;
}
//ALTER TABLE `profiles` ADD `f_based_out` VARCHAR(50) NULL DEFAULT NULL AFTER `otp`;
//ALTER TABLE `profiles` ADD `smoking_habit` VARCHAR(10) NULL DEFAULT '0' AFTER `otp`, ADD `drinking_habit` VARCHAR(10) NOT NULL DEFAULT '0' AFTER `smoking_habit`, ADD `p_smoking_habit` VARCHAR(10) NOT NULL DEFAULT '0' AFTER `drinking_habit`, ADD `p_drinking_habit` VARCHAR(10) NOT NULL DEFAULT '0' AFTER `p_smoking_habit`;


//ALTER TABLE `profiles` CHANGE `smoking_habit` `smoking_habit` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'Not mentioned';
//ALTER TABLE `profiles` CHANGE `p_smoking_habit` `p_smoking_habit` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'Not mentioned'
//ALTER TABLE `profiles` CHANGE `p_drinking_habit` `p_drinking_habit` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'Not mentioned'
//ALTER TABLE `profiles` CHANGE `drinking_habit` `drinking_habit` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'Not mentioned'