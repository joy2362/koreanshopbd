@extends('layouts/master')

@section('content')
    <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
            <div class="row">
                @foreach($blog as $row )

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{url('/blog-details/'.$row->id)}}"></a><img src="{{asset($row->post_img)}}" alt="" height="200"></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="{{url('/blog-details/'.$row->id)}}">{{$row->post_title}}</a>
                                <p class="ps-post__meta"><span>By:{{$row->user->name}}</span> -<span class="ml-5">{{date_format($row->created_at,"M d,Y")}}</span></p>
                                <p> {!!   Str::limit(strip_tags( $row->post_details , 100)) !!}</p>
                                <a class="ps-morelink" href="{{url('/blog-details/'.$row->id)}}">Read more<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="mt-30">
                <div class="">
                    {{$blog->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
