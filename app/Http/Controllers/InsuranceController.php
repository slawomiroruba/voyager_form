<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\InsLead;

class InsuranceController extends Controller
{
    public function index()
    {
        $insurances = InsLead::all()->toArray();
        return array_reverse($insurances);
    }

    public function store(Request $request)
    {
        $insurance = new InsLead([
            'profession_numb' => $request->input('profession_numb'),
            'email' => $request->input('email'),
            'ins_type' => $request->input('ins_type')
        ]);
        $insurance->save();
        return response()->json('Insurance lead created!');
    }

    public function show($id)
    {
        $insurance = InsLead::find($id);
        return response()->json($insurance);
    }

    public function update($id, Request $request)
    {
        $insurance = InsLead::find($id);
        $insurance->update($request->all());

        return response()->json('Insurance updated!');
    }

    public function destroy($id)
    {
        $insurance = InsLead::find($id);
        $insurance->delete();

        return response()->json('Insurance deleted!');
    }
}
