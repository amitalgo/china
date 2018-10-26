<?php

namespace App\Http\Controllers\Admin;

use App\Service\AdminRoleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Service\AdminService;

class AdminController extends Controller
{

    private $adminService,$adminRoleService;

    public function __construct(AdminService $adminService, AdminRoleService $adminRoleService){
        $this->adminService = $adminService;
        $this->adminRoleService = $adminRoleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->adminService->getActiveUsers();
        return view('admin.list-sub-admin',compact('admins'));
    }

    public function account(){
        $user = Auth::user();
        return view('admin.user-account', compact('user'));
    }

    public function accountUpdate(Request $request){
        $admin = Auth::user();
        $id = $admin->getId();
        $result = $this->adminService->updateUser($request, $id);
        return $this->redirect('admin.account', $result, 'Account updated successfully');
    }

    public function changePassword(){
        return view('admin.change-password');
    }

    public function updatePassword(Request $request){
        $user = Auth::user();
        $id = $user->getId();
        $result = $this->adminService->updatePassword($request, $id);
        return $this->redirect('admin.account.change-password', $result, 'Password updated successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->adminRoleService->getActiveAdminRoles();
        return view('admin.create-sub-admin',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "title" =>"required",
            "bannerimage-title" =>"required",
            "description" =>"required",
            "image" =>"required",
            "banner_image_description" =>"required",
        ]);

        $result  = $this->landingBannerService->saveData($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
