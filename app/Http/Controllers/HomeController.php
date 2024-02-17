<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data['allUsers'] = $this->userService->getAllUsers();
        return view('home', $data);
    }

    public function sendMail()
    {
        $name = 'Priya';
        Mail::to('priyanage11@gmail.com')->send(new SendEmail($name));

        if (count(Mail::failures()) > 0) {
            return 'failed';
        } else {
            return 'done';
        }
    }
}
