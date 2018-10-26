<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entities\User;
use App\Service\AdminService;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    public function __construct(AdminService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getActiveUsers();
        return UserResource::collection($users);
    }
}
