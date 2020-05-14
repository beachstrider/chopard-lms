<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Notification;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use DLW\Models\Admin;
use Auth;

class NotificationsController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index($field_name, $direction)
    {
        $notifications = Auth::guard('admin')->user()->notifications()->orderBy($field_name, $direction)->paginate(10);
        $new_direction_user_name = 'desc';
        $new_direction_created_at = 'desc';
        $new_direction = '';

        if($direction == 'desc'){
            $new_direction = 'asc';
        }else{
            $new_direction = 'desc';
        }

        if($field_name == 'user_name'){
            $new_direction_user_name = $new_direction;
        }else if($field_name == 'created_at'){
            $new_direction_created_at = $new_direction;
        }
        
        return view('admin.notifications.index', ['title'=>'Notifications History', 'notifications_history'=>$notifications, 'user_name_direction'=>$new_direction_user_name, 'created_at_direction'=>$new_direction_created_at]);
    }

    public function readAll(){    
        $unread_notifications = Auth::guard('admin')->user()->notifications()->where('read', 0)->get();

        foreach($unread_notifications as $un){
            Auth::guard('admin')->user()->notifications()->updateExistingPivot($un->id, ['read' => 1]);
        }

        return response()->json(['status'=>true]);
    }

    public function newNotification(){
        $new_notifs = Auth::guard('admin')->user()->notifications()->where('read', 0)->orderBy('created_at', 'desc')->get();

        return response()->json(['status'=>true, 'new_notifs'=>$new_notifs]);
    }

    public function clearItemHistory($id){
        Auth::guard('admin')->user()->notifications()->detach($id);
        
        return response()->json(['status'=>true]);
    }

    public function clearAllItemsHistory(){
        Auth::guard('admin')->user()->notifications()->detach();
        
        return response()->json(['status'=>true]);
    }
}
