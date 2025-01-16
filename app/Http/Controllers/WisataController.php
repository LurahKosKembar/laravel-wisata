<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WisataController extends Controller
{
    public function index() 
    {
        $wisatas = Wisata::all();
        return view('list-wisata', ['destination' => $wisatas]);
    }

    public function showWisata($id)
    {
        try {
            // Validate the ID (ensure it's numeric or matches some other criteria)
            $validator = Validator::make(['id' => $id], [
                'id' => 'required|integer' // Ensures the ID is a valid integer and exists in the 'wisata' table
            ]);

            if ($validator->fails()) {
                // If validation fails, return a response with error messages
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Retrieve the 'wisata' record or fail
            $wisata = Wisata::findOrFail($id);

            // Return the view with the data
            return view('wisata', ['data' => $wisata]);

        } catch (ModelNotFoundException $e) {
            // Catch the exception if the record is not found
            return redirect()->route('wisata.index')->with('error', 'Wisata not found.');
        } catch (\Exception $e) {
            // Catch any other exceptions that may occur
            return redirect()->route('wisata.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
