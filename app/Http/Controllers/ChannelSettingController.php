<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelSettingController extends Controller
{
    // Get edite channel page
    public function edit(Channel $channel)
    {
        return view('channel.settings.edit')->with(['channel' => $channel]);
    }

    // Update channel information
    public function update(Channel $channel)
    {
        //
        dd($channel);
    }
}
