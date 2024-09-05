/*
 *********************** Created By Vijay Amule **********************
 */

$(document).ready(function () {
    $(".createNewPostBtn").on("click", function (e) {
        e.preventDefault();
        let postVal = $("#create-post").val();
        $("#description").val(postVal);
        $("#createPostModel").modal("show");
    });

    // Open User Model
    $(".userView").on("click", function (e) {
        e.preventDefault();
        let name = $(this).html();
        let image = $(this).attr("data-image");
        let user_id = $(this).attr("data-uid");

        $(".follow_btn button").remove();

        $.ajax({
            type: "post",
            url: "/get-user",
            data: { user_id: user_id },
            success: function (response) {
                if (response.status_code === 200) {
                    $("#userFollowModelLabel").html(name);
                    $("#user_name").html(name);
                    $("#user_image").attr("src", image);
                    // console.log(auth_user_id);

                    if (auth_user_id !== user_id) {
                        let btn =
                            response.follow === false
                                ? `<button class="btn btn-outline-primary btn-sm follow_user" data-uid="${user_id}">Follow</button>`
                                : `<button class="btn btn-secondary btn-sm">Followed</button>`;
                        $(".follow_btn").append(`${btn}`);
                    }
                    $("#userFollowModel").modal("show");
                } else {
                    console.log(response);
                }
            },
        });
    });

    // Follow
    $(document).on("click", ".follow_user", function (e) {
        e.preventDefault();

        let user_id = $(this).attr("data-uid");

        $.ajax({
            type: "post",
            url: "/follow-user",
            data: { user_id: user_id },
            success: function (response) {
                if (response.status_code === 200) {
                    $(".follow_btn button").remove();
                    if (auth_user_id !== user_id) {
                        let btn =
                            response.follow === false
                                ? `<button class="btn btn-outline-primary btn-sm follow_user" data-uid="${user_id}">Follow</button>`
                                : `<button class="btn btn-secondary btn-sm">Followed</button>`;
                        $(".follow_btn").append(`${btn}`);
                    }
                    // $("#userFollowModel").modal("show");
                } else {
                    console.log(response);
                }
            },
        });
    });

    // Like Post
    $(document).on("click", ".likePost", function (e) {
        e.preventDefault();

        let btn = $(this);
        let post_id = $(this).attr("data-pid");

        $.ajax({
            type: "post",
            url: "/like-post",
            data: { post_id: post_id },
            success: function (response) {
                if (response.status_code === 200) {
                    // text-primary

                    if (response.like === false) {
                        btn.removeClass("text-primary");
                    } else {
                        btn.addClass("text-primary");
                    }
                } else {
                    console.log(response);
                }
            },
        });
    });
});
