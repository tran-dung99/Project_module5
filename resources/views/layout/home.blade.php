<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/your-embed-code.js"></script>
    <!-- TODO: Place your Font Awesome embed code  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css"/>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        image{
            display: block;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="w-full min-h-screen bg-[#170f23]">
    <div class="max-w-screen-xl m-auto ">
        <div class="header h-20 pt-4 flex justify-between px-12 items-center">
            <form action="" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 absolute text-white pl-2 " fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input class="h-10 w-[400px] bg-white rounded-full bg-[#2f2739] text-center" type="text" name="" id=""
                       placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV…">
            </form>
            @if(!\Illuminate\Support\Facades\Auth::user())
                <div class="flex gap-4">
                    <div>
                        <a href="{{route('showFormLogin')}}" class="px-16 py-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg">Đăng nhập</a>
                    </div>
                    <div>
                        <a  href="{{route("user.showFormRegister")}}"  class="px-16 py-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg">Đăng ký</a>
                    </div>
                </div>
            @else()
                <button id="dropdownButton" data-dropdown-toggle="dropdown">
                    <img class="rounded-full h-12 w-12" src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}" alt="">
                </button>
                <div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1" aria-labelledby="dropdownButton">
                        <li>
                            <a href="{{route("user.showFormRegister")}}" class="block py-2 px-4 text-sm text-black hover:bg-gray-100 ">Đăng ký</a>
                        </li>
                        <li>
                            <a href="{{route("logout")}}" class="block py-2 px-4 text-sm text-black hover:bg-gray-100  ">Đăng xuất</a>

                        </li>
                    </ul>
                </div>
            @endif
        </div>
        @yield('divmax')
        @yield('homepage')

    </div>
</div>
</div>
</div>
{{--<div class="fixed w-full h-20 bottom-0 bg-violet-500 z-20">--}}
{{--    <audio src="" class="w-full h-full"></audio>--}}
{{--</div>--}}
<div class="sidebar fixed w-[240px] top-0 left-0 min-h-screen bg-[#231b2e]">
   <a href="{{route("homepage")}}"> <div class="text-white font-bold text-2xl pl-12 pt-4">ZING MP3</div></a>
    <div class="pl-12 text-white pt-8 font-bold border-b-2 border-[#393243]">
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            @if(\Illuminate\Support\Facades\Auth::user())
            <a href="{{route("profile")}}" class="absolute  pl-12 text-sm">Cá nhân</a>
                @else()
                <a href="{{route("showFormLogin")}}" class="absolute  pl-12 text-sm">Cá nhân</a>
            @endif
        </div>
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"/>
                </svg>
            </div>
            <a href="google.com" class="absolute  pl-12 text-sm">Khám phá</a>
        </div>
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
            <a href="" class="absolute pl-12 text-sm">#zing chart</a>
        </div>
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                </svg>
                </i></div>
            <a href="" class="absolute pl-12 text-sm">Radio</a>
        </div>
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
            <a href="" class="absolute pl-12 text-sm">Theo dõi</a>
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
            <a href="" class="absolute  pl-12 text-sm">Nhạc mới</a>
        </div>
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 110-2h4a1 1 0 011 1v4a1 1 0 11-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 112 0v1.586l2.293-2.293a1 1 0 011.414 1.414L6.414 15H8a1 1 0 110 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 110-2h1.586l-2.293-2.293a1 1 0 011.414-1.414L15 13.586V12a1 1 0 011-1z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
            <a href="" class="absolute  pl-12 text-sm">Thể loại</a>
        </div>
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                </svg>
                </i></div>
            <a href="" class="absolute  pl-12 text-sm">Top 100</a>
        </div>
        <div class="flex gap-4 pb-3">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                </svg>
                </i></div>
            <a href="" class="absolute  pl-12 text-sm">MV</a>
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
            <a href="{{route("playlist")}}">Playlist</a>
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
<div class="fixed w-full h-20 bottom-0 bg-[#120c1c] z-20">
    <div class="player flex items-center justify-between m-auto text-white">
        <!-- Define the section for displaying details -->
        <div class="details">
            <div class="now-playing">PLAYING x OF y</div>
            <div class="track-art"></div>
            <div class="track-name">Track Name</div>
            <div class="track-artist">Track Artist</div>
        </div>
        <!-- Define the section for displaying track buttons -->
        <div class="text-white">
            <div class="buttons flex justify-center items-center">
                <div class="prev-track" onclick="prevTrack()">
                    <i class="fa fa-step-backward"></i>
                </div>
                <div class="playpause-track px-5" onclick="playpauseTrack()">
                    <i class="fa fa-play-circle fa-2x"></i>
                </div>
                <div class="next-track" onclick="nextTrack()">
                    <i class="fa fa-step-forward"></i>
                </div>
            </div>
            <div class="slider_container flex items-center">
                <div class="current-time pr-2">00:00</div>
                <input type="range" min="1" max="100"
                       value="0" class="seek_slider h-[2px] w-[500px]" onchange="seekTo()">
                <div class="total-duration pl-2">00:00</div>
            </div>
        </div>

        <!-- Define the section for displaying the seek slider-->

        <!-- Define the section for displaying the volume slider-->
        <div class="slider_container pr-4">
            <i class="fa fa-volume-down"></i>
            <input type="range" min="1" max="100"
                   value="99" class="volume_slider" onchange="setVolume()">
            <i class="fa fa-volume-up"></i>
        </div>
    </div>
</div>
<script>
    let now_playing = document.querySelector(".now-playing");
    let track_art = document.querySelector(".track-art");
    let track_name = document.querySelector(".track-name");
    let track_artist = document.querySelector(".track-artist");

    let playpause_btn = document.querySelector(".playpause-track");
    let next_btn = document.querySelector(".next-track");
    let prev_btn = document.querySelector(".prev-track");

    let seek_slider = document.querySelector(".seek_slider");
    let volume_slider = document.querySelector(".volume_slider");
    let curr_time = document.querySelector(".current-time");
    let total_duration = document.querySelector(".total-duration");

    // Specify globally used values
    let track_index = 0;
    let isPlaying = false;
    let updateTimer;

    // Create the audio element for the player
    let curr_track = document.createElement('audio');

    // Define the list of tracks that have to be played
    let track_list = [{
        name: "Night Owl",
        artist: "Broke For Free",
        image: "Image URL",
        path: "https://firebasestorage.googleapis.com/v0/b/testtt-c2186.appspot.com/o/ChoEm-MrSiro-3254801.mp3?alt=media&token=82982645-3a64-4caa-82a3-3399c7135c4c"
    }, {
        name: "Enthusiast",
        artist: "Tours",
        image: "Image URL",
        path: "https://firebasestorage.googleapis.com/v0/b/testtt-c2186.appspot.com/o/HayTraoChoAnh-SonTungMTPSnoopDogg-6010660.mp3?alt=media&token=b600edb6-e017-4d72-8fbf-4f9991b710a1"
    }, {
        name: "Shipping Lanes",
        artist: "Chad Crouch",
        image: "Image URL",
        path: "https://firebasestorage.googleapis.com/v0/b/testtt-c2186.appspot.com/o/MaiMaiBenNhau-NooPhuocThinh-6456927.mp3?alt=media&token=20f1a43a-3e56-4a50-aef2-57b09fd53f04",
    },
        {
            name: "Shipping Lanes",
            artist: "Chad Crouch",
            image: "Image URL",
            path: "https://firebasestorage.googleapis.com/v0/b/testtt-c2186.appspot.com/o/CaMotTroiThuongNho-HoNgocHa-5103255.mp3?alt=media&token=b831d559-8475-466b-8949-537583350758",
        }];

    function loadTrack(track_index) {
        // Clear the previous seek timer
        clearInterval(updateTimer);
        resetValues();

        // Load a new track
        curr_track.src = track_list[track_index].path;
        curr_track.load();

        // Update details of the track
        track_art.style.backgroundImage = "url(" + track_list[track_index].image + ")";
        track_name.textContent = track_list[track_index].name;
        track_artist.textContent = track_list[track_index].artist;
        now_playing.textContent = "PLAYING " + (track_index + 1) + " OF " + track_list.length;

        // Set an interval of 1000 milliseconds
        // for updating the seek slider
        updateTimer = setInterval(seekUpdate, 1000);

        // Move to the next track if the current finishes playing
        // using the 'ended' event
        curr_track.addEventListener("ended", nextTrack);

        // Apply a random background color
        // random_bg_color();
    }
    function resetValues() {
        curr_time.textContent = "00:00";
        total_duration.textContent = "00:00";
        seek_slider.value = 0;
    }

    function playpauseTrack() {
        // Switch between playing and pausing
        // depending on the current state
        if (!isPlaying) playTrack(); else pauseTrack();
    }

    function playTrack() {
        // Play the loaded track
        curr_track.play();
        isPlaying = true;

        // Replace icon with the pause icon
        playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-2x"></i>';
    }

    function pauseTrack() {
        // Pause the loaded track
        curr_track.pause();
        isPlaying = false;

        // Replace icon with the play icon
        playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-2x"></i>';
    }

    function nextTrack() {
        // Go back to the first track if the
        // current one is the last in the track list
        if (track_index < track_list.length - 1) track_index += 1; else track_index = 0;

        // Load and play the new track
        loadTrack(track_index);
        playTrack();
    }

    function prevTrack() {
        // Go back to the last track if the
        // current one is the first in the track list
        if (track_index > 0) track_index -= 1; else track_index = track_list.length - 1;

        // Load and play the new track
        loadTrack(track_index);
        playTrack();
    }

    function seekTo() {
        // Calculate the seek position by the
        // percentage of the seek slider
        // and get the relative duration to the track
        seekto = curr_track.duration * (seek_slider.value / 100);

        // Set the current track position to the calculated seek position
        curr_track.currentTime = seekto;
    }

    function setVolume() {
        // Set the volume according to the
        // percentage of the volume slider set
        curr_track.volume = volume_slider.value / 100;
    }

    function seekUpdate() {
        let seekPosition = 0;

        // Check if the current track duration is a legible number
        if (!isNaN(curr_track.duration)) {
            seekPosition = curr_track.currentTime * (100 / curr_track.duration);
            seek_slider.value = seekPosition;

            // Calculate the time left and the total duration
            let currentMinutes = Math.floor(curr_track.currentTime / 60);
            let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
            let durationMinutes = Math.floor(curr_track.duration / 60);
            let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);

            // Add a zero to the single digit time values
            if (currentSeconds < 10) {
                currentSeconds = "0" + currentSeconds;
            }
            if (durationSeconds < 10) {
                durationSeconds = "0" + durationSeconds;
            }
            if (currentMinutes < 10) {
                currentMinutes = "0" + currentMinutes;
            }
            if (durationMinutes < 10) {
                durationMinutes = "0" + durationMinutes;
            }

            // Display the updated duration
            curr_time.textContent = currentMinutes + ":" + currentSeconds;
            total_duration.textContent = durationMinutes + ":" + durationSeconds;
        }
    }

    loadTrack(track_index);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

