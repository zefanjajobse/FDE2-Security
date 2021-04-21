<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    // show all faqs
    public function index() {
        $faqs = Faq::paginate(10);
        return view('faq.index', ['faqs' => $faqs]);
    }

    // create a faq (creation page)
    public function create() {
        return view('faq.create');
    }

    // save the created faq
    public function store(Request $request) {

        // does check if valid, if valid run outer function: create FAQ
        Faq::create($this->validateFaq($request));

        // dump(request()->all());
//        $faq = new Faq();
//        $faq->title = request('title');
//        $faq->body = request('body');
//        $faq->link = request('link');
//        $faq->save();

//        // Simplification:
//        Faq::create([
//            'title' => request('title'),
//            'body' => request('body'),
//            'link' => request('link')
//        ]);

        return redirect(route('faq.index'));
    }

    // edit a faq
    public function edit(Faq $faq) {
        return view('faq.edit', ['faq' => $faq]);
    }

    // save a edited faq
    public function update(Faq $faq, Request $request) {

        // same thing: update if validate function passes. validate function returns array.
        $faq->update($this->validateFaq($request));

//        $faq = Faq::find($id);
//        $faq->title = request('title');
//        $faq->body = request('body');
//        $faq->link = request('link');
//        $faq->save();

        return redirect(route('faq.index'));
    }

    // remove a faq
    public function destroy(Faq $faq) {
        $faq->delete();

        return redirect(route('faq.index'));
    }

    /**
     * validate the FAQ, made into function against duplication.
     * @param $request Request object
     * @return array
     */
    public function validateFaq($request): array
    {
        return $request->validate([
            'title' => ['required', 'min:8', 'max:255'],
            'body' => ['required', 'min:20', 'max:9999'],
            'link' => ['nullable', 'url', 'max:255']
        ]);
    }
}
