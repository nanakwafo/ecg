<?php

namespace App\Http\Controllers;

use App\Models\Meterrequest;
use Illuminate\Http\Request;

class MeterController extends Controller
{
    //
    public function newmeter()
    {
        return view('newmeter');
    }

    public function postnewmeter(Request $request)
    {
        $path = 'uploads/';
        $newname_ghanacard_copy = $this->renameFile($path, $request->file('ghanacard_copy')->getClientOriginalName());

        $newname_buildingpermit_copy = $this->renameFile($path, $request->file('buildingpermit_copy')->getClientOriginalName());
        $newname_energycommission_copy = $this->renameFile($path, $request->file('energycommission_copy')->getClientOriginalName());

        $upload_ghanacard_copy = $request->ghanacard_copy->move(public_path($path), $newname_ghanacard_copy);
        $upload_buildingpermit_copy = $request->buildingpermit_copy->move(public_path($path), $newname_buildingpermit_copy);
        $upload_energycommission_copy = $request->energycommission_copy->move(public_path($path), $newname_energycommission_copy);


        $newmeter = new Meterrequest();
        $newmeter->first_name = $request->first_name;
        $newmeter->last_name = $request->last_name;
        $newmeter->other_name = $request->other_name;
        $newmeter->phone_number_one = $request->phone_number_one;
        $newmeter->phone_number_two = $request->phone_number_two;
        $newmeter->email = $request->email;
        $newmeter->residential_address = $request->residential_address;
        $newmeter->ghana_post_gps = $request->ghana_post_gps;
        $newmeter->address_Post_Office = $request->address_Post_Office;
        $newmeter->national_id = $request->national_id;
        $newmeter->meter_type = $request->meter_type;
        $newmeter->ghanacard_copy = $newname_ghanacard_copy;
        $newmeter->buildingpermit_copy = $newname_buildingpermit_copy;
        $newmeter->energycommission_copy = $newname_energycommission_copy;
        $newmeter->save();

        return redirect()->back()->with('message', 'Application received and undergoing review');;




//        if ($upload_ghanacard_copy && $upload_buildingpermit_copy && $upload_energycommission_copy) {
//            echo 'File has been successfuly been uploaded';
//        } else {
//            echo 'Something went wrong';
//        }

    }

    private function renameFile($path, $filename)
    {
        if ($pos = strrpos($filename, '.')) {
            $name = substr($filename, 0, $pos);
            $ext = substr($filename, $pos);
        } else {
            $name = $filename;
        }
        $newpath = $path . '/' . $filename;
        $newname = $filename;
        $counter = 0;
        while (file_exists($newpath)) {
            $newname = $name . '_' . $counter . $ext;
            $newpath = $path . '/' . $newname;
            $counter++;
        }
        return $newname;

    }
}
