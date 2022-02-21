<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = "songs";
    protected $fillable = ["name","link","category","user_id","singer_id"];
    public $timestamps = false;
   public function playlists() {
       return $this->belongsToMany(PlayList::class,"song_playlist","song_id","playlist_id");
   }

    public function singer()
    {
        return $this->belongsTo(Singer::class);
   }

}
