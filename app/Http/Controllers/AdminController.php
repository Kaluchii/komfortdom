<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('slider')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('layout')->sortBy('sorter','DESC');
    }

    public function getIndex(){
        return view('back.layout');
    }

    public function getMain(){
        $main_block= $this->extract->getBlock('main_block');
        return view('back.blocks.main_block', [
            'main_block' => $main_block
        ]);
    }

    public function getAbout(){
        $about = $this->extract->getBlock('about');
        return view('back.blocks.about', [
            'about' => $about
        ]);
    }

    public function getGallery(){
        $gallery = $this->extract->getBlock('gallery');
        return view('back.blocks.gallery', [
            'gallery' => $gallery
        ]);
    }

    public function getFlats(){
        $flats = $this->extract->getBlock('flats');
        return view('back.blocks.flats', [
            'flats' => $flats
        ]);
    }

    public function getFlatsItem( $id ){
        $flat_item = $this->extract->getGroupItem('dom_flat', $id);
        return view('back.groups.dom_flat.dom_flat', [
            'item' => $flat_item
        ]);
    }

    public function getContacts(){
        $contacts = $this->extract->getBlock('contacts');
        return view('back.blocks.contacts', [
            'contacts' => $contacts
        ]);
    }

    public function getCourse(){
        $course = $this->extract->getBlock('prices');
        return view('back.blocks.prices', [
            'course' => $course
        ]);
    }

    public function getMeta(){
        $meta = $this->extract->getBlock('main_block');
        $scripts = $this->extract->getBlock('scripts');
        return view('back.blocks.meta', [
            'meta' => $meta,
            'scripts' => $scripts
        ]);
    }

    public function getMails(){
        $call = $this->extract->getBlock('call');
        return view('back.blocks.mails', [
            'call' => $call
        ]);
    }

}
