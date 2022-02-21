@extends('layout.home')
@section('homepage')
    <!--        Danh sách bài hát-->
    <div>
        <div class="py-16">
            <p class="text-3xl text-white">Danh sách bài hát</p>
        </div>
        @foreach($songs as $key=>$song)
        <div class="border-b border-slate-200 mb-2">
            <div class="flex justify-between items-center mb-2 ">
                <div class="flex">
                    <div class="text-4xl text-white">
                        {{$key + 1}}
                    </div>
                    <div class="flex px-4">
                        <a href="#">
                            <img class="h-12 w-12"
                                 src="{{asset('storage/'.$song->image)}}"
                                 alt="">
                        </a>
                        <div class="ml-4">
                            <p class="text-white">{{$song->name}}</p>
                            <a class="text-white text-1xl hover:underline hover:text-violet-500"
                               href="https://baocantho.com.vn/image/news/2016/20160613/fckimage/4861497950934_102.jpg">{{$song->singer}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
@endsection
