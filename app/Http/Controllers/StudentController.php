<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function home(Request $request){
        
            $validatedData = $request->validate([
                'name' => 'required',
                'age' => 'required|numeric',
                'address' => 'required',
                'telephone' => 'required',
            ]);
    
            $student = new Student();
            $student->name = $validatedData['name'];
            $student->age = $validatedData['age'];
            $student->telephone = $validatedData['telephone'];
            $student->save();
    
            return view("add_student");
    }
    public function display(){
            
    }
}
