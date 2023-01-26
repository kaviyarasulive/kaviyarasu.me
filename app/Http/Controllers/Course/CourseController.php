<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index() {
    return view('student.Course.view');
    }

    public function test() {
        return view('student.Course.test'); 
        
    }
    public function assignment() {
        return view('student.Course.assignment');
        
    }

    public function html() {
        return view('student.Course.html');
        
    }
    public function react() {
        return view('student.Course.react');
        
    }
    public function javascript() {
        return view('student.Course.javascript');
        
    }
    public function tailwind() {
        return view('student.Course.tailwind');
        
    }
    public function GitHub() {
        return view('student.Course.GitHub');
        
    }
    public function linux() {
        return view('student.Course.linux');
        
    }
    public function nodejs() {
        return view('student.Course.nodejs');
        
    }
    public function nextjs () {
        return view('student.Course.nextjs');
        
    }
    public function Advancenextjs() {
        return view('student.Course.Advancenextjs');
        
    }
    public function Rediscatching() {
        return view('student.Course.Rediscatching');
        
    }
}
