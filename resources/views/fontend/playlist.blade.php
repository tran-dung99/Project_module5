@extends("layout.home")
@section('homepage')
    <div class="w-full min-h-screen bg-[#170f23]">
        <div class="max-w-screen-xl m-auto ">

            <!--        Danh sách Thể loại-->
            <div>
                <div class="py-16">
                    <p class="text-3xl text-white">Danh sách Playlist</p>
                </div>
            </div>
            <div class="grid grid-cols-4 text-white gap-4 ">
                @foreach($playlists as $playlist)
                <div>
                    <a href="{{route("detailPlaylist",$playlist->id)}}" class="flex items-center justify-center ">
                        <div class="text-white absolute text-center text-2xl font-bold">
                           {{$playlist->name}}
                        </div>
                        <img  class="rounded-lg w-[200px] h-[200px]" src="{{asset('storage/'.$playlist->image)}}" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <div class="fixed w-full h-20 bottom-0 bg-violet-500 z-20">
        <audio src="" class="w-full h-full"></audio>
    </div>
    <div class="sidebar fixed w-[240px] top-0 left-0 min-h-screen bg-[#231b2e]">
        <div class="text-white font-bold text-2xl pl-12 pt-4">ZING MP3</div>
        <div class="pl-12 text-white pt-8 font-bold border-b-2 border-[#393243]">
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">Cá nhân</a>
            </div>
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"/>
                    </svg>
                </div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">Khám phá</a>
            </div>
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">#zing chart</a>
            </div>
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                    </svg>
                    </i></div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">Radio</a>
            </div>
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">Theo dõi</a>
            </div>
        </div>
        <div class="pl-12 text-white pt-8 font-bold border-b-2 border-[#393243]">
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                    </svg>
                    </i></div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">Nhạc mới</a>
            </div>
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 110-2h4a1 1 0 011 1v4a1 1 0 11-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 112 0v1.586l2.293-2.293a1 1 0 011.414 1.414L6.414 15H8a1 1 0 110 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 110-2h1.586l-2.293-2.293a1 1 0 011.414-1.414L15 13.586V12a1 1 0 011-1z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="absolute w-full h-full pl-12 text-sm">Thể loại</div>
            </div>
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    </i></div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">Top 100</a>
            </div>
            <div class="flex gap-4 pb-3">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                    </svg>
                    </i></div>
                <a href="https://www.codeply.com/p/xjn4SoQjD6" class="absolute w-full h-full pl-12 text-sm">MV</a>
            </div>
        </div>

        <div class="pt-4 flex justify-center text-white text-center font-bold text-sm">
            <div class="pl-4 w-5/6 h-24 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg grid items-center">
                <p>nghe nhạc không quảng cáo cùng kho nhạc vip</p>
                <div class="py-1 bg-yellow-500 rounded-lg text-black ">Nâng cấp vip</div>
            </div>
        </div>
        <div class="pl-12 text-white text-xl pt-4">Thư viện</div>
        <div class="pl-12 text-white pt-4 border-b-2 border-[#393243]">
            <div class="flex gap-4 pb-4">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                    </svg>
                    </i></div>
                <div>Bài hát</div>
            </div>
            <div class="flex gap-4 pb-4">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                    </svg>
                </div>
                <div>Play list</div>
            </div>
            <div class="flex gap-4 pb-4">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"/>
                    </svg>
                </div>
                <div>Gần đây</div>
            </div>
        </div>
    </div>
@endsection()
