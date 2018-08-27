<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Exceptions\User\WrongCredentialException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use App\Classroom;
use Sentinel;

class UserController extends Controller
{
    //
    public function login(){
        return view('pages.login', compact(''));
    }

    public function postLogin(Request $request)
    {
        try{
            Sentinel::authenticate($request->all());
            if(Sentinel::check())
                return redirect()->route('dashboard');
            else
                throw new WrongCredentialException("Kombinasi nomor akademik dan password salah.");
        } catch (WrongCredentialException $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "Alamat IP anda di ban selama $delay detik."]);
        }
    }

    public function postLogout()
    {
        Sentinel::logout();
        return redirect()->route('login');
    }

    public function dashboard(){
        $classrooms = Classroom::get();
        return view('student.pages.dashboard', compact('classrooms'));
    }
}
