<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Question;

class HomeController extends Controller
{
    //
    public $nameChange = array();
    public $relatedPost = array();
   	public $data = array();
	
	public function __construct(Request $request)
    {
		$this->data['nameChange'] = $this->menuList('name-change');
		$this->data['cancellationPolicy'] = $this->menuList('cancellation-policy');
		$this->data['flightChange'] = $this->menuList('flight-change');
		$this->data['baggagePolicy'] = $this->menuList('baggage-policy');
		$this->data['lostFound'] = $this->menuList('lost-found');
    }

	public function index(){
		$this->data['meta_title'] = "Flying Rules - Airlines Cancellation, Name, & Reservation Policy";
		$this->data['meta_description'] = "Read 100% verified airline policies for refund, ticket cancellation, flight delay, reservation, baggage, seat policy, name change, and other such policies.";
		$this->data['og_image'] = asset('assets/images').'/logo.png';
		$this->data['og_site_name'] = "Flyingrules";
		$this->data['og_url'] = \Request::url();
		$this->data['canonical'] = \Request::url();
		$this->data['robots'] = "index, follow";
		$this->data['related3Post'] = 	$this->relatedPost('name-change');
		$this->data['related3Cancellation'] = 	$this->relatedPost('cancellation-policy');
		return view('home', $this->data);
	}

	public function relatedPost($nameslug){
		$category =  Category::select('id','name','slug')
							   ->where('slug', $nameslug)
							   ->first();
		return Posts::select('id','name','slug','post_image','short_desc')
					->where('cate_id', $category->id)
					->take(6)
					->get();
	}


	public function relatedPage($nameslug){
		$category =  Category::select('id','name','slug')
							   ->where('slug', $nameslug)
							   ->first();
		return Posts::select('id','name','slug','post_image','short_desc')
					 ->where('cate_id', $category->id)
					 ->take(5)
					 ->get();
	}

	public function menuList($nameslug){
		$category =  Category::select('id','name','slug')
								->where('slug', $nameslug)
								->first();

        if(empty($category)){
        	return true;
        }

		$data = Posts::select('slug','name','id')
						->where('cate_id', $category->id)
						->get()
						->toArray();
		if(!empty($data)){
			return $data;
		}
	}

	public function namechangeDetail($postSlug){

		$this->data['relatedPost'] = $this->relatedPage('name-change');
        $this->data['related3Post'] = 	$this->relatedPost('name-change');
		$this->data['postDetail'] = array();
		if(!is_null($postSlug)){
		
			$this->data['postDetail']	= Posts::where('slug', $postSlug)
												->first();
			$this->data['Question'] = Question::where('post_id', $this->data['postDetail']['id'])
												->first();
			if(!$this->data['Question']){	
				$this->data['Question'] = array();
			}
		}else{
			return $this->page404();
		}


		$this->data['meta_title'] = $this->data['postDetail']['meta_title'];
		$this->data['meta_description'] = $this->data['postDetail']['meta_desc'];
		$this->data['og_image'] = asset('post_image').'/'.$this->data['postDetail']['post_image'];
		$this->data['og_site_name'] = "Flyingrules";
		$this->data['og_url'] = \Request::url();
		$this->data['canonical'] = \Request::url();
		$this->data['robots'] = "index, follow";
		return view('post-detail', $this->data);
	}

	public function cancellationPolicy(Request $request, $postSlug){
		$this->data['relatedPost'] = $this->relatedPage('cancellation-policy');
        $this->data['related3Post'] = 	$this->relatedPost('cancellation-policy');
		$this->data['postDetail'] = array();
		if(!is_null($postSlug)){
			$this->data['postDetail']	= Posts::where('slug', $postSlug)
												->first();
			$this->data['Question'] = Question::where('post_id', $this->data['postDetail']['id'])
												->first();
			if(!$this->data['Question']){	
				$this->data['Question'] = array();
			}
		}else{
			return $this->page404();
		}

		$this->data['meta_title'] = $this->data['postDetail']['meta_title'];
		$this->data['meta_description'] = $this->data['postDetail']['meta_desc'];
		$this->data['og_image'] = asset('post_image').'/'.$this->data['postDetail']['post_image'];
		$this->data['og_site_name'] = "Flyingrules";
		$this->data['og_url'] = \Request::url();
		$this->data['canonical'] = \Request::url();
		$this->data['robots'] = "index, follow";
		return view('cancellation-policy', $this->data);
	}

	public function page404(){
		$this->data['meta_title'] = "404 Page";
		$this->data['meta_description'] = "404 Page";
		$this->data['og_image'] = asset('assets/images').'/logo.png';
		$this->data['og_site_name'] = "Flyingrules";
		$this->data['og_url'] = \Request::url();
		$this->data['canonical'] = \Request::url();
		$this->data['robots'] = "noindex, nofollow";
		$this->data['related3Post'] = 	$this->relatedPost('name-change');
		return view('404-page', $this->data);
	}

	public function namechangeList(){
		$this->data['meta_title'] = "404 Page";
		$this->data['meta_description'] = "404 Page";
		$this->data['og_image'] = asset('assets/images').'/logo.png';
		$this->data['og_site_name'] = "Flyingrules";
		$this->data['og_url'] = \Request::url();
		$this->data['canonical'] = \Request::url();
		$this->data['robots'] = "noindex, nofollow";
		$this->data['related3Post'] = 	$this->relatedPost('name-change');
		return view('name-change', $this->data);
	}



}