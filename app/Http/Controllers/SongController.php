<?php

namespace App\Http\Controllers;

use App\Models\PlayList;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class SongController extends Controller
{
    public function getAllSinger()
    {
        $singers = Singer::all();
        return view("home.songlist",compact("singers"));
    }

    public function getAllSong()
    {
        $songs = DB::table('songs')->select(
            'songs.name',
            'songs.link',
            'songs.image',
            'singer.name AS singer',
            )
                ->join('singer', 'singer.id', '=', 'songs.singer_id')->get();
        return view("fontend.songList",compact("songs"));
    }

    public function uploadSong(Request $request)
    {
        $song = new Song();
        $song->name = $request->nameSong;
        $song->category = $request->category;
        $song->singer_id = $request->singer;
        $song->user_id = 1;
        $song->create_at = date('Y-m-d H:i:s');
        if($request->hasFile('file')){
            $file = $request->file('file');
            $path = $file->store('songs','public');
            $song->link = $path;
        }
        if($request->hasFile('imageFile')){
            $file = $request->file('imageFile');
            $path = $file->store('image','public');
            $song->image = $path;
        }
        $song->save();
    }

    public function showAllSong($id)
    {
        $playlist = PlayList::findOrFail($id);
        $songOfPlaylist = DB::table('songs')->select(
            'songs.id',
            'songs.category',
            'songs.name',
            'songs.link',
            'songs.image',
            'singer.name AS singer',
        )
            ->join('song_playlist', 'song_playlist.song_id', '=', 'songs.id')
            ->join('singer', 'singer.id', '=', 'songs.singer_id')->where("song_playlist.playlist_id","=",$id)->get();
       $arr = [];
       foreach ($songOfPlaylist as $song){
           $arr[] = $song->id;
       }
        $songs = DB::table('songs')->select(
            'songs.id',
           'songs.category',
            'songs.name',
            'songs.link',
            'songs.image',
            'singer.name AS singer',
        )
            ->join('singer', 'singer.id', '=', 'songs.singer_id')->whereNotIn('songs.id',$arr)->get();

        return view("playlist.detail",compact("songs","playlist","songOfPlaylist"));
    }

    public function dataSong()
    {
        $songs = DB::table('songs')->select(
            'songs.id',
            'songs.category',
            'songs.name',
            'songs.link',
            'songs.image',
            'singer.name AS singer',
        )
            ->join('singer', 'singer.id', '=', 'songs.singer_id')->get(5);

        $data= [];

        foreach ($songs as $key=>$value){

            $data[$key]["name"] = $value->name;
            $data[$key]["artist"] = $value->singer;
            $data[$key]["image"] = $value->image;
            $data[$key]["path"] = $value->link;

        }
        $arr = json_encode($data);
        return view("fontend.home",compact("songs","arr"));
    }
}
