<?php

namespace App\Http\Controllers;

use App\User;
use App\Archivo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin')->only('index');
    // code...
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.userIndex', compact('users'));
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

      $request->validate([
      'nombre' => ['required', 'string', 'max:255'],
      'codigo' => ['required', 'string', 'max:20', 'unique:users'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:6', 'confirmed'],
      'avatar' => ['required'],
      'rol' => ['required']
    ]);
        //
        if($request->hasFile('avatar'))
        {
        $arch = new Archivo(['img' => $request->avatar->store('public') ]);
        }

          $user =   User::create([
              'nombre' => $request->nombre,
              'codigo' => $request->codigo,
              'email' => $request->email,
              'password' => Hash::make($request->password),
              'rol' => $request->rol,
          ]);
          $user->archivos()->save($arch);
          return redirect()->route('users.index')->with([
                    'mensaje' => 'Nuevo Usuario',
                    'alert-class' => 'alert-warning',
                ]);
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $this->authorize('update-user', $user);
        return view('users.userShow', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //

        $this->authorize('update-user', $user);
        return view('users.userForm', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
          'nombre' => 'required|max:255',
        ]);
          //

          $user->nombre = $request->input('nombre');
          $user->save();

          if ($request->hasFile('avatar')) {
          //$arch =  ::where('imagen_id',$user->id)->get(['id']);
          $img = null;
          foreach ($user->archivos as $img){
          }
              if($img == null)
              {
                $arch =  new Archivo(['img' => $request->file('avatar')->store('public') ]);
                $user->archivos()->save($arch);
              }
              else {
                Archivo::where('imagen_id', '=', $user->id)->update(array('img' => $request->file('avatar')->store('public')));
              }
          }

          return redirect()->route('users.show', compact('user'))->with([
                    'mensaje' => 'Perfil actualizado',
                    'alert-class' => 'alert-warning',
                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
