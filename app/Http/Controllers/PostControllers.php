<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use Illuminate\Http\Request;

class PostControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts =Post::all();
        return    view('index' , compact('posts'));
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { // صفحة create
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $title = $request->title ;      
        $content = $request->content;      
        $category_id = 2;      


      return view('posts/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post,$titles)
    { 
        $posts_1 =  [$titles]; 
   
        return  view('posts/show',compact('posts_1')); 
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post , $titles)
    {
         return "show me the  update single by id: {$titles}" ;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post ,$titles)
    {
        return "update single by id {$titles}" ;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post ,$titles)
    {
        //
        return "remove single by id : {$titles}" ;

    }
}
