<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
    	$details = [
    		'subject' => 'Test Mail'
    	];
    	
        $job = (new \App\Jobs\SendEmailQueueJob($details))
            	->delay(now()->addSeconds(2)); 

        dispatch($job);
        echo "Mail send successfully !!";
    }
}
