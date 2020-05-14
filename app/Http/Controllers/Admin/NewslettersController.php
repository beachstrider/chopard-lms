<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\NewsletterHistory;
use Illuminate\Http\Request;
use DLW\Http\Requests\Admin\CreateNewsletterRequest;
use DLW\Http\Controllers\Controller;
use Newsletter;
use Auth;

class NewslettersController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index()
    {
        $newsletterhistories = NewsletterHistory::all();

        return view('admin.newsletters.index', ['title'=>'Newsletters', 'newsletterhistories'=>$newsletterhistories,]);
    }

    public function create()
    {
        return view('admin.newsletters.create', ['title'=>'New Newsletter']);
    }

    public function store(CreateNewsletterRequest $request)
    {
        $fromName = "Chopard Parfums Training Team";
        $replyTo = "nico@johndoe.es";
        $subject = $request->title;
        $html = $request->content;
        $listName = "";
        $options = [];
        $contentOptions = [];

        $campaign = Newsletter::createCampaign($fromName, $replyTo, $subject, $html, $listName, $options, $contentOptions);

        $api = Newsletter::getApi();
        $send = $api->post("campaigns/".$campaign['id']."/actions/send");

        $newsletterhistory = new NewsletterHistory;

        $newsletterhistory->campaign_id = $campaign['id']; 
        $newsletterhistory->title = $subject;
        $newsletterhistory->author = Auth::guard('admin')->user()->name;

        $newsletterhistory->save();
        return redirect()->route('newsletters.index');
    }

    public function show(Newsletter $newsletter)
    {
        //
    }

    public function edit(Newsletter $newsletter)
    {
        //
    }

    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    public function destroy(NewsletterHistory $newsletter)
    {
        $newsletter->delete();

        return response()->json(['status'=>true, 'message'=>'Newsletter history deleted successfully.']);
    }

    public function deleteMultiple(Request $request){
        $ids = $request->ids;
        Newsletter::whereIn('id', explode(',', $ids))->delete();

        return response()->json(['status'=>true, 'message'=>'Newsletter histories deleted successfully.']);
    }
}
