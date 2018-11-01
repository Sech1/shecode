<?php

namespace App\Http\Controllers;

use App\Signup;
use App\Mail\FormReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!env('JOIN_ENABLE', false)) {
            abort(404);
        }
        return view('join');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'last' => 'required',
          'guardianFirst' => 'required',
          'guardianLast' => 'required',
          'guardianEmail' => 'required|email',
          'guardianNumber' => 'required|regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
          'email' => 'nullable|email',
          'shirts' => 'required',
          'allergies' => 'nullable',
          'doc' => 'nullable'
        ]);
        // $path = $request->file('doc')->store('documents');

        if ($request->has('doc')) {
            $path = $request->file('doc')->storeAs(
          'documents',
                  str_slug($request->name, '') . '.' . $request->file('doc')->getClientOriginalExtension()
          );
        } else {
            $path = 'no file';
        }

        $guardianFirstVar = $request->input('guardianFirst') ?? 'No Parent or Guardian Entered';
        $guardianLastVar = $request->input('guardianLast') ?? 'No Parent or Guardian Entered';
        $guardianEmailVar = $request->input('guardianEmail') ?? 'No Parent or Guardian Entered';
        $guardianNumberVar = $request->input('guardianNumber') ?? 'No Parent or Guardian Entered';
        $allergyVar = $request->input('allergies') ?? 'No Allergies Entered';

        Signup::create([
          'first' => $request->name,
          'last' => $request->last,
          'guardianFirst' => $guardianFirstVar,
          'guardianLast' => $guardianLastVar,
          'guardianEmail' => $guardianEmailVar,
          'guardianNumber' => $guardianNumberVar,
          'email' => $request->email,
          'allergies' => $request->allergies,
          'file_path' => $path,
          'shirts' => $request->shirts
        ]);

        Mail::to($request->email)->queue(new FormReceived($request->name));
        return view('success')->with([
          'name' => $request->name,
          'email' => $request->email
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function show(Signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function edit(Signup $signup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signup $signup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signup $signup)
    {
        //
    }
}
