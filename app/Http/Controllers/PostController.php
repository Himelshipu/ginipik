<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
  public function index(){

     /* $posts = DB::table('posts')
          ->where([
             [ 'created_at', '<', now()],
              ['user_id','=','149']
          ])
          ->get();*/

      /*$posts = Post::where('column1', '=', value1)
          ->where(function($query) use ($variable1,$variable2){
              $query->where('column2','=',$variable1)
                  ->orWhere('column3','=',$variable2);
          })
          ->where(function($query2) use ($variable1,$variable2){
              $query2->where('column4','=',$variable1)
                  ->where('column5','=',$variable2);
          })
          ->get();*/

      /*$posts = DB::table('posts')->where('user_id', '149')->value('body');
      $posts = DB::table('posts')->where('user_id', '149')->value('body');*/
//      $posts = DB::table('posts')->find(2);

     /* $posts = DB::table('posts')->pluck('title');
      foreach ($posts as $title) {
          echo $title.'<br>';
      }*/

      /*$posts = DB::table('posts')->pluck('user_id','id');
      foreach ($posts as $id=>$title){
          echo $title;
      }*/

      /*DB::table('posts')->orderBy('id')->chunk(2, function ($posts) {
          foreach ($posts as $post) {
             echo 'a <br>';
          }
      });*/


     $posts = Post::has('user.address','>=',1)->with('user','user.address')->get();
      return view('post.index',compact('posts'));
  }
}
