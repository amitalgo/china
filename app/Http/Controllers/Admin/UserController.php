<?php

namespace App\Http\Controllers\Admin;

use App\Service\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

    private $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function account(){
        $user = Auth::user();
        return view('admin.user-account', compact('user'));
    }

    public function accountUpdate(Request $request){
        $user = Auth::user();
        $id = $user->getId();
        $result = $this->userService->updateUser($request, $id);
        return $this->redirect('admin.user.account', $result, 'Account updated successfully');
    }

    public function changePassword(){
        return view('admin.change-password');
    }

    public function updatePassword(Request $request){
        $user = Auth::user();
        $id = $user->getId();
        $result = $this->userService->updatePassword($request, $id);
        return $this->redirect('admin.user.account.change-password', $result, 'Password updated successfully');
    }
}
