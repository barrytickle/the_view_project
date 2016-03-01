@extends('layouts.master')
@section('title', 'View - Home')
@section('content')
    <div class="main-content-banner">
        @foreach($content as $con)
        <div class="content-hero-box">
            <h2 class="title">{{ $con->title }}</h2>
            <p>{{$con->content}} </p>
           
        </div>
        @endforeach
    </div>

    <div class="grid clearfix">
        <div class=" content-blue grid-item">
            <div class="content-hero-box">
                <h2 class="title">Dell U2515H Review</h2>
                <p>Dell has newly released their latest addition to the ultrasharp series, this time providing us with a monitor giving us a 2k resolution at 60Hz...</p>
             
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
               
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
                
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
                
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
                
            </div>
        </div>
        <div class=" content-red grid-item grid-item-height2">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
               
            </div>
        </div>
    </div>

        
    
@endsection