<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
	 * [about description]
	 * @return [type] [description]
	 */
    public function about()
    {
    	return view ('pages.about');
    }

    /**
	 * [about description]
	 * @return [type] [description]
	 */
    public function press()
    {
    	return view ('pages.press');
    }

    /**
	 * [about description]
	 * @return [type] [description]
	 */
    public function faq()
    {
    	return view ('pages.faq');
    }
    
    /**
	 * [about description]
	 * @return [type] [description]
	 */
    public function livraison()
    {
    	return view ('pages.livraison');
    }

}
