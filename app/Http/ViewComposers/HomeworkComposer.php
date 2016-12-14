<?php

namespace app\Http\ViewComposers;


use App\FormHomework;
use App\Homework;
use Illuminate\View\View;
/**
 * Class BehaviorComposer
 * @package app\Http\ViewComposers
 */
class HomeworkComposer
{


    public function compose(View $view)
    {
        $fhomeworks = FormHomework::orderBy('start', 'desc')->paginate(2);
        $homeworks = Homework::orderBy('start', 'desc')->paginate(2);
        $view->with(['fhomeworks'=>$fhomeworks , 'homeworks'=>$homeworks]);

    }
}