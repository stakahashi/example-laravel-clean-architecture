<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCases\User\GetAllUser;
use App\UseCases\User\SaveUser;

/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetAllUser $useCase)
    {
        return response()->json([
            'data' => $useCase()
        ]);
    }

    public function save(Request $request, SaveUser $useCase, $id = null)
    {
        return response()->json([
            'data' => $useCase($id, $request->all())
        ]);
    }
}
