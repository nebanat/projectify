<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\File\StoreFileRequest;
use App\File;

class FileController extends Controller
{
    //
    public function index()
    {
        $files = auth()->user()->files()->latest()->finished()->get();

        ///dd($files);

        return view('account.files.index', compact('files'));
    }

    public function create(File $file){
       
        if(!$file->exists){
            $file = $this->createAndReturnSkeletonFile();

            return redirect()->route('account.files.create',$file);
        }

        $this->authorize('touch',$file);

        return view('account.files.create', compact('file'));
    }

    public function store(File $file, StoreFileRequest $request){
        
        $this->authorize('touch',$file);

        $file->fill($request->only(['title','overview_short','overview','price','state','category']));

        $file->finished=true;

        $file->save();

        return redirect()->route('home');

    }
 
    protected function createAndReturnSkeletonFile(){

        return auth()->user()->files()->create([
            'title'=>'untitled',
            'overview_short'=> 'None',
            'overview'=>'None',
            'price'=>0,
            'finished'=>false,
            'state'=>0,
            'category'=>'None'

        ]);

    }
}
