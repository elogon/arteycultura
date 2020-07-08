<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;

//Export
use App\Exports\UsersExport;
//Import
use App\Imports\UsersImport;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
  {
    //$users = User::all();
        $users = User::paginate(20);
        return view('users.index')->with('users', $users); 
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('users.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(UserRequest $request)
  {
    //dd($request->all());
    $user = new User;
    $user->fullname           = $request->fullname;
    $user->document_type      = $request->document_type;
    $user->num_document       = $request->num_document ;
    $user->email              = $request->email;
    $user->email_verified_at  = now();
    $user->password           = bcrypt($request->password);
    $user->remember_token     = Str::random(10);
    $user->rol_id            = $request->rol_id;

    if($user->save()) {
            return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' fue adicionado con Exito!');
        }
   
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $user = User::findOrFail($id);
        //dd($user);
        return view('users.show')->with('user', $user);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
     $user = User::findOrFail($id);
        return view('users.edit')->with('user', $user);


  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(UserRequest $request, $id)
  {

     $user = User::find($id);
     $user->fullname          = $request->fullname;
     $user->document_type     = $request->document_type;
     $user->num_document      = $request->num_document ;
     $user->email             = $request->email;
     $user->password          = bcrypt($request->password);

     if($user->save()) {
        return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' fue modificado con Exito!');
    }
   
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
     //User::destroy($id);
        $user = User::find($id);
         if($user->delete()) {
            return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' fue eliminado con Exito!');
        }
  }
  public function pdf() {
        //dd('Descargar PDF');
        $users = User::all();
        $pdf = \PDF::loadView('users.pdf', compact('users'));
        return $pdf->download('allusers.pdf');
    }

    public function excel() {
        return \Excel::download(new UserExport, 'allusers.xlsx');
    }

    public function import(Request $request) {
        // $this->validate($request, [
        //     'file' => 'required|file|mimes:xls, xlsx'
        // ]);
        $file = $request->file('file');
        \Excel::import(new UsersImport, $file);
        return redirect()->back()->with('message', 'Los Usuarios se importaron con exito!');
    }

}