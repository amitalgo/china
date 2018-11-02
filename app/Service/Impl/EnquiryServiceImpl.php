<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 01/11/2018
 * Time: 2:00 PM
 */

namespace App\Service\Impl;


use App\Helper\FileUploadHelper;
use App\Repository\EnquiryRepository;
use App\Service\EnquiryService;

class EnquiryServiceImpl extends FileUploadHelper implements EnquiryService
{
    private $enquiryRepository;

    public function __construct(EnquiryRepository $enquiryRepository)
    {
        $this->enquiryRepository=$enquiryRepository;
    }

    public function getAllEnquiries(){
        return $this->enquiryRepository->findAllEnquiries();
    }

    public function getEnquiryById($request){
        return $this->enquiryRepository->findEnquiryById($request->get('enquiryId'));
    }

}