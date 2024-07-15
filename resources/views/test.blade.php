@extends('layouts.master')

@section('title')
    ข้อมูลผู้ใช้
@endsection

@section('content')
    <h1>สวัสดี Laravel</h1>
    <h2>ข้อมูลส่วนตัว</h2>
    <h3>ชื่อ: {{ $name }}</h3>
    <h3>อายุ: {{ $age }}</h3>
    @if ($age < 20)
        <h4>คุณอยู่ในช่วงเด็ก</h4>
    @elseif ($age >= 20 && $age < 50)
        <h4>คุณอยู่ในช่วงวัยทำงาน</h4>
    @else
        <h4>คุณอยู่ในช่วงวัยเกษียณ</h4>
    @endif
    <h3>อีเมล์: {{ $email }}</h3>
    {{-- @dd($activities) --}}
    {{-- // dd is a helper function that dumps the given variables and ends execution of the script.
        This is a good way to debug your code. --}}
    <h2>กิจกรรม</h2>
    <ul>
        {{-- @foreach ($activities as $item)
            <li>{{$item}}</li>
        @endforeach --}}
        @forelse ($activities as $item)
            <li>{{ $item }}</li>
        @empty
            <strong>ไม่พบกิจกรรม</strong>
        @endforelse
    </ul>
    <hr>
    <a href="user">User Page</a>
@endsection

@include('partials.extra')
