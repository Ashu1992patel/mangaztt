<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestingController extends Controller
{
    public function index()
    {
        // dump('Sending Email');
        $details = [
        'title' => 'Mail from mangalmandap.com',
        'body' => 'This is for testing email using smtp'
        ];
       
        Mail::to('mangalmandap2016@gmail.com')->send(new \App\Mail\CustomMail($details));
       
        dd("Email is Sent.");
        
        
        // $to_name = ‘RECEIVER_NAME’;
        // $to_email = ‘RECEIVER_EMAIL_ADDRESS’;
        // $data = array(‘name’=>”Ogbonna Vitalis(sender_name)”, “body” => “A test mail”);
        // Mail::send(‘emails.mail’, $data, function($message) use ($to_name, $to_email) {
        // $message->to($to_email, $to_name)
        // ->subject(Laravel Test Mail’);
        // $message->from(‘SENDER_EMAIL_ADDRESS’,’Test Mail’);
        // });
        
        // https://control.textlocal.in/docs/api/code/post/
        // Authorisation details.
    	$username = "mangalmandap2016@gmail.com";
    	$hash = "6c2c3cb77f0ab0de02d4ca2ab1727ba6d6a718f639275ea2845c4d34b77f5b79";
    
    	// Config variables. Consult http://api.textlocal.in/docs for more info.
    	$test = "0";
    
    	// Data for text message. This is the text message data.
    	$sender = "TXTLCL"; // This is who the message appears to be from.
    	$numbers = "918770745851"; // A single number or a comma-seperated list of numbers
    	$message = urlencode("Test Message by Vikas");
    	// 612 chars or less
    	// A single number or a comma-seperated list of numbers
    // 	$message = urlencode($message);
    	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    // 	dump($data);
    	$ch = curl_init('http://api.textlocal.in/send/?');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$result = curl_exec($ch); // This is the result from the API
    	curl_close($ch);
    	
        return $result;
        
    	
    	// Message details
    // 	$numbers = urlencode('918770745851');
    // 	$sender = urlencode('TXTLCL');
    // 	$username = urlencode('mangalmandap2016@gmail.com');
    // 	$message = rawurlencode('This is your message');
    // 	$hash='6c2c3cb77f0ab0de02d4ca2ab1727ba6d6a718f639275ea2845c4d34b77f5b79'
     
    	// Prepare data for POST request
    // 	$data = 'username=' . $username . '&apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
     
    	// Send the GET request with cURL
    // 	$ch = curl_init('https://api.textlocal.in/send/?' . json_encode($data));
    // 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // 	$response = curl_exec($ch);
    // 	curl_close($ch);

        // Process your response here
        // echo $response;

        // return $response;
        
        // Textlocal.in
        // Username : mangalmandap2016@gmail.com
        // Password : Mangal2021@@@@@@
        
        dd('Vikas');
        
        // Sms::transactional()
        // ->to('9981435702')
        // ->from('SENDER')   //Your registered sender
        // ->send('My message');  //as per your approved template
    }
}