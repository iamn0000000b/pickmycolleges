<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use App\Traits\MediaUploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    use MediaUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View | ViewFactory
    {
        $articles = Article::all();

        if(request()->ajax()) {
            return datatables()->of($articles)
                ->addIndexColumn()
                ->editColumn('image', function($row) {
                    if(!empty($row->image)) {
                        return '<img src="'.$row->image_url.'" alt="" class="img-responsive">';
                    }
                })
                ->editColumn('created_at', function($row) {
                    return Carbon::parse($row->created_at)->toDateTimeString();
                })
                ->addColumn('action', function($row) {
                    return view('admin.includes.datatablesActions', [
                        'crudRoutePart' => 'articles',
                        'row' => $row,
                    ]);
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }

        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View | ViewFactory
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ArticleStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request) : RedirectResponse
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $this->uploadMedia($file, 'articles');
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article) : View | ViewFactory
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) : View | ViewFactory
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ArticleUpdateRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdateRequest $request, Article $article) : RedirectResponse
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $this->uploadMedia($file, 'articles', $article->image);
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) : RedirectResponse
    {
        $this->unlinkMedia('articles', $article->image);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
