<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddcourseController extends Controller
{
    public function index() {
        return view('admin.course.addfrontend');
        }
}
