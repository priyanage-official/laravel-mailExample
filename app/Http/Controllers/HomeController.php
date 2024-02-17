<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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

    public function sendMail($id)
    {
        $getData = $this->userService->getSpecificUsers($id);

        $fullname = $getData->fullname;
        $email = $getData->email;
        $attachment = public_path('images\testing.png');

        Mail::to($email)->send(new SendEmail($fullname, $attachment));

        if (count(Mail::failures()) > 0) {
            return 'failed';
        } else {
            return Redirect::back()->with('success', 'Successfully Send!');
        }
    }
}
