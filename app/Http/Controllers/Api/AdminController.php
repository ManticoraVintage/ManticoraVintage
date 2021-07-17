<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyUser(Request $request)
    {
        $admin = Admin::where('username', $request->username)->where('password', $request->password)->get();

        // Returns 0 if not found
        return count($admin);
    }
}
