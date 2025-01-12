@extends('layout')
@section('title','บทความทั้งหมด')
    
@section('content')
    <h3>บทความทั้งหมด</h3>
    <hr>
        {{-- {{ print_r($blogs) }} --}}
        @foreach ($blogs as $item )
            @if ($item["status"]==true)
                <h4>{{ $item["title"] }}</h4>
                <p>{{ $item["content"] }}</p>
                <p class="text text-success" >เผยแพร่</p>
            @else
                <p class="text text-danger">กำลัง Draft</p>
            @endif
            <hr>
            
        @endforeach

    <hr>
    <a href="/{{'about'}}">เกี่ยวกับเรา</a>
    <a href="/">หน้าแรก</a>
    @endsection