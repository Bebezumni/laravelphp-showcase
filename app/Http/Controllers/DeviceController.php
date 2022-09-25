<?php

namespace App\Http\Controllers;

use App\Models\Devices;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //all devices
    public function index(){

        return view('devices.index',[
            'devices'=> Devices::latest()->filter(request(['search']))->simplePaginate(4)
        ]);
    }
    //single
    public function show(Devices $device){
        return view('devices.show', [
            'device' => $device
        ]);
    }
    //create form
    public function create(){
        return view('devices.create');
    }
    //store device data
    public function store(Request $request){

        $formFields = $request->validate([
            'title'=>'required',
            'brandname'=>'required',
            'modelname'=>'required',
            'description'=>'required',
            'chars'=>'required',
        ]);
        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        Devices::create($formFields);

        return redirect('/')->with('message','Device posted successfuly!');

    }

    //edit form
    public function edit(Devices $device) {
        return view('devices.edit', ['device'=>$device]);
    }

    //update device data
    public function update(Request $request, Devices $device){

        $formFields = $request->validate([
            'title'=>'required',
            'brandname'=>'required',
            'modelname'=>'required',
            'description'=>'required',
            'chars'=>'required',
        ]);
        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $device->update($formFields);

        return back()->with('message','Device posted successfuly!');

    }
    //delete device
    public function delete(Devices $device) {
        $device->delete();
        return redirect('/')->with('message', 'Device Deleted Succesfully!');
    }
}
