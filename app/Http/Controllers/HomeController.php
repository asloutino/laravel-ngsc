<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function ar()
    {
        return view('index-ar');
    }

    public function pageView(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        } else {
            abort(404);
        }
    }

    public function arPageView(Request $request)
    {
        $adjustedPath = substr($request->path(), strpos($request->path(), '/', 1));
        if (view()->exists($adjustedPath)) {
            return view($adjustedPath."-ar");
        } else {
            abort(404);
        }
    }
}
