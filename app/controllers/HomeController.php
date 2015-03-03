<?php

class HomeController extends BaseController {

	public function getIndex()
	{

		//$posts = Post::all()->orderBy('created_at','ASC');

		$posts = Post::orderBy('created_at', 'DESC')->paginate(5);

		return View::make('blog.index',compact('posts'));
	}



	public function getDashboard()
	{
		return View::make('admin.index');
	}



}
