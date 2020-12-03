<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comments;

class PostController extends Controller
{
   public function index(){
     return view('Body.Home');
   } 

   public function Admin(){
     return view('Body.Admin');
   }

   public function addPost(){
       $post = new Post();
       $post->title = "Second Post Title";
       $post->body = "Second Post Description";
       $post->save();
       return "Post has been added succesfully";
   }

   public function addComment($id){
     $post = Post::find($id);
     $comment = new Comments();
     $comment->comment = "This is first comment";
     $post->comments()->save($comment);
     return "Comment has been posted";
   }

   public function getCommentByPost($id){
     $comments = Post::find($id);
     return  $comments;
   }
}
