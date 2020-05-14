<?php

namespace DLW\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $type;
    public $title;
    public $message;
    public $url;
    public $icon;

    public function __construct($data)
    {
        $this->type = $data->type;
        $this->title = $data->title;
        $this->message = $data->message;
        $this->url = $data->url;
        $this->icon = $data->icon;
    }

    public function broadcastOn()
    {
        return ['admin-channel'];
    }

    public function broadcastAs()
    {
        return 'notification-event';
    }
}
