<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $name = "Leo";
      $email = "leo@example.com";

      $data = [
        'name' => $name,
        'sex' => 'male',
        'birthday' => '1998-02-10'
      ];

      // viewsディレのusersフォルダーのindexファイルを開く
      // return view('users.index');

      // cpmpact method
      // return view('users.index', compact('name', 'email'));

      // with method
      // return view('users.index')->with('name', $name);
      return view('users.index')->with('data', $data);

      // Directory in the view
      //return view('users.index', ['data' => $data]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
      $data = [
        'Leo' => 'Leo',
        'Umi' => 'Umi'
      ];

      return view('users.index', [
        'users' => $data[$name] ?? 'User '.$name.' does not exitst.'
      ]);
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
