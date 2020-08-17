@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="Post Image" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center pb-4">
                    <div class="pr-4">
                        <img src="/storage/{{ $post-> user-> profile-> image }}" class="rounded-circle w-100" style="max-width:50px" alt="Show page user image">
                    </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post-> user-> id }}">
                            <span class="text-dark">{{ $post-> user -> username }}
                            </span>
                        </a>
                        {{-- <a href="#" class="pl-3">Follow</a> --}}

                    </div>
                </div>
            </div>
            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{ $post-> user-> id }}">
                        <span class="text-dark">{{ $post-> user -> username }}
                        </span>
                    </a>
                </span>
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
