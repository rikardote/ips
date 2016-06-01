<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\IpRequest;

use App\Ip;

use Laracasts\Flash\Flash;

class IpsController extends Controller
{
    
    public function index()
    {	

	    $ips = Ip::all()->toArray();
	    //$ips = Ip::where('ubicacion_id', '=', 0)->get()->toArray();
	    while($row = array_shift($ips)) {
	         $json[] = $row['ip'];
	    }

	        $x = json_encode($json);
	        $s = json_decode($x);
	        //dd($s);
	        //$datos = Ip::where('ip', '=', $ip);
	        return view('inventario.index')->with('ips', $s);
	    }
   
    public function show($ubicacion_id)
    {   
        //$ips = Ip::all()->toArray();
        if ($ubicacion_id == 0) {
                $ips = Ip::all()->toArray();
            }else {
                $ips = Ip::where('ubicacion_id', '=', $ubicacion_id)->get()->toArray();
            }
        
        while($row = array_shift($ips)) {
             $json[] = $row['ip'];
        }
 
            $x = json_encode($json);
            $s = json_decode($x);
            //dd($s);
            //$datos = Ip::where('ip', '=', $ip);
            if ($ubicacion_id == 0) {
                return view('inventario.libres')->with('ips', $s);
            }else {
                return view('inventario.show')->with('ips', $s);
            }
            
        
    }   	
    public function create($ip) 
    {
    	return view('inventario.create')->with('ip', $ip);
    }
    public function edit($ip) 
    {
        $datos = Ip::where('ip', '=', $ip)->get()->first();

    	return view('inventario.edit')->with('datos', $datos);
    }
    public function store(IpRequest $request) 
    {
    	$datos = new Ip($request->all());	
    	$datos->save();
		//Toastr::success('Ip Asignada Correctamente');
    	return redirect('/');
    }
    public function update(Request $request, $id)
    {
		$dato = Ip::find($id);
        $dato->fill($request->all());
        $dato->save();
		//Toastr::success('Ip Actualizada Correctamente');
		//Flash::success('Ip Actualizada Correctamente');
        return redirect('/');
    }
	public function destroy($id)
    {
        $dato = Ip::find($id);
        $dato->delete();
      	//Toastr::error('Ip Liberada Correctamente');
        return redirect('/');

    } 
}