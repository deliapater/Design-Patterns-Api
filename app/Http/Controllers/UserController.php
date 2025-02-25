<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\UserFactory;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = UserFactory::createUser($request->role, $request->name);
        return response()->json($user);
    }
}