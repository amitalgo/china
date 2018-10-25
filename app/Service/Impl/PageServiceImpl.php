<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 08/10/2018
 * Time: 2:55 PM
 */

namespace App\Service\Impl;


use App\Entities\Page;
use App\Helper\FileUploadHelper;
use App\Repository\PageRepository;
use App\Service\PageService;

class PageServiceImpl extends FileUploadHelper implements PageService{

    private $pageRepository;

    public function __construct(PageRepository $pageRepository){
        $this->pageRepository = $pageRepository;
    }

    public function getPages(){
        return $this->pageRepository->findPages();
    }

    public function getActivePages(){
        return $this->pageRepository->findActivePages();
    }

    public function getPage($id){
        return $this->pageRepository->findPage($id);
    }

    public function savePage($request){
        $page = new Page();
        $this->createPageData($request, $page);
        return $this->pageRepository->saveOrUpdatePage($page);
    }

    public function updatePage($request, $id){
        $page = $this->pageRepository->findPage($id);
        $this->createPageData($request, $page);
        return $this->pageRepository->saveOrUpdatePage($page);
    }

    private function createPageData($request, $page){
        $page->setTitle($request->get('title'));
        $page->setContent($request->get('content'));
        $page->setIsActive($request->get('status'));
        if($request->get('parent')){
            $page->setParent($this->pageRepository->findPage($request->get('parent')));
        }
        $imagePath = $this->uploadFile($request, 'image');
        if($imagePath){
            $page->setFeaturedImage($imagePath);
        }
    }
}