<?php

namespace App\Http\Controllers;

use App\Models\DiscussionPost;
use Illuminate\Http\Request;

class DiscussionPostController extends Controller
{
    public function index()
    {
        return DiscussionPost::all();
    }

    public function show($id)
    {
        return DiscussionPost::find($id);
    }

    public function store(Request $request)
    {
        return DiscussionPost::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $discussionPost = DiscussionPost::find($id);
        $discussionPost->update($request->all());
        return $discussionPost;
    }

    public function delete($id)
    {
        return DiscussionPost::destroy($id);
    }
}
