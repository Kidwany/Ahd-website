<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Gallery::where('video_url', '!=', null)->get();
        return view('dashboard.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'video_name'        => 'bail|required|max:200',
            'video_url'         => 'bail|url|required|max:300',
        ], [], [
            'video_name'        => 'video name',
            'video_url'         => 'video url',
        ]);

        $video = Gallery::create($input);

        Session::flash('create', 'Video Has Been Created Successfully');
        return redirect(adminUrl('video'));
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
        $video = Gallery::find($id);
        return view('dashboard.video.edit', compact('video'));
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
        $video = Gallery::find($id);
        $input = $request->all();
        $request->validate([
            'video_name'        => 'bail|required|max:200',
            'video_url'         => 'bail|url|required|max:300',
        ], [], [
            'video_name'        => 'video name',
            'video_url'         => 'video url',
        ]);

        $video->update($input);

        Session::flash('create', 'Video Has Been Update Successfully');
        return redirect(adminUrl('video'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Gallery::find($id);

        $video->delete();

        Session::flash('delete', 'Video Has Been Deleted Successfully');
        return redirect(adminUrl('video'));
    }
}
