<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image as Image;
use App\Game as Game;

class ImageController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }

    public function index()
    {
        
    	$images = Image::all();
    	return view('pages.upload', compact('images'));
    }

    public function store()
    {
    	$path = 'img/models';
    	if (is_dir($path))
    	{
    	//	return redirect()->back()->with('success', 'Images directory ' . $path . ' was successfully found.');
    		$handle = opendir($path);
    		while(($file = readdir($handle)) !== false)
    		{
    			if($file != '.' && $file != '..' && $file != '.DS_Store')
    			{
    				$extension = pathinfo($file, PATHINFO_EXTENSION);
    				$options = ['jpg', 'png', 'JPG', 'PNG'];

    				if(in_array($extension, $options)) {
    					$title = str_slug(basename($file,".".$extension));
    					$filename = $file;

    					$image = Image::where('filename', '=', $filename)->get();

    					if (count($image) == 0)
    					{
    						Image::create([
    							'title' => $title,
    							'filename' => $filename,
    							]);
    					}
    					else
    					{
    			
    					//	return redirect()->back()->with('error', $image->first()->filename .'already exists in the database, consider changing the image.');
    					
    						continue;
    					}
    				}
    			}

    		}
    		closedir($handle);
    		return redirect()->back()->with('success', 'All images were successfully loaded.');
    	}
    	else
    	{
    		return redirect()->back()->with('error', 'Images directory '. $path . ' not found.');
    	}
    }

    public function stats()
    {
        $images = Image::all();
        return view('pages.stats', compact('images'));
    }
}
