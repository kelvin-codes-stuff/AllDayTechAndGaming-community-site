<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\news\Entities\Article;
use Modules\News\Entities\Category;
use Modules\News\Enums\ArticleStatusEnum;

class NewsController extends Controller
{
    // Homepage
    public function index(Request $request)
    {   
        // Getting all articles with categories
        $articles = Article::orderBy('publish_date', 'desc')
            ->published()
            ->with('categories')
            ->get();
        
        $articlesHardware = $articles->filter(function (Article $article) {
                return $article->categories->search(function (Category $category) {
                    return $category->name === 'Hardware';
                }) !== false;
            });
        
        $articlesSoftware = $articles->filter(function (Article $article) {
            return $article->categories->search(function (Category $category) {
                return $category->name === 'Software';
                }) !== false;
            });            

        return view('news::pages.home', [
            'articles' => $articles,
            'hardware' => $articlesHardware,
            'software' => $articlesSoftware
        ]);
    }


    public function articleList(Request $request, $categorySlug) 
    {
        $articles = Article::orderBy('publish_date','desc')
        ->where('status', 1)
        ->whereRelation('categories','slug', $categorySlug)
        ->get();

        return view('news::pages.article_list', ['articles' => $articles, 'title' => $categorySlug]);
    }

    // 404 error
    public function notFound(Request $request)
    {
        return view('news::pages.404');
    }
}
