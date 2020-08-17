@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                {{-- <img src="{{ $user->profile->profileImage() }}"
                    class="rounded-circle w-100" alt="Card Image"> --}}
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-4">
                        <div class="h4">{{ $user->username }}</div>
                        <a href="javascript:location.reload(true)">
                            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        </a>
                    </div>

                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a
                        href="https://chrome.google.com/webstore/detail/im-feeling-lucky/cnlabakikmdekpfaflaihcepfkjopgll?hl=en">{{ $user->profile->url ?? 'N/A' }}</a>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach


            <!-- <div class="col-4">
                                    <img src="/img/7.jpg" alt="Random Image 1" style="height:210px; width:200px;" Class="w-100">
                                </div>
                                <div class="col-4">
                                    <img src="/img/3.jpg" alt="Random Image 2" style="height:210px; width:200px;" Class="w-100">
                                </div>
                                <div class="col-4">
                                    <img src="/img/4.jpg" alt="Random Image 3" style="height:210px; width:200px;" Class="w-100">
                                </div>         -->
        </div>
    </div>
@endsection
