@extends('partials.app')
@section('main')
    <main class="main">
        @include('notification')
        <div class="container">

            {{-- {{dd($pending_followers)}} --}}
            <div class="middle">
                <form class="create-post">
                    <div class="profile-pic">
                        <img src="{{ asset('assets/images/profile.png') }}" alt="" />
                    </div>
                    <input type="text" placeholder="What's on your mind?" id="create-post" />
                    <input type="button" value="Post" class="btn btn-primary createNewPostBtn" />
                </form>

                <div class="feeds">

                    @forelse ($posts as $post)
                        <div class="feed">
                            <div class="head"></div>
                            <div class="user">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/images/profile.png') }}" alt="" />
                                </div>
                                <div class="info">
                                    <h3 class="userView" data-uid="{{ $post->user->uuid }}" style="cursor: pointer"
                                        data-image="{{ asset('assets/images/profile.png') }}">
                                        {{ ucfirst($post->user->name) }}</h3>
                                    <small>Posted {{ $post->created_at->diffForHumans() }}</small>
                                </div>
                                <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                            </div>

                            <div class="description">
                                <h5>{!! $post->post_desc !!}</h5>
                            </div>
                            <div class="photo">
                                <img src="{{ asset('storage/' . $post->file) }}" alt="" />
                            </div>

                            <div class="action-button">
                                <div class="interaction-button">
                                    @php
                                        $class = getPostLike($post->id) === true ? 'text-primary' : '';
                                    @endphp
                                    <span class="{{ $class }} likePost" data-pid="{{ $post->id }}"><i
                                            class="fa fa-thumbs-up"></i></span>
                                    <a href="whatsapp://send?text={{ $post->post_desc }}" class="text-success"
                                        title="Share Post"><span><i class="fa fa-whatsapp"></i></span></a>
                                </div>
                            </div>

                        </div>
                        @empty
                        <h5 class="text-center text-danger">Currently No Posts.</h5>
                    @endforelse


                </div>
            </div>

            <div class="right">

                <div class="friend-requests">
                    <h4>Following</h4>

                    @forelse ($followings as $following)
                        <div class="request">
                            <div class="info">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/images/profile.png') }}" alt="following Image" />
                                </div>
                                <div>
                                    @php
                                        $user = getUser($following->follower_id);
                                        $user_name = $user != false ? ucfirst($user->name):null;
                                    @endphp
                                    <h5>{{ $user_name }}</h5>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="request">
                            <div class="info">
                                <div>
                                    <h5 class="text-center text-danger">No Followings.</h5>
                                </div>
                            </div>
                        </div>
                    @endforelse


                </div>

                <div class="friend-requests">
                    <h4>Followers</h4>

                    @forelse ($followers as $follower)
                        <div class="request">
                            <div class="info">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/images/profile.png') }}" alt="following Image" />
                                </div>
                                <div>
                                    @php
                                        $user = getUser($follower->user_id);
                                        $user_name = $user != false ? ucfirst($user->name):null;
                                    @endphp
                                    <h5>{{ $user_name }}</h5>
                                </div>
                            </div>
                        </div>
                    @empty

                        <div class="request">
                            <div class="info">
                                <div>
                                    <h5 class="text-center text-danger">No Followers.</h5>
                                </div>
                            </div>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </main>

    {{-- Create Post Model --}}
    <div class="modal fade" id="createPostModel" tabindex="-1" aria-labelledby="createPostModelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('craete_new_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="createPostModelLabel">Create New Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="description" class="col-form-label">Post :</label>
                            <textarea class="form-control" name="description" placeholder="Enter Post Content" id="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="col-form-label">Media <span class="text-danger">(Only image-
                                    jpeg,jpg,png)
                                </span></label>
                            <input type="file" name="file" id="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- User Follow Model --}}
    <div class="modal fade" id="userFollowModel" tabindex="-1" aria-labelledby="userFollowModelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="userFollowModelLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <div style="text-align: center; position: relative;">
                            <img src="" alt="" id="user_image"
                                style="display: inline-block; max-width: 3rem; height: auto; position: relative; top: 50%; transform: translateY(-50%);">
                        </div>
                        <div class="text-center follow_btn">
                            <p>Name : <strong id="user_name"></strong></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        var auth_user_id = "{{ auth()->user()->uuid }}"
    </script>
    <script src="{{ asset('assets/js/postpage.js') }}"></script>
@endpush
