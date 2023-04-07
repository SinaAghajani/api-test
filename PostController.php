<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Response;
class PostController extends Controller
{
    public function create(Request $request)
    {
     $inputs = $request->only([
        'title',
        'cover',
        'category',
        'author',
        'content',
        'keywords',
        'caption',
        'isCommentOn',
        ]);

        try {
            $post = Post::create($inputs);
            return Response()->json($post, 200);
        } catch (Exception $error){
            return Response()->json($error, 400);
        }
    }

    public function update(Request $request, $id)
    {
        $inputs = $request->only([
            'title',
            'cover',
            'category',
            'author',
            'content',
            'keywords',
            'caption',
            'isCommentOn',
            ]);

        try {
                $post = Post::where(['id'=>$request ['id']])->update($inputs);
                if($post){
                     return Response()->json('The post updated!' , 200);
                }else{
                    return Response()->json(' update is failed!' , 401);
                }
            } catch (Exception $error){
                return Response()->json($error, 400);
            }
    }

    public function delete($id)
    {
        try {
                $status = Post::where(['id' => $id])->delete();
                if($status){
                     return Response()->json('The post deleted!' , 200);
                }else{
                    return Response()->json(' deleting is failed!' , 401);
                }
            } catch (Exception $error){
                return Response()->json($error, 400);
            }
    }

    public function select(Request $request)
    {
        $filters = $request->only([
            'isCommentOn',
            'category',
            'id',
        ]);

        if(count($filters) == 0)
            $posts = Post::all();
        else{
            $posts = Post::where($filters)->get();
        }

        return Response()->json($posts, 200);
    }
}
