<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailBodyRequest;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;

class SendMailController extends Controller
{

    /**
     * @var userService
     */
    protected $userService;

    /**
     * userController Constructor
     *
     * @param UserService $userService
     *
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function sendMail(EmailBodyRequest $request)
    {
        // return 'ok';

        try {

            $details = [
                'title' => $request->title,
                'subject' => $request->subject,
                'description' => $request->description,
                'users' => $this->userService->getAll(),
            ];

            // $result['data'] = $this->userService->getAll();

            $job = (new \App\Jobs\SendEmailQueueJob($details))
            	->delay(now()->addSeconds(2)); 

            dispatch($job);

            return $this->sendResponse([], 'Mail send successfully !!');

        } catch (Exception $e) {

            return $this->sendError($e->getMessage()); 

        }   	
        
    }
}
