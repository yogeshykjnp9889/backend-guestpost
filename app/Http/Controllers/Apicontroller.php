<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use Validator;
use Illuminate\Support\Facades\Auth;
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

    public function userRegister(Request $request){
        $postdata = $request->all();
        $validated = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email'=>  'required|email|unique:users',
            'password'=>'required',
            'cpassword'=>'required|same:password',
            'mobile' => 'required'
        ]);
        if($validated->fails()){
            $errors = $validated->errors(); 
            // $error = [];
            // foreach ($validated->errors() as $key => $message) {
            //     $error[] = $message;
            // }
            // print_r($validated->errors());
            return response()->json(
                ['status' => '0',
                 'data' => $errors->all()
                ]
            ,200);
        }
        $postdata['password'] = Hash::make($postdata['password']);

        if($result = User::create($postdata)){
            return response()->json(['status' => '1','data'=> $result], 200);
        }

        return response()->json(['Error'=>'Hello']);
    }

    public function userLogin(Request $request){
        $validated = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validated->fails()){
            $errors = $validated->errors();
            return response()->json(
                ['status' => '0',
                'msg' => 'Form Error',
                 'data' => $errors->all()
                ]
            ,200);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])){ 
            $user = Auth::user(); 
            $token =  $user->createToken('Guestpost')->plainTextToken; 
            // $success['userId'] = $user->id;
            return response()->json(['status' => '1', 'token' => $token, 'data' => $user], 200); 
        } 
        else{ 
            return response()->json(['status'=> '0', 'message' => 'User and Password Wrong!'], 200); 
        } 

    }




}
