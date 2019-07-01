<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

abstract class AdminController extends Controller
{
    abstract public function adminpages();
}
