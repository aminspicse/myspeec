<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'student_fname' => ['required', 'string', 'max:255'],
            'student_mname' => ['required', 'string', 'max:255'],
            'student_birthdate' => ['required', 'string', 'max:255'],
            'student_phone' => ['required', 'string', 'max:255'],
            'student_gender' => ['required', 'integer', 'max:255'],
            'present_address' => ['required', 'string', 'max:255'],
            'course_id' => ['required', 'integer', 'max:255'],
            'shift_id' => ['required', 'integer', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        return User::create([
            'name' => $data['name'],
            'student_fname' => $data['student_fname'],
            'student_mname' => $data['student_mname'],
            'student_birthdate' => $data['student_birthdate'],
            'student_phone' => $data['student_phone'],
            'student_gender' => $data['student_gender'],
            'present_address' => $data['present_address'],
            'course_id' => $data['course_id'],
            'shift_id' => $data['shift_id'],
            'lasteducation' => $data['lasteducation'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
