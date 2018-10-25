<?php

namespace App\Http\Controllers\Admin;

use App\Service\PageService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    private $pageService;

    public function __construct(PageService $pageService){
        $this->pageService = $pageService;
    }

    public function index(){
        $pages = $this->pageService->getPages();
        return view('admin.pages', compact('pages'));
    }

    public function create(){
        $pages = $this->pageService->getActivePages();
        return view('admin.page', compact('pages'));
    }

    public function store(Request $request){
        $result = $this->pageService->savePage($request);
        return $this->redirect('admin.page', $result, 'Page created successfully');
    }

    public function edit($id){
        $page = $this->pageService->getPage($id);
        $pages = $this->pageService->getActivePages();
        $pages = array_filter($pages, function($pa) use($page){
            return $pa!=$page;
        });
        return view('admin.page', compact('pages', 'page'));
    }

    public function update($id, Request $request){
        $result = $this->pageService->updatePage($request, $id);
        return $this->redirect('admin.page', $result, 'Page updated successfully');
    }
}
