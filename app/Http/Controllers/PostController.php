<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
		public function post(){
			$posts = Post::all();
			$text = [];
			$i = 0;
			foreach ($posts as $post):
				
				$text[$i] = $post->title."\n".$post->text;
				++$i;
				
			endforeach	;
			
			$textpost = $text;
			//
			return  view('pages.post', compact('textpost') );
		}
}
