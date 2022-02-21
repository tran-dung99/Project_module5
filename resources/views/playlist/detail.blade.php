@extends("layout.home")
@section("homepage")
    <div class="flex pt-12">
        <div>
            <img class="w-[450px] h-[400px] rounded-lg"
                 src="https://znews-photo.zadn.vn/w660/Uploaded/wopthuo/2016_06_09/auroraaksnespress.jpg" alt="">
            <h1 class="text-white text-center py-6">{{$playlist->name}}</h1>
            <input type="hidden" id="dung" value="{{$playlist->id}}">
            @if(\Illuminate\Support\Facades\Auth::user())
            <p class="text-white text-center">Tạo bởi: {{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            @endif
        </div>
        <div class="w-full pl-12">
            <div>
                <div class="border-b border-slate-200 mb-2 pl-12">
                    <div class="flex justify-between items-center mb-2 text-white ">
                        <div>
                            Bài hát
                        </div>
                        <div>
                            Thể loại
                        </div>
                        @if($playlist->id = \Illuminate\Support\Facades\Auth::id())
                        <div>
                            Action
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div id="songOfPlaylist">
                @foreach($songOfPlaylist as $song)
                <div>
                    <div class="border-b border-slate-200 mb-2">
                        <div class="flex justify-between items-center mb-2 ">
                            <div class="">
                                <div class="flex px-4">
                                    <a href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">
                                        <img class="h-12 w-12"
                                             src="{{asset('storage/'.$song->image)}}"
                                             alt="">
                                    </a>
                                    <div class="ml-4">
                                        <p class="text-white">{{$song->name}}</p>
                                        <a class="text-white text-1xl hover:underline hover:text-violet-500"
                                           href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">
                                            {{$song->singer}}</a>
                                    </div>
                                </div>
                            </div>
                            <a class="text-white text-sm hover:text-violet-500 hover:underline"
                               href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">{{$song->category}}</a>
                           @if($playlist->id = \Illuminate\Support\Facades\Auth::id())
                            <div class="text-white text-3xl">
                                <button class="selected-1" data-selected="{{$song->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </div>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-white mb-5">
                {{count($songOfPlaylist)}} bài hát
            </div>
            @if($playlist->id = \Illuminate\Support\Facades\Auth::id())
            <div>
            <div class="text-white text-3xl mb-2">
                Bài hát gợi ý
            </div>
            <div class="text-gray-400 mb-2">
                dựa trên các bài hát trong play list này
            </div>
            <div>
                @foreach($songs as $song)
                <div class="song-{{$song->id}}">
                    <div class="border-b border-slate-200 mb-2">
                        <div class="flex justify-between items-center mb-2 ">
                            <div class="">
                                <div class="flex px-4">
                                    <a href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">
                                        <img class="h-12 w-12"
                                             src="{{asset('storage/'.$song->image)}}"
                                             alt="">
                                    </a>
                                    <div class="ml-4">
                                        <p class="text-white">{{$song->name}}</p>
                                        <p class="text-white text-1xl hover:underline hover:text-violet-500">{{$song->singer}}</p>
                                    </div>
                                </div>
                            </div>
                            <a class="text-white text-sm hover:text-violet-500 hover:underline"
                               href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">{{$song->category}}</a>
                            <button class="text-white text-3xl pr-4 selected" data-selected="{{$song->id}}"   >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>                                </button>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            </div>
            @endif
        </div>
    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $(document).ready(function () {
       $( ".selected" ).each(function(index) {
           $(this).on("click", function(){
                let song_id = $(this).data('selected');
                let playlist_id = $("#dung").val();
                let url = "http://127.0.0.1:8000/detail/" + playlist_id;
                $.ajax({
                    url: "http://127.0.0.1:8000/api/addsong/"+playlist_id+ "/"+ song_id,
                    type: "POST",
                    dataType: "JSON",
                    success: function (res) {
                      location.reload();
                    }
                })
           });
       });

       $( ".selected-1" ).each(function(index) {
           $(this).on("click", function(){
               let song_id = $(this).data('selected');
               let playlist_id = $("#dung").val();
               let url = "http://127.0.0.1:8000/detail/" + playlist_id;
               $.ajax({
                   url: "http://127.0.0.1:8000/api/deletesong/"+playlist_id+ "/"+ song_id,
                   type: "POST",
                   dataType: "JSON",
                   success: function (res) {
                       location.reload();
                   }
               })
           });
       });
   })
</script>
