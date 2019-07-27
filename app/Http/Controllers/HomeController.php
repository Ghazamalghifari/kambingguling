<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use OpenGraph;
use SEOMeta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('kambinggulinglampung.com');
        SEOMeta::setDescription('Kambing Guling Lampung adalah ');
        SEOMeta::setCanonical('https://kambinggulinglampung.com');
        SEOMeta::addKeyword(['kambing', 'guling', 'kambing guling','kambing guling lampung','kambing lampung', 'aqiqah', 'aqiqah lampung','gulai kambing  lampung','kambing lampung','kurban lampung','paket aqiqah lampung','jual kambing lampung','kambing kurban','makanan lampung','prasmanan lampung','nasi kotak lampung','lampung','bandar lampung']);

        OpenGraph::setDescription('Kambing Guling Lampung Adalah');
        OpenGraph::setTitle('kambinggulinglampung.com');
        OpenGraph::setUrl('https://kambinggulinglampung.com');
        OpenGraph::addProperty('type', 'articles');

        return view('home');
    }
}
