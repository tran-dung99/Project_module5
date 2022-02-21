<?php

namespace App\Http\Controllers;

use App\Models\PlayList;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayListController extends Controller
{
    public function getAllPlayList()
    {
        $playlists = PlayList::all();
        return view("fontend.playlist",compact("playlists"));
    }
    public function creatPlaylist(Request $request)
    {
        $playlist = new PlayList();
        $playlist->name = $request->name;
        $playlist->user_id = Auth::id();
        if($request->hasFile('fileimage')){
            $file = $request->file('fileimage');
            $path = $file->store('image','public');
            $playlist->image = $path;
        }
        $playlist->save();
        return redirect()->route("profile");
    }

    public function showFormCreate()
    {
        return view("playlist.create");
    }

    public function addSongToPlaylist($playlist_id,$song_id)
    {

        $playlist = PlayList::findOrFail($playlist_id);
        $playlist->songs()->attach($song_id);
        return response()->json("thêm bài hát thành công");
    }

    public function deleteSong($playlist_id,$song_id)
    {
        $playlist = PlayList::findOrFail($playlist_id);
        $playlist->songs()->detach($song_id);
        return response()->json("xóa bài hát thành công");
    }

    public function countSong($id)
    {
        $count = PlayList::findOrFail($id)->songs()->count();
        return response()->json($count);
    }

//    public function ()
//    {
//
//    }
}
