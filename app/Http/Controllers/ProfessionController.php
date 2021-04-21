<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    //show a specific article
    public function show(Article $profession) { // $profession because of the controllerlocationname.
        return view('profession.show', ['article' => $profession]);
    }

    // show all articles, newest first
    public function index() {
        $articles = Article::latest()->paginate(10);
        return view('profession.index', ['articles' => $articles]);
    }

    // create a article (creation page)
    public function create() {
        return view('profession.create');
    }

    // save the created article
    public function store(Request $request) {
        Article::create($this->validateArticle($request));
        return redirect(route('profession.index'));
    }

    // edit a article
    public function edit(Article $profession) {
        return view('profession.edit', ['article' => $profession]);
    }

    // save a edited article
    public function update(Article $profession, Request $request) {
        $profession->update($this->validateArticle($request));
        return redirect(route('profession.show', $profession->id));
    }

    // remove a article
    public function destroy(Article $profession) {
        $profession->delete();

        return redirect(route('profession.index'));
    }

    /**
     * Validate the article.
     * @param $request Request object
     * @return array
     */
    public function validateArticle($request): array
    {
        return $request->validate([
            'title' => ['required', 'min:8', 'max:255'],
            'excerpt' => ['required', 'min:10', 'max:9999'],
            'body' => ['required', 'min:20', 'max:9999'],
            'url' => ['nullable', 'url', 'max:255'],
            'icon' => ['nullable', 'max:255'],
        ]);
    }
}
