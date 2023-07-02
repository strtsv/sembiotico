<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use ied3vil\LanguageSwitcher\Facades\LanguageSwitcher as Switcher;

class TranslationsController extends Controller
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function setLanguageToSpanish()
	{
		//$people = ['SPA!!', 'Jesus', 'Jayson', 'Eliud'];
		//return view('about', compact('people'));
		LanguageSwitcher::setLanguage('es');
	}
	
	public function setLanguageToEnglish()
	{
		LanguageSwitcher::setLanguage('en');
		//$people = ['ENG!!', 'Jesus', 'Jayson', 'Eliud'];
		//return view('about', compact('people'));
	}
	
	/**
	 * Set the language and redirect
	 * @param $language
	 * @return mixed
	 */
	public function setLanguage($language)
	{
		if (Switcher::getRedirect() == 'route') {
			return redirect(Switcher::getRedirectRoute())->withCookie(Switcher::setLanguage($language));
		}
		return back()->withCookie(Switcher::setLanguage($language));
	}
}
