<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index(){
        $publisherData = Publisher::all();
        return view('publishers.publisher', compact('publisherData'));
    }

    public function getPublisher1Details(){
        $publisherData = DB::table('publishers')
            ->where('publisherId', 1)->get();
        return view('publishers.publisher1', compact('publisherData'));
    }

    public function getPublisher2Details(){
        $publisherData = DB::table('publishers')
            ->where('publisherId', 2)->get();
        return view('publishers.publisher2', compact('publisherData'));
    }
}
