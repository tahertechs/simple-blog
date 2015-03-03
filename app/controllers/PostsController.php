<?php

class PostsController extends BaseController {

	public function getSingle($id)
	{
		$post = Post::find($id);

		if($post){
			return View::make('blog.show',compact('post'));			
		}

		return Redirect::to('/');

	}



	public function storePost()
	{
		Post::create([

			'title' => Input::get('title'),
			'content' =>Input::get('description')
		]);

		return Redirect::to('/')->with('message','Post succesifully created...');

	}



}
