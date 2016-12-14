<?php

namespace app\Http\ViewComposers;

use App\Behavior;
use Illuminate\View\View;
/**
 * Class BehaviorComposer
 * @package app\Http\ViewComposers
 */
class BehaviorComposer
{

    public function compose(View $view)
    {
        $behaviors = Behavior::orderBy('id', 'desc')->paginate(5);
        $behaviors->load("kids");
        $view->with('behaviors',$behaviors);

    }
}