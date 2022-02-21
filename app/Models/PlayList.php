<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    use HasFactory;
    protected $table= "playlist";
    protected $fillable = ["name","image","user_id"];
    public $timestamps = false;

    public function songs()
    {
        return $this->belongsToMany(Song::class,"song_playlist","playlist_id","song_id");
    }
}
