<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::where('role_id','!=','3')->get();
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', "!=", 'patient')->get();
        return view('admin.doctor.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        $data = $request->all();

        $name = (new User)->userAvatar($request);

        $data['image'] = $name;
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->route('doctor.index')->with('message', 'Doctor added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = User::find($id);
        return view('admin.doctor.delete', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = User::find($id);

        return view('admin.doctor.edit', compact('doctor'));
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
        $this->validateUpdate($request, $id);
        $data = $request->all();
        $doctor = User::find($id);

        $imageName = $doctor->image;
        $userPassword = $doctor->password;

        //tratamento da imagem
        if($request->hasFile('image')){
            $imageName = (new User)->userAvatar($request);
            unlink(public_path('images/'.$doctor->image));
        }
        $data['image'] = $imageName;

        //tratamento de senha
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }else{
            $data['password'] = $userPassword;
        }

        $doctor->update($data);

        return redirect()->route('doctor.index')->with('message', 'Doctor updated!');


    }

    public function validateUpdate($request, $id)
    {
        return $this->validate($request, [
                'name' => 'required',
                'email' => 'required|unique:users,email,'.$id,

                'gender' => 'required',
                'education' => 'required',
                'address' => 'required',
                'department' => 'required',
                'phone_number' => 'required',
                'image' => 'mimes:jpeg,jpg,png',
                'role_id' => 'required',
                'description' => 'required',
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user('id') == $id){
            abort(401);
        }

        $doctor = User::find($id);
        $userDelete = $doctor->delete();
        if($userDelete){
            unlink(public_path('images/'.$doctor->image));
        }

        return redirect()->route('doctor.index')->with('message', 'Doctor '. $doctor->name . ' deleted!');
    }
}
