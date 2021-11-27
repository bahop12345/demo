<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\contact;
use App\Model\Blogs;
use App\Model\banner;

use DB;


/*

 */
class BlogController extends Controller
{
	
	public function blog()
	{	
		$blogs = Blogs::paginate(6);
		$banner = banner::where('position',1)->get();
		return view('frontend.pages.blog',compact('blogs','banner'));
	}
	public function blogDetails($id)
	{	$blogs = Blogs::where('id',$id)->get();
	$banner_4 = Banner::where('position',4)->limit(1)->get();
	$banner = banner::where('position',1)->get();
	$blog = Blogs::find($id)->whereNotIn('id',[$id])->take(3)->get();
	return view('frontend.pages.blogDetails',compact('blogs','banner_4','blog','banner'));
}
public function getcomment()
{	
	return view('frontend.pages.blogDetails');
}
}
?>