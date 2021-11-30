<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // kita bebas mau pake yg pipe atau yg array, sama aja
            'name' => 'required|max:255',
            'username' => ['required', 'min:4', 'max:30', 'unique:users,username'],
            'email' => ['required', 'email:dns', 'unique:users,email'],
            'password' => [
                'required', 'max:255',
                Password::min(5)->mixedCase()->numbers()->uncompromised()
            ]
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        //menampilkan pesan setelah berhasil
        //dengan 2 tahap
        // $request->session()->flash('success-registration', 'Registration Success!');

        // return redirect('/login');

        //dengan satu kali kiriman

        return redirect('/login')->with(session()->flash('success-registration', 'Registration Success!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
