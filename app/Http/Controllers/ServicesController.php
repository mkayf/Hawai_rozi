<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services_page(){
        $services = Service::all();
        return view('pages.services', ['services' => $services]);
    }
}
