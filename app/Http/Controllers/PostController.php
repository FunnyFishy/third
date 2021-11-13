<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {   
        $id = 5;
        
        // $post = DB::select('select * from posts where id = 4');
        
        // another way to getting data from table

        // $post = DB::table('posts')
        //     ->where('id',2)
        //     ->get();
        // dd($post);

        //use SELECT()
        // $post = DB::table('posts')
        // ->select('body')
        // ->get();
        
        // dd($post);


        //  $post = DB::table('posts')
        //     ->where('created_at','<',now()->subDay())
        //     ->orWhere('title','Ms.')
        //     ->get();
        // dd($post);

        // use of whereBetween 
        $post = DB::table('posts')
            // ->whereBetween('id',[3,7])
            // ->whereNotNull('created_at')
            
            
            // ->select('title')
            // ->distinct()

            // ->orderBy('title','desc')

            // ->latest()
            // ->oldest()

            // ->inRandomOrder()

            // ->first();

            // ->find($id);
            // ->sum('id');


            // insert values into tables
            ->insert([
                'title' => 'ABC', 'body'=> 'I am good'
            ]);


            //update or edit in the table
            // ->where('id', '=', 3)
            // ->update([
            //     'title' => 'new title','body' => 'new body'
            //     ]);

            //delete row from table
            // ->where('id','=',4)
            // ->delete();
            
            //delete using id;
            //->delete($id);
            
            // ->get();
            // dd($post);

            return view('Pages.home');

    }

}
