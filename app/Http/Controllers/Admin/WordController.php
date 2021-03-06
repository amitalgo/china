<?php

namespace App\Http\Controllers\Admin;

use App\Service\WordService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    private $wordService;

    public function __construct(WordService $wordService)
    {
        $this->wordService=$wordService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words=$this->wordService->getAllWords();
        return view('admin.list-words',compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.words');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "word"=>"required"
        ]);

        $result=$this->wordService->saveWord($request);
        if($result){
            return redirect()->route('word.index')->with('success-msg','Word Added SuccessFully');
        }else{
            return redirect()->route('word.create')->with('error-msg','Something Went Wrong');
        }
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
        $words=$this->wordService->getWordById($id);
        return view('admin.words',compact('words'));
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
        $request->validate([
            "word"=>"required"
        ]);

        $result=$this->wordService->updateWord($request,$id);
        if($result){
            return redirect()->route('word.index')->with('success-msg','Word Updated SuccessFully');
        }else{
            return redirect()->route('word.index')->with('error-msg','Something Went Wrong');
        }

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
