@extends('client.layout.layout')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

@show
@section('content')

<!-- **Main** -->
<div id="main">

    <!-- ** Container ** -->
    <div class="container">
        <!-- Primary -->
        <section id="primary" class="content-full-width">
            <!-- #post-14 -->
            <div id="post-14" class="post-14 page type-page status-publish hentry">

                @foreach ($sections as $section)
                    @if($section->status == 2 || $section->status == 1)
                        {!!$section->content!!}
                    @endif
                @endforeach




            </div><!-- #post-14 -->
        </section><!-- Primary End -->
    </div>
    <!-- ** Container End ** -->

</div><!-- **Main - End ** -->

<script type="text/javascript">

    // var blogs;

    $.ajax({
        type:"GET",
        dataType:"json",
        url:'/test',
        success:function(response){
            console.log(response.blogs);
            var blogs= (response.blogs);
            var listBlog = $('#home_blogs');
            var itemBlog = $('#blog');

            $.each( blogs, function( key, blog ) {
                var itemBlogClone = itemBlog.clone().removeAttr("style");
                listBlog.append(itemBlogClone);
                itemBlogClone.find("#image_blog").find('img').attr('src',blog.image)
                itemBlogClone.find("#description_blog").text(blog.description);
                itemBlogClone.find("#title_blog").children('a').text(blog.title);
                console.log(itemBlogClone.find("#image_blog").find('img').src);
            });
        }

    });

</script>
@endsection


@section('footer')

@show
