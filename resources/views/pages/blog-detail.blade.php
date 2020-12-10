@extends('layouts/master')

@section('content')
    <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <div class="ps-post--detail">
                        <div class="ps-post__thumbnail"><img src="{{asset($blog->post_img)}}" alt=""></div>
                        <div class="ps-post__header">
                            <h3 class="ps-post__title">{{$blog->post_title}}</h3>
                            <p class="ps-post__meta">Posted by {{$blog->user->name}} on {{date_format($blog->created_at,"M d,Y")}} </p>
                        </div>
                        <div class="ps-post__content">
                            {!!$blog->post_details!!}
                        </div>
                    </div>

                    <div class="ps-comments">
                        <h3>Comment</h3>
                        <!--
                        <div class="ps-comment">
                            <div class="ps-comment__thumbnail"><img src="images/user/2.jpg" alt=""></div>
                            <div class="ps-comment__content">
                                <header>
                                    <h4>MARK GREY <span>(15 minutes ago)</span></h4>
                                   <a href="#">Reply<i class="ps-icon-arrow-left"></i></a
                                </header>
                                <p>The development of the mass spectrometer allowed the mass of atoms to be measured with increased accuracy. The device uses the launch and continued operation of the Hubble space telescope probably.</p>
                            </div>
                        </div>

                        <div class="ps-comment ps-comment--reply">
                            <div class="ps-comment__thumbnail"><img src="images/user/3.jpg" alt=""></div>
                            <div class="ps-comment__content">
                                <header>
                                    <h4>MARK GREY <span>(3 hours ago)</span></h4><a href="#">Reply<i class="ps-icon-arrow-left"></i></a>
                                </header>
                                <p>The development of the mass spectrometer allowed the mass of atoms to be measured with increased accuracy. The device uses  continue ace explore.</p>
                            </div>
                        </div>
                        -->
                        @foreach($comment as $row)
                        <div class="ps-comment">
                            @if($row->user->avatar)
                                <div class="ps-comment__thumbnail"><img src="{{asset($row->user->avatar)}}" alt=""></div>
                            @else
                                <div class="ps-comment__thumbnail"><img src="{{ asset('public/media/user/profile.jpg') }}" alt=""></div>
                            @endif
                            <div class="ps-comment__content">
                                <header>
                                    <h4>{{$row->user->name}} <span>({{\Carbon\Carbon::parse($row->updated_at)->diffForHumans()}})</span></h4>
                                </header>
                                    <p>{{$row->comment}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if(auth()->check())
                    <form class="ps-form--comment" action="{{route('post.comment.add')}}" method="post">
                        @csrf
                        <h3>LEAVE A COMMENT</h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Text your message here..." name="comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="postId" value="{{$blog->id}}">
                        <div class="form-group">
                            <button class="ps-btn ps-btn--sm ps-contact__submit">Send Message<i class="ps-icon-next"></i></button>
                        </div>
                    </form>
                    @endif
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">


                    <aside class="ps-widget--sidebar">
                        <div class="ps-widget__header">
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="ps-widget__content">
                            @foreach($recentBlog as $row)
                            <div class="ps-post--sidebar">
                                <div class="ps-post__thumbnail"><a href="{{url('/blog-details/'.$row->id)}}"></a><img src="{{asset($row->post_img)}}" alt="" height="75" width="75"></div>
                                <div class="ps-post__content"><a class="ps-post__title" href="{{url('/blog-details/'.$row->id)}}">{{$row->post_title}}</a><span>{{date_format($row->created_at,"M d,Y")}}</span></div>
                            </div>
                            @endforeach
                        </div>
                    </aside>
                    <aside class="ps-widget--sidebar">
                        <div class="ps-widget__header">
                            <h3>Ads Banner</h3>
                        </div>
                        <div class="ps-widget__content"></div>
                    </aside>
                    <aside class="ps-widget--sidebar">
                        <div class="ps-widget__header">
                            <h3>Best Seller</h3>
                        </div>
                        <div class="ps-widget__content">
                            <div class="ps-shoe--sidebar">
                                @foreach($topsale as $row)
                                <div class="ps-shoe__thumbnail"><a href="{{url('product-details/'.$row->id)}}"></a><img src="{{asset($row->img_1)}}" alt="" height="75" width="75"></div>
                                <div class="ps-shoe__content"><a class="ps-shoe__title" href="{{url('product-details/'.$row->id)}}">{{$row->product_name}}</a>
                                    <p> @if($row->discount_price)
                                            <del>{{$row->selling_price}} BDT</del>  {{$row->discount_price}} BDT
                                        @else
                                            {{$row->selling_price}} BDT
                                        @endif</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
