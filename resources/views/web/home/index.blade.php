@extends('web.layout.app')
@section('head')
<title>Home - Laracamp</title>
@endsection
@section('content')
<main class="">
    <livewire:web.hero-component title="PHP Laravel, Intertia, Vue, Nuxt, React, Next and Tailwind CSS" description="Build your Application with the most Popular, Highly Scalable and Performant Frameworks" image_path="{{asset('storage/images/web/home/home.jpg')}}" btn_text="About Us" btn_url="#" link_text="Hi there" link_url="#"/>
</main>
@endsection