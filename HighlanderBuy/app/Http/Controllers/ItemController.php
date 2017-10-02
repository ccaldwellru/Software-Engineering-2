<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
	//The item function that retruns the item view from the item.blade.php
	public function index()
	{
		return view('items.showall');
	}
	//The createitem function that retruns the createitem view from the create-item.blade.php
	public function create()
	{
		return view('items.create');
	}

	public function store()
	{
		$post = new Item;
		$post->description = request('desc');
		$post->price = request('price');
		$post->category = request('category');
		$post->item_photo = request('image');
		$post->save();
		return redirect('/items/showall');
	}
}
