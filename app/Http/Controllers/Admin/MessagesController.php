<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\MessageHistory;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index()
    {
        $messagehistories = MessageHistory::all();

        return view('admin.messages.index', ['title'=>'Messages', 'messagehistories'=>$messagehistories,]);
    }

    public function create()
    {
        return view('admin.messages.create', ['title'=>'New Message']);
    }

    public function store(Request $request)
    {
        
    }

    public function show(MessageHistory $messageHistory)
    {
        
    }

    public function edit(MessageHistory $messageHistory)
    {
        
    }

    public function update(Request $request, MessageHistory $messageHistory)
    {
        
    }

    public function destroy($id)
    {
        $messageHistory = MessageHistory::find($id);
        $messageHistory->delete();

        return response()->json(['status'=>true, 'message'=>'Message history deleted successfully.']);
    }

    public function deleteMultiple(Request $request){
        $ids = $request->ids;
        MessageHistory::whereIn('id', explode(',', $ids))->delete();

        return response()->json(['status'=>true, 'message'=>'Message histories deleted successfully.']);
    }
}
