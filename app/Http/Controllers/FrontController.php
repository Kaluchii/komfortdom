<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('layout')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('dom_flat')->sortBy('sorter','ASC');
    }


    public function getIndex(){
        $main_block = $this->extract->getBlock('main_block');
        $about = $this->extract->getBlock('about');
        $gallery = $this->extract->getBlock('gallery');
        $flats = $this->extract->getBlock('flats');
        $contacts = $this->extract->getBlock('contacts');
        $prices = $this->extract->getBlock('prices');
        $scripts = $this->extract->getBlock('scripts');
        return view('front.index.index', [
            'main_block' => $main_block,
            'about' => $about,
            'gallery' => $gallery,
            'flats' => $flats,
            'contacts' => $contacts,
            'prices' => $prices,
            'scripts' => $scripts
        ]);
    }

    public function getThanks(){
        $scripts = $this->extract->getBlock('scripts');
        return view('front.index.thanks', [
            'scripts' => $scripts
        ]);
    }
}
