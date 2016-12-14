<?php

namespace App\Http\ViewComposers;

use App\Kid;

use Illuminate\View\View;


class KidComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $kids = Kid::orderBy('birthday', 'asc')->get();
        $view->with('kids', $kids);
    }
}