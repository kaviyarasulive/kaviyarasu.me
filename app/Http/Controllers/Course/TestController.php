<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test1() {
        return view('student.Course.test.test1');
        }
}
