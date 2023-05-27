<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Auth;

class NavigationComposer {

    public function compose(View $view){
        if(!Auth::check()){
            return;
        }

        return $view->with('channel', Auth::user()->channel->first());

    }
}