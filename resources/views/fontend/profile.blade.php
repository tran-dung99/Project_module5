@extends("layout.home")
@section("homepage")
    <div class="py-10 grid justify-items-center">
        <img class="rounded-full h-32 w-32"
             src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
             alt="">
        <div class="text-white pt-10 text-4xl font-bold">{{$user->name}} <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="material-icons">&#xe22b;</i>
            </button> </div>
    </div>
    <div class="grid justify-items-center">
        <div class="mb-4  dark:border-gray-700">

            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">Playlist
                    </button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 active"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="true">Bài hát
                    </button>
                </li>

                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300"
                        id="infomation-tab" data-tabs-target="#infomation" type="button" role="tab"
                        aria-controls="infomation" aria-selected="false">Thông tin
                    </button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="p-4 " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class=" flex text-white gap-96 py-7">
                    <div>Bài hát</div>
                    <div class="ml-40">Thời lượng</div>
                </div>
                @foreach(\App\Models\Song::all() as $song)
                <div class="gap-96 py-4">
                    <div class="flex justify-between text-white gap-96 items-center">
                        <div>{{$song->name}}</div>
                        <div class="bg-white rounded-lg ">
                            <audio controls class="">
                                <source class="bg-red-500"
                                        src="{{asset('storage/'.$song->link)}}"
                                        type="audio/ogg">
                                <source
                                    src="{{asset('storage/'.$song->link)}}"
                                    type="audio/mpeg">
                                Your browser does not support the audio tag.
                            </audio>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="hidden p-4 " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <div class="grid grid-cols-4 text-white gap-4">
                    <div class="w-[200px] h-[200px] " id="open-btn">
                        <div href="https://zingmp3.vn/hub" class="grid justify-items-center" >
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1" style="background-color: #170f23;border-color: #170f23 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                            <p class="text-white text-center">Add new Playlist</p>
                        </div>
                    </div>
                    @foreach($playlists as $playlist)
                    <div class="w-[200px] h-[200px]" style="margin-bottom: 10px">
                        <a href="{{route("detailPlaylist",$playlist->id)}}" class="grid">
                            <img class="rounded-lg w-[200px] h-[200px]"
                                 src="{{asset('storage/'.$playlist->image)}}"
                                 alt="">
                            <p class="text-center">{{$playlist->name}}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="hidden p-4 " id="infomation" role="tabpanel" aria-labelledby="infomation-tab">
                <div class=" flex text-white gap-96 py-7">
                    <div>Họ và tên</div>
                    <div>{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                </div>
                    <div class="gap-96 py-4">
                        <div class="flex justify-between text-white gap-96">
                            <div>Email</div>
                            <div>{{\Illuminate\Support\Facades\Auth::user()->email}}</div>

                        </div>
                    </div>

            </div>
            @endsection
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Thông tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route("user.update")}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Họ và Tên </label>
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Nguyễn Văn A" value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu </label>
                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp" value="{{$user->password}}">
                                </div>
                                <div style="margin-bottom: 20px">
                                    <input type="file" name="imageUser">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Playlist</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route("createPlaylist")}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="namePlaylist">Tên Playlist</label>
                                    <input type="text" class="form-control" id="namePlaylist" name="name" aria-describedby="emailHelp" placeholder="Enter name playlist">
                                </div>
                                <input type="file" name="fileimage">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

