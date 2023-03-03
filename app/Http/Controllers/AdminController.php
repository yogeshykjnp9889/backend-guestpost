<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Question;

class AdminController extends Controller
{
    
    public function index(){
        return view('admin/login');
    }

    public function dashboard(){
    	return view('admin/dashboard');
    }

    public function addCategory(Request $request){
    	if($request->has('submit')){
    		$postdata = $request->post();
    		unset($postdata['submit']);
    		unset($postdata['_token']);
    		if(Category::create($postdata)){
    			return redirect()->back()->withSuccess('Add category successfully!!!'); 
    		}
    	}
    	$data = Category::all()->toArray();
    	return view('admin/add-category',["categoryData" => $data]);
    }

    public function deleteCategory($id){
    	if(Category::where('id',$id)->delete()){
    		return redirect()->back()->withError('Category remove'); 
    	}
    }

    public function deletePost($id){
        if(Posts::where('id', $id)->delete()){
            return redirect()->back()->withError('Post remove'); 
        }
    }

    public function addPost(Request $request, $id=null){

        if($request->has('submit')){
            $postdata = $request->post();
            unset($postdata['submit']);
            unset($postdata['_token']);
            if($request->has('post_image')){
                $extension = $request->post_image->getClientOriginalExtension();
                $name = mt_rand(111111, 999999).'.'.$extension;
                $request->post_image->move(public_path().'/post_image/', $name);  
                $postdata['post_image'] = $name;
            }

            if(Posts::create($postdata)){
                return redirect()->back()->withSuccess('Add post successfully!!!'); 
            }
        }

        if($request->has("update")){
            $postdata = $request->post();
            unset($postdata['update']);
            unset($postdata['_token']);
            if($request->has('post_image')){
                $extension = $request->post_image->getClientOriginalExtension();
                $name = mt_rand(111111, 999999).'.'.$extension;
                $request->post_image->move(public_path().'/post_image/', $name);  
                $postdata['post_image'] = $name;
            }
            
            if(Posts::where("id", $id)->update($postdata)){
                return redirect()->back()->withSuccess('Update post successfully!!!'); 
            }
        }

        $postData = array();
        if(!is_null($id)){
            $postData = Posts::where('id', $id)->first()->toArray();
        }

        $category = Category::all()->toArray();
    	return view('admin/add-post',['category' => $category, "postData" => $postData]);
    }

    public function postList(){
        $postData = Posts::all();
    	return view('admin/post-list',['postData' => $postData]);
    }

    public function questionAns(Request $request, $id){
        $quesData = Question::where('post_id', $id)->first();
        if($request->has('submit')){
            $postdata = $request->post();
            unset($postdata['submit']);
            unset($postdata['_token']);
            $postdata['user_id'] = 1;
            $postdata['post_id'] = $id;
            foreach ($postdata['question'] as $key => $value) {
                $questionAns[] = array(
                    'question' => $value,
                    'answer' => $postdata['answer'][$key]
                );
            }
            $questionData = serialize($questionAns);
            $postdata['question_ans'] = $questionData;
            unset($postdata['question']);
            unset($postdata['answer']);
            if($quesData){
                if(Question::where('post_id', $id)->update($postdata)){
                    return redirect()->back()->withSuccess('Update Question answer successfully!!!'); 
                }
            }else{
                if(Question::create($postdata)){
                    return redirect()->back()->withSuccess('Add Question answer successfully!!!'); 
                };
            }
           
        }

        return view('admin/add-question',['question' => $quesData]);
    }


    public function uploadImage(Request $request, $filename)
    {
         
        $validatedData = $request->validate([
         	$filename => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
 
        $name = $request->file($filename)->getClientOriginalName();
 
        $path = $request->file($filename)->store('public/category');

        $save = new Photo;
 
        $save->name = $name;
        $save->path = $path;
        if($save->save()){
        	return $save->name;
        }
 		
    }

    
}
