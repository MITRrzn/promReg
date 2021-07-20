<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('categories')
            ->leftJoin('articles', 'categories.id', '=', 'articles.categories_id')
            ->select(
                'categories.name',
                'articles.id',
                'articles.article_title',
                'articles.article_description',
                'articles.article_image',
            )
//            ->orderByDesc('articles.id')
            ->limit(20)
            ->get();

        return  response()->json($list, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('categories')
            ->leftJoin('articles', 'categories.id', '=', 'articles.categories_id')
            ->select(
                //                'categories.name',
                //                'articles.id',
                'articles.article_title',
                'articles.article_description',
                'articles.article_image',
            )
            ->where('categories.id', '=', $id)
            ->orderByDesc('articles.id')
            ->limit(5)
            ->get();

        return  response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
