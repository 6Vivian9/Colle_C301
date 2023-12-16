<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ts_user;
use App\Services\BreadcrumbService;
use Illuminate\Support\Facades\DB;
use App\Models\QuizQuestion;


class AuthController extends Controller
{
    protected $breadcrumbService;

    public function __construct(BreadcrumbService $breadcrumbService)
    {
        $this->breadcrumbService = $breadcrumbService;
    }

    public function showHtmlEasyQuiz()
    {
        // Retrieve HTML easy questions
        $htmlEasyQuestions = QuizQuestion::where('module_id', 1)
            ->where('difficulty_level', 'easy')
            ->get();

        // Debugging: Dump and die to check if data is retrieved
        dd($htmlEasyQuestions);

        // Pass data to the Blade view
        return view('modules.html.htmleasy', ['htmlEasyQuestions' => $htmlEasyQuestions]);
    }

    


    public function performRegister(Request $request)
    {
        $request->validate([
            'FullName' => 'required',
            'Email' => 'required|email',
            'Register_Password' => 'required|between:8,255',
            'Password_Confirm' => 'required|same:Register_Password',
        ]);

        // Add breadcrumbs for the registration page
        $this->breadcrumbService->addBreadcrumb('Home', '/');
        $this->breadcrumbService->addBreadcrumb('Register');

        $ts_users = new ts_user();
        $ts_users->full_name = $request->input('FullName');
        $ts_users->email = $request->input('Email');
        $ts_users->pword = $request->input('Register_Password');
        $ts_users->date_modified = date("Y-m-d");
        $ts_users->date_created = date("Y-m-d");
        $ts_users->save();

        return redirect()->intended('home');
    }

    public function performLogin(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        // Add breadcrumbs for the login page
        $this->breadcrumbService->addBreadcrumb('Home', '/');
        $this->breadcrumbService->addBreadcrumb('Login');

        $user = ts_user::where('email', $request->input('Email'))
            ->where('pword', $request->input('Password'))
            ->first();

            if (!$user) {
                return response('No user found with the provided email address.');
            }

        if ($user->is_active == 0) {
            return response('Your Account is inactive!');
        } elseif ($user->is_banned == 1) {
            return response('Your Account is Banned!');
        } else {
            return redirect()->intended('home');
        }
    }
}
