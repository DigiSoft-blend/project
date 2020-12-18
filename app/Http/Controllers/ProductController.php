<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use App\Post;
use App\com;
use App\MyUser;
use App\like;
use Hash;

class ProductController extends Controller
{

     public function index(){
      $user = User::orderBy('id','DESC')->get();
      return view('Blog.index',compact('user'));
     } 

    

     
     public function AddUser(Request $request){

      $name = $request->name;
      $email = $request->email;
      $password = $request->password;
      $image = $request->file('file');
      $imageName = time().'.'.$image->extension();
      $image->move(public_path('profileimg'), $imageName);
      
      try {
      $user = new User();
      $user->name = $name;
      $user->email = $email;
      $user->password = Hash::make($password);
      $user->profileimage =  $imageName;
      $user->role = "user";
      $user->save();
      
      return back()->with('User_Added', 'Your Account Has Been Created Successfully');

       } catch (\Exception $e) { // It's actually a QueryException but this works too
            if ($e->getCode() == 23000) {
                // Deal with duplicate key error 
                return back()->with('User_Exist', 'Ooops! This User already exist');
            }
       }
     }      

   
public function AddPost(Request $request){

  $image = $request->file('file');
  $imageName = $image->getClientOriginalName();
  $image->move(public_path('postimg'), $imageName);
   
  $user = Auth::User();
  $id = $user->id;
  $user = User::find($id);
  $post = new Post();

  $post->title =  $request->title;
  $post->body = $request->body;
  $post->image =  $imageName;
  $user->post()->save($post);
  
  return response()->json($post);
 
}


public function AddComment(Request $request, $id){
$post = Post::find($id);
$comment = new com();
$comment->comment = $request->message;
$User = Auth::User();
$user_id = $User->id;
$user_name = $User->name;
$user_email = $User->email;
$user_profileimage = $User->profileimage;
$comment->user_id = $user_id; 
$comment->user_name = $user_name;
$comment->user_email = $user_email;
$comment->user_profileimage = $user_profileimage;
$post->comments()->save($comment);
return response()->json($comment);
 //return back()->with('Comment_Added', 'Your Comment Has Been Added');
}

public function getCommentByPost($id){
  $Post = Post::find($id);
  $user_id = $Post->user_id;
  $user = User::find($user_id);
  return view('Blog.getcomment' ,compact('Post','user'));
  //dd($User);
}

public function show(User $user){
  $comment = $user->usercomments()->get();
  dd($comment);
}



//Auth User view all his post and comments
public function getPostByUser(){
  $User = Auth::User();
  $id = $User->id;
  $user = User::find($id);
  $Post = $user->post;
  return view('Blog.viewuserpost' ,compact('Post','user'));
  }

  public function UserPost($id){
    $Post = Post::find($id);
    $Auth_user = Auth::User();
    $user_id = $Auth_user->id;
    $user = User::find($user_id);
    return view('Blog.userpost' ,compact('Post','user'));
  }

public function SignIn(){
  return view('Blog.signin');
}  

public function SignUp(){
  return view('Blog.signup');
  echo "hey";
}

public function Continue_reading($id){
  $Post = Post::find($id);
  $user_id = $Post->user_id;
  $user = User::find($user_id);
  return view('Blog.continue-reading-post' ,compact('Post','user'));
}


public function DeletPost($id){
    $Post = Post::find($id);
    unlink(public_path('postimg').'/'.$Post->image);
    $Post->delete();
    return response()->json($Post);
    //return back()->with('Post_Deleted',' Your deleted a post');
}

public function DeletUser($id){
  $user = User::find($id); 
  unlink(public_path('profileimage').'/'.$Post->image);
  $user->delete();
  return back()->with('User_Deleted',' Entry deleted successfully');
}

public function DeletComment($id){
  $comment = com::find($id); 
  $comment->delete();
  return back()->with('Comment_Deleted',' Comment deleted');
}

public function EditComment($id){
  $comment = com::find($id);
  $Post = $comment->post;
  return view('Blog.Edit-comment' ,compact('comment','Post'));
}

public function EditPost($id){
  $Post = Post::find($id);
  $user_id = $Post->user_id;
  $user = User::find($user_id);
  return view('Blog.editpost' ,compact('Post','user'));
}

public function UpdatePost(Request $request, $id){
  $image = $request->file('file');
  $imageName = time().'.'.$image->extension();
  $image->move(public_path('postimg'), $imageName);

  
  $post = Post::find($id);
  $post->title =  $request->title;
  $post->body = $request->body;
  $post->image =  $imageName;
  $post->save();
  
  return back()->with('Post_Added', 'Your Post Has Been Edited');
}


public function UpdateComment(Request $request, $id){
  
  $comment = com::find($id);
  $comment->comment = $request->message;
  $post_id = $comment->post_id;
  $comment->save();
  return response()->json($comment);
  //return redirect('getuserpostcomment')->with('Comment_Edited', 'Your Comment Has Been Edited');
}

public function EditUser(){
  $Auth_user = Auth::User();
  $id = $Auth_user->id;
  $user = User::find($id);
  return view('Blog.edit-user-profile', compact('user'));
}

public function UpdateUser(Request $request ,$id){
  $user = User::find($id);

      $name = $request->name;
      $email = $request->email;
      $password = $request->password;
      $image = $request->file('file');
      $imageName = time().'.'.$image->extension();
      $image->move(public_path('profileimg'), $imageName);
      
      try {
      $user->name = $name;
      $user->email = $email;
      $user->password = Hash::make($password);
      $user->profileimage =  $imageName;
      $user->role = "user";
      $user->save();
      
      return back()->with('User_Updated', 'Your Account Has Been Updated Successfully');

       } catch (\Exception $e) { // It's actually a QueryException but this works too
            if ($e->getCode() == 23000) {
                // Deal with duplicate key error 
                return back()->with('User_Exist', 'Ooops! This User already exist');
            }
       }
}


public function AddLike($id){
  $post = Post::find($id);
  $like = new like();
  $like->user_id = $user_id;
  $like->tab = 1;
  $post->likes()->save($like);
  return back()->with('Like_Added', 'Liked');
  }


 

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
        
      $userpost = User::all();
 
        session( ['email' => $request->email ,'password' => $request->password ] );
          
          if (Auth::attempt( array ('email' =>$request->email,'password' => $request->password ))){
              $email = Auth::User();
              $email = $email->email;
              $user = User::where('email', '=', $email )->get();
              return view('Blog.blog',compact('userpost','user'));
           }
           elseif(Auth::check()){
            $email = Auth::User();
            $email = $email->email;
            $user = User::where('email', '=', $email )->get();
            return view('Blog.blog',compact('userpost','user'));
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
