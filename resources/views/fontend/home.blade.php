@extends('layout.home')
@section('divmax')
    <div class="cart grid grid-cols-5 text-white mt-12 gap-4 text-center">
        @foreach(\App\Models\PlayList::all() as $playlist)
            <a href="{{route("detailPlaylist",$playlist->id)}}">
                <div class="rounded-lg  bg-[#170f23]"><img class="rounded-lg w-[200px] h-[200px]"
                                                           src="{{asset('storage/'.$playlist->image)}}"
                                                           alt="">
                    <p class="pt-4">{{$playlist->name}}</p>
                </div>
            </a>

        @endforeach
    </div>
    <div class="text-white text-4xl py-12">
        Nhạc mới phát hành
    </div>
    @foreach(\App\Models\Song::all() as $song)
        <table class="mb-10 hover:bg-slate-300">
            <tr>
                <td class="w-[600px] mb-8"><div class="">
                        <div class="flex">
                            <a href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">
                                <img class="h-12 w-12"
                                     src="{{asset('storage/'.$song->image)}}"
                                     alt="">
                            </a>
                            <div class="ml-4">
                                <p class="text-white">{{$song->name}}</p>
                                <a class="text-white text-1xl hover:underline hover:text-violet-500"
                                   href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">{{$song->singer->name}}</a>
                            </div>
                        </div>
                    </div></td>
                <td>
                    <div class="bg-white rounded-lg">
                        <audio controls class="w-[400px] mb-8">
                            <source class="bg-red-500"
                                    src="{{asset('storage/'.$song->link)}}"
                                    type="audio/ogg">
                            <source
                                src="{{asset('storage/'.$song->link)}}"
                                type="audio/mpeg">
                            Your browser does not support the audio tag.
                        </audio>
                    </div>
                </td>
            </tr>
        </table>
    @endforeach
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
