<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	private $category;

	public function __construct(Category $category)
	{
		$this->middleware('guest');
		$this->category = $category;
	}

	/*
	 * Show the application welcome screen to the user
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function example()
	{
		

		$first_name = "fabrizio";
		$last_name = "silva";
		$categories = $this->category->all();

		return view('example', compact('categories', 'first_name', 'last_name'));

	}

}
