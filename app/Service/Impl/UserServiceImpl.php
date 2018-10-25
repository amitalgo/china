<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:50 PM
 */

namespace App\Service\Impl;


use App\Helper\FileUploadHelper;
use App\Repository\UserRepository;
use App\Service\UserService;
use Illuminate\Support\Facades\Hash;

class UserServiceImpl extends FileUploadHelper implements  UserService {

    private $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function getUsers(){

    }

    public function getActiveUsers(){

    }

    public function getUser($id){

    }

    public function saveUser($request){

    }

    public function updateUser($request, $id){
        $user = $this->userRepository->findUser($id);
        $user->setFirstName($request->get('first-name'));
        $user->setLastName($request->get('last-name'));
        $user->setEmail($request->get('email'));
        $profilePic = $this->uploadFile($request, 'profile-pic');
        if($profilePic){
            $user->setProfileImage($profilePic);
        }
        return $this->userRepository->saveOrUpdateUser($user);
    }

    public function updatePassword($request, $id){
        $user = $this->userRepository->findUser($id);
        $user->setPassword(Hash::make($request->get('new-password')));
        return $this->userRepository->saveOrUpdateUser($user);
    }
}