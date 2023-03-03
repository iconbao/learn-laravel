<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * HTTP类型    路由URI             控制器方法    路由命名        描述
     * GET        /blog               index         blog.index     获取数据列表
     * GET        /blog/create        create        blog.create    创建页面（表单页）
     * POST       /blog               store         blog.store     表单处理（增）
     * GET        /blog/{photo}       show          blog.show      获取一条数据
     * GET        /blog/{photo}/edit  edit          blog.edit      修改页面（表单页）
     * PUT/PATCH  /blog/{photo}       update        blog.update    表单处理（改）
     * DELETE     /blog/{photo}       destroy       blog.destroy   删除一条数据
     * */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
