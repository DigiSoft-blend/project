<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\com;

class ProductController extends Controller
{

    // public function index(){
    //   $CoverPage = coverpage::all();
    //   $Collections = collections::all();
    //   $CostomerService = costomerservice::all(); // compact('CoverPage','Collections','CostomerService') 
    //     return view('Body.home',compact('CoverPage','Collections','CostomerService') );
    //   } 
   
      // public function Admin(){
      //   $CoverPage = coverpage::all();
      //   $Collections = collections::all();
      //   $CostomerService = costomerservice::all();
      //   return view('Body.Admin', compact('CoverPage','Collections','CostomerService'));
      // }

     public function index(){
       $BlogPost = Post::all();
       return view('Blog.blog',compact('BlogPost'));
     } 
   
    // public function index(){

    //     $BlogEntreis = BlogEntry::all();
    //     $FeaturedPlaces = FeaturedPlaces::all();
    
    //     return view('Body.index',  compact('BlogEntreis','FeaturedPlaces') );
    // }

//     public function AboutMe(){
      
//         $BlogEntreis = BlogEntry::all();
//         $FeaturedPlaces = FeaturedPlaces::all();
    
//       return view('Body.AboutMe', compact('BlogEntreis','FeaturedPlaces') );
//     }

//     public function RenderAdminsView(){
//       return view('Body.Admins-Page');
//     }


public function AddPost(){
        $title = $request->title;
        $body = $request->body;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('collections'), $imageName);

        $post = new Post();
        $post->title = $title;
        $post->body = $body;
        $post->image =  $imageName;
        $post->save();
        
        return back()->with('Record_Added', 'Your Post Has Been Added  Successfully');

}

public function AddComment($id){
$post = Post::find($id);
$comment = new com();
$comment->comment = $request->message;
$post->comments()->save($comment);
return back()->with('Record_Added', 'Your Comment Has Been Added Successfully');

}

public function getCommentByPost($id){
$comments = Post::find($id);
return  $comments;
}

    // public function UpdateCoverPage(Request $request){

    //     $title1 = $request->title1;
    //     $title2 = $request->title2;
    //     $paragraph = $request->paragraph;

    //     $image = $request->file('file1');
    //     $imageName = time().'.'.$image->extension();
    //     $image->move(public_path('coverpage'), $imageName);

    //     $pix = $request->file('file2');
    //     $pixName = time().'.'.$pix->extension();
    //     $pix->move(public_path('mixpix'), $pixName);


    //     $CoverPage = new coverpage();
    //     $CoverPage->title1 = $title1;
    //     $CoverPage->title2 = $title2;
    //     $CoverPage->post_id = 1;
    //     $CoverPage->paragraph = $paragraph;
    //     $CoverPage->image =  $imageName;
    //     $CoverPage->pix =  $pixName;
    //     $CoverPage->save();
        
    //     // $coverImage = $CoverPage->find($CoverPage->id-1);
    //     // unlink(public_path('coverpage').'/'.$coverImage->image);
    //     // $coverImage->delete();
      
      
    //     return back()->with('Record_Added', 'Record has been inserted');
    // }


    //     public function DeletCoverPageImg($id){
    //     $CoverPage = coverpage::find($id);
    //     unlink(public_path('coverpage').'/'.$CoverPage->image);
    //     unlink(public_path('mixpix').'/'.$CoverPage->pix);
    //     $CoverPage->delete();
    //     return back()->with('CoverPageInfo_Deleted',' Entry deleted successfully');
    //   }


    //   public function UpdateCollections(Request $request){
    //     $title = $request->title;
    //     $body = $request->body;
    //     $image = $request->file('file');
    //     $imageName = time().'.'.$image->extension();
    //     $image->move(public_path('collections'), $imageName);

    //     $Collections = new collections();
    //     $Collections->title = $title;
    //     $Collections->post_id = 1;
    //     $Collections->body = $body;
    //     $Collections->image =  $imageName;
    //     $Collections->save();
        
    //     return back()->with('Record_Added', 'Record has been inserted');
    // }

    // public function DeletCollection($id){
    //   $Collections = collections::find($id);
    //   unlink(public_path('collections').'/'.$Collections->image);
    //   $Collections->delete();
    //   return back()->with('CoverPageInfo_Deleted',' Entry deleted successfully');
    // }


  //   public function UpdateCostomerServices(Request $request){
  //     $title = $request->title;
  //     $body = $request->body;
  //     $image = $request->file('file');
  //     $imageName = time().'.'.$image->extension();
  //     $image->move(public_path('costomerservice'), $imageName);

  //     $CostomerService = new costomerservice();
  //     $CostomerService->title = $title;
  //     $CostomerService->post_id = 1;
  //     $CostomerService->body = $body;
  //     $CostomerService->image =  $imageName;
  //     $CostomerService->save();
      
  //     return back()->with('Record_Added', 'Record has been inserted');
  // }

  // public function DeletCostomerServices($id){
  //   $CostomerService = costomerservice::find($id);
  //   unlink(public_path('costomerservice').'/'.$CostomerService->image);
  //   $CostomerService->delete();
  //   return back()->with('CoverPageInfo_Deleted',' Entry deleted successfully');
  // }




//     /**
//      * Handle User Registration
//      * 
//      * @param \illuminate\Http\Request $request 
//      * 
//      * @return Response
//      */
//     public function register(Request $request) {
    
//         $request->validate([
//           'name'=>'required',
//           'email'=>'required',
//           'password'=>'required',
//        ]);
      

//      try {

//         $user = new User();
//         $user->name = $request->get( 'name' );
//         $user->email = $request->get( 'email' );
//         $user->password = Hash::make ( $request->get ( 'password' ) );
//         $user->role = $request->get( 'role' );
//         $user->user_role = "1";
//         $user->save();
//        return "record has been created successfully";
//        }
//         catch (\Exception $e) { // It's actually a QueryException but this works too
//             if ($e->getCode() == 23000) {
//                 // Deal with duplicate key error 
//                 echo "This Student already Exist"; 
//             }
//          }
//     }



// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Handle an authentication attempt
     * 
     * @param \illuminate\Http\Request $request 
     * 
     * @return Response
     */

     public function authenticate(Request $request)
     {  
        
        $role = User::all();

        session( ['email' => $request->email ,'password' => $request->password ] );
       
          if (Auth::attempt( array ('email' =>$request->email,'password' => $request->password ),true)){
            
                foreach($role as $user_role){

                    if($user_role->role=="Admin"){

                    $user = User::all();
                   
                    $data = compact('user');
                     return view('Body.Admin', $data)->with('user_access_granted', 'Access Granted');
                       
                    }else{
                        echo "something just went wrong";
                    }
                }   
           }elseif(Auth::check()){
              $user = User::all();
              $data = compact('user');
               return view('Body.Admin',$data)->with('user_access_granted', 'Access Granted');
            }
        
           else{
             return back()->with('access_denied', 'Login Access Denied !');
           }        
        }



      public function Logout() {
          Auth::logout();
          return redirect('/');
       }





   

    public function ChangePassword(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);


        $user = User::where('email',$request->email)->update([ 'password'=>Hash::make($request->password)]);
        if($user){
            return back()->with('Password_Changed', 'Your password has been changed successfully');
        }else{
          return back()->with('Wrong_Password', 'The Email you entered is incorrect, please enter your email');
        }
    }
}
