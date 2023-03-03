<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;
class Apicontroller extends Controller
{
    public function getPost(){
        $post =  Posts::select("id","cate_id", "user_id","name",'slug','meta_title','meta_desc','post_image','created_at')->latest()->take(4)->get();
        foreach($post  as $key => $item){
            $post[$key]['post_image'] = asset('post_image/'.$item->post_image);
        }
        return $post;
    }

    public function getCategory(){
        $post =  Category::all();
        return $post;
    }
    
    public function categoryDetail($slug=null){
        Route::get($uri, $callback);
        $post =  Category::all();
        return $post;
    }
    
    public function categoryWishPost($cateSlug=null){
       
        if( $cateid =  Category::where('slug',$cateSlug)->first()){
            $post = Posts::where('cate_id', $cateid->id)->paginate(2);
            return $post;
        }
        return ['code'=>0, 'msg' => 'Data not found'];
        
    }

    public function PostDetail(Request $request){
        if($request->slug!=""){
            $post =  Posts::where('slug', $request->slug)->first();
            // foreach($post  as $key => $item){
            $post->post_image = asset('post_image/'.$post->post_image);
            // }
            return $post;
        }
        return "Required post slug";
    } 
}
