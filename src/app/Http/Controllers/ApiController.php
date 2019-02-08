<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return new JsonResponse('You are authorized user');
    }
}
