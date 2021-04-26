<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class changeLanguageController extends Controller
{
    public function changeLanguage(Request $request, $language)
	{
    	if($language){;
    		Session::put('language', $language);
    	}

		return redirect()->back();
	}
}
