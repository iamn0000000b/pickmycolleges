<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\MediaUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ScraperController extends Controller
{
    use MediaUploadTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.scraper.index');
    }
}
