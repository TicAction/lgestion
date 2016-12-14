<?php

namespace App\Http\ViewComposers;

use App\Observation;
use Illuminate\View\View;

class ObservationComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $obs = Observation::orderBy('ob_date','desc')->paginate(5);
        $obs->load('kid');
        $view->with('obs', $obs);
    }
}