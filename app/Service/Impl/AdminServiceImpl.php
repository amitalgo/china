<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:50 PM
 */

namespace App\Service\Impl;


use App\Helper\FileUploadHelper;
use App\Repository\AdminRepository;
use App\Service\AdminService;
use Illuminate\Support\Facades\Hash;

class AdminServiceImpl extends FileUploadHelper implements  AdminService {

    private $adminRepository;

    public function __construct(AdminRepository $adminRepository){
        $this->adminRepository = $adminRepository;
    }

    public function getUsers(){

    }

    public function getActiveUsers(){
        return $this->adminRepository->findActiveUsers();
    }

    public function getUser($id){

    }

    public function saveUser($request){

    }

    public function updateUser($request, $id){
        $user = $this->adminRepository->findUser($id);
        $user->setFirstName($request->get('first-name'));
        $user->setLastName($request->get('last-name'));
        $user->setEmail($request->get('email'));
        $profilePic = $this->uploadFile($request, 'profile-pic');
        if($profilePic){
            $user->setProfileImage($profilePic);
        }
        return $this->adminRepository->saveOrUpdateUser($user);
    }

    public function updatePassword($request, $id){
        $user = $this->adminRepository->findUser($id);
        $user->setPassword(Hash::make($request->get('new-password')));
        return $this->adminRepository->saveOrUpdateUser($user);
    }
}