<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ImageWasUploaded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $original_filename;

    public $server_filename;

    public function __construct($original_filename, $server_filename)
    {
        $this->original_filename = $original_filename;
        $this->server_filename = $server_filename;
    }
}
