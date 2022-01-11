@extends('layouts.template')
@section('title','店面資訊')


@section('css')
<link rel="stylesheet" href="{{asset('css/location-list.css')}}">
@endsection

@section('main')
<div class="w3ls_address_mail_footer_grids">
    <div class="container">
        <h2><ins><strong>店面資訊</strong></ins></h2>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.736054201678!2d120.66707695057603!3d24.14590587939235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d1192f39d71%3A0x6cd3b529562cba9b!2z5LiA5Lq65LiA5Ly0IOOBqOOCguOBoOOBoQ!5e0!3m2!1szh-TW!2stw!4v1641536133857!5m2!1szh-TW!2stw"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="contactright" style="background-color: #DAC9A6;">
            <h2 class="mb-5"> <span>一人一伴 ともだち </span></h2>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-clock" aria-hidden="true"></i>
                </div>
                <span style="margin-left: 20px; font-size: 24px;">星期五~星期二 09:00~15:00，星期三、四 公休</span>
            </div>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <span style="margin-left: 20px; font-size: 24px;">04-2301-1928</span>
            </div>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <span style="margin-left: 20px; font-size: 24px;">40357台中市西區向上路一段17巷1弄10號</span>
            </div>

            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="far fa-envelope"></i>
                </div>
                <p>
                    <a href="mailto:info@example.com">
                        <span style="margin-left: 20px; font-size: 24px;">
                            info@example2.com
                        </span>
                    </a>
                </p>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection