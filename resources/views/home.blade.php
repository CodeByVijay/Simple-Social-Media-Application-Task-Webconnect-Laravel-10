@extends('partials.app')
@section('main')
<main class="main">
    <div class="container">
        <div class="middle">
            <form class="create-post">
                <div class="profile-pic">
                    <img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" alt="" />
                </div>
                <input
              type="text"
              placeholder="What's on your mind Freecodez?"
              id="create-post"
            />
                <input type="submit" value="Post" class="btn btn-primary" />
            </form>

            <div class="feeds">
                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h3>Lana Rose</h3>
                            <small>Dubai, 15 MINUTES AGO</small>
                        </div>
                        <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                    </div>

                    <div class="photo">
                        <img src="https://png.pngtree.com/background/20230512/original/pngtree-nature-background-sunset-wallpaer-with-beautiful-flower-farms-picture-image_2503007.jpg" alt="" />
                    </div>

                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <span><i class="fa fa-share"></i></span>
                        </div>
                        <div class="bookmark">
                            <span><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="liked-by">
                        <span><img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" /></span>
                        <span><img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" /></span>
                        <span><img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" /></span>
                        ,
                        <p>Liked by <b>Enrest Achiever</b>snd <b>220 others</b></p>
                    </div>

                    <div class="caption">
                        <p>
                            <b>Lana Rose</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span>
                        </p>
                    </div>
                    <div class="comments text-muted">View all 130 comments</div>
                </div>

                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" alt="" />
                        </div>
                        <div class="info">
                            <h3>Chris Brown</h3>
                            <small>New York, 1 HOUR AGO</small>
                        </div>
                        <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                    </div>

                    <div class="photo">
                        <img src="https://img.freepik.com/premium-photo/lavender-field-with-tree-field-beautiful-image-lavender-field-summer-sunset-landscape_995887-2689.jpg" alt="" />
                    </div>

                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <span><i class="fa fa-comment"></i></span>
                            <span><i class="fa fa-share"></i></span>
                        </div>
                        <div class="bookmark">
                            <span><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="liked-by">
                        <span><img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" /></span>
                        <span><img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" /></span>
                        <span><img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" /></span>
                        ,
                        <p>Liked by <b>Enrest Achiever</b>snd <b>188 others</b></p>
                    </div>

                    <div class="caption">
                        <p>
                            <b>Chirs Brown</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span>
                        </p>
                    </div>
                    <div class="comments text-muted">View all 40 comments</div>
                </div>

                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h3>John Samron</h3>
                            <small>Amsterdam, 7 HOURS AGO</small>
                        </div>
                        <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                    </div>

                    <div class="photo">
                        <img src="https://img.freepik.com/premium-photo/ai-generated-lavender-field-with-bridge-background_812649-829.jpg" alt="" />
                    </div>

                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <span><i class="fa fa-comment"></i></span>
                            <span><i class="fa fa-share"></i></span>
                        </div>
                        <div class="bookmark">
                            <span><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="liked-by">
                        <span><img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" /></span>
                        <span><img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" /></span>
                        <span><img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" /></span>
                        ,
                        <p>Liked by <b>Enrest Achiever</b>snd <b>130 others</b></p>
                    </div>

                    <div class="caption">
                        <p>
                            <b>John Samron</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span>
                        </p>
                    </div>
                    <div class="comments text-muted">View all 15 comments</div>
                </div>

                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h3>Kareena Joshua</h3>
                            <small>USA, 3 HOURS AGO</small>
                        </div>
                        <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                    </div>

                    <div class="photo">
                        <img src="https://wallpapers.com/images/hd/beautiful-nature-pictures-qjcss5r32ziry34t.jpg" alt="" />
                    </div>

                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <span><i class="fa fa-comment"></i></span>
                            <span><i class="fa fa-share"></i></span>
                        </div>
                        <div class="bookmark">
                            <span><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="liked-by">
                        <span><img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" /></span>
                        <span><img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" /></span>
                        <span><img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" /></span>
                        ,
                        <p>Liked by <b>Enrest Achiever</b>snd <b>280 others</b></p>
                    </div>

                    <div class="caption">
                        <p>
                            <b>Kareena Joshua</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span>
                        </p>
                    </div>
                    <div class="comments text-muted">View all 110 comments</div>
                </div>

                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://64.media.tumblr.com/41a17a13076c206f31100e160079b96b/fe5088991ccc40df-ea/s540x810/338c3cc1cd7b9fe3d24a886385bc65d302fb0db8.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h3>Dan Smith</h3>
                            <small>Paris, 1 DAY AGO</small>
                        </div>
                        <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                    </div>

                    <div class="photo">
                        <img src="https://pikwizard.com/pw/small/bb1e96385189a5e792d8466f5030f889.jpg" alt="" />
                    </div>

                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <span><i class="fa fa-comment"></i></span>
                            <span><i class="fa fa-share"></i></span>
                        </div>
                        <div class="bookmark">
                            <span><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="liked-by">
                        <span><img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" /></span>
                        <span><img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" /></span>
                        <span><img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" /></span>
                        ,
                        <p>Liked by <b>Enrest Achiever</b>snd <b>420 others</b></p>
                    </div>

                    <div class="caption">
                        <p>
                            <b>Dan Smith</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span>
                        </p>
                    </div>
                    <div class="comments text-muted">View all 120 comments</div>
                </div>

                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h3>Karim Benzema</h3>
                            <small>Mumbai, 30 MINUTES AGO</small>
                        </div>
                        <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                    </div>

                    <div class="photo">
                        <img src="https://assets.hongkiat.com/uploads/nature-photography/autumn-poolside.jpg" alt="" />
                    </div>

                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <span><i class="fa fa-comment"></i></span>
                            <span><i class="fa fa-share"></i></span>
                        </div>
                        <div class="bookmark">
                            <span><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="liked-by">
                        <span><img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" /></span>
                        <span><img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" /></span>
                        <span><img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" /></span>
                        ,
                        <p>Liked by <b>Enrest Achiever</b>snd <b>150 others</b></p>
                    </div>

                    <div class="caption">
                        <p>
                            <b>Karim Benzema</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span>
                        </p>
                    </div>
                    <div class="comments text-muted">View all 30 comments</div>
                </div>
                <div class="feed">
                    <div class="head"></div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="https://64.media.tumblr.com/7539d9b35db4932ae8cdf00ccf325e13/b72a609f6672794d-d9/s540x810/9e0a8dd4fd088e3c1513786e44609918ae8f18a2.jpg" alt="" />
                        </div>
                        <div class="info">
                            <h3>Srishti Tirkey</h3>
                            <small>Bangalore, 11 HOURS AGO</small>
                        </div>
                        <span class="edit"><i class="fa fa-ellipsis-h"></i></span>
                    </div>

                    <div class="photo">
                        <img src="https://i.pinimg.com/originals/7f/a0/ef/7fa0ef0db20dca49be10bdba202a8917.jpg" alt="" />
                    </div>

                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <span><i class="fa fa-comment"></i></span>
                            <span><i class="fa fa-share"></i></span>
                        </div>
                        <div class="bookmark">
                            <span><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="liked-by">
                        <span><img src="https://res.cloudinary.com/freecodez/image/upload/v1698067298/images/fy8azbqxhgdrbbijhipe.webp" /></span>
                        <span><img src="https://64.media.tumblr.com/7b28774544438d73ca8c1daad11402e0/88958e5f55a67155-fd/s250x400/a9ef3dad54f6c57a53fdeef1a793f0143a9aea27.jpg" /></span>
                        <span><img src="https://64.media.tumblr.com/2d678d77b051ee352d722d1f7fd2c029/88958e5f55a67155-7d/s250x400/74d69559d55329719bb0a50d8e9d77cbf0ec6da0.jpg" /></span>
                        ,
                        <p>Liked by <b>Enrest Achiever</b>snd <b>530 others</b></p>
                    </div>

                    <div class="caption">
                        <p>
                            <b>Srishti Tirkey</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span>
                        </p>
                    </div>
                    <div class="comments text-muted">View all 190 comments</div>
                </div>
            </div>
        </div>

        <div class="right">

            <div class="friend-requests">
                <h4>Followers</h4>
                <div class="request">
                    <div class="info">
                        <div class="profile-pic">
                            <img src="https://i.pinimg.com/736x/6d/4b/de/6d4bde9293ac23d4711c828859af20e4.jpg" />
                        </div>
                        <div>
                            <h5>Wilson Fisk</h5>
                            <p class="text-muted">8 mutual friends</p>
                        </div>
                    </div>
                    <div class="action">
                        <button class="btn btn-primary">Accept</button>
                        <button class="btn">Decline</button>
                    </div>
                </div>
                <div class="request">
                    <div class="info">
                        <div class="profile-pic">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx7jXK7iCNJK_u4XvbwTkXPx140LlR1qh2XoihxvkMgM2ZvViJaIxaPFleTUJ7SBp9xBw&usqp=CAU" />
                        </div>
                        <div>
                            <h5>Srishti Tirkey</h5>
                            <p class="text-muted">2 mutual friends</p>
                        </div>
                    </div>
                    <div class="action">
                        <button class="btn btn-primary">Accept</button>
                        <button class="btn">Decline</button>
                    </div>
                </div>
                <div class="request">
                    <div class="info">
                        <div class="profile-pic">
                            <img src="https://i.pinimg.com/550x/91/7b/a7/917ba7b03ab2aa2fab7b1b3a83a00be3.jpg" />
                        </div>
                        <div>
                            <h5>Christ Kahea</h5>
                            <p class="text-muted">1 mutual friend</p>
                        </div>
                    </div>
                    <div class="action">
                        <button class="btn btn-primary">Accept</button>
                        <button class="btn">Decline</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


