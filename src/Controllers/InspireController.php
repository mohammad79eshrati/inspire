<?php

namespace Mohammad79eshrati\Inspire\Controllers;

use Mohammad79eshrati\Inspire\Inspire;

class InspireController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }

}
