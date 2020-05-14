<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Faq;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use DLW\Http\Requests\Admin\CreateFaqRequest;
use DLW\Http\Requests\Admin\UpdateFaqRequest;

class FaqsController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', ['title'=>'FAQs', 'faqs'=>$faqs]); 
    }

    public function create()
    {
        return view('admin.faqs.create', ['title'=>'Create Faq']);
    }

    public function store(CreateFaqRequest $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->category = $request->category;
        $faq->answer = $request->answer;

        $faq->save();

        return redirect()->route('faqs.index');
    }

    public function show(Faq $faq)
    {
        //
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', ['title'=>'Edit Faq', 'faq'=>$faq]);
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->question = $request->question;
        $faq->category = $request->category;
        $faq->answer = $request->answer;

        $faq->save();
        
        return redirect()->route('faqs.index');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index');
    }
}
