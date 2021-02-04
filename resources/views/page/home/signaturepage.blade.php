@extends('index')

@section('content')

    <div class="content1">
        <div id="breadcrumb-social">
            <div class="container">
                <div class="conten">
                    <p>Home / Good Corporate Governance / Our Commitment</p>
                    <h2>CSR PROGRAMS - BAKRIELAND GOES<br> GREEN</h2>
                </div>
            </div>
        </div>
    </div>

    <div>
        <section id="page-signature">

            <div class="wrapper" style="display: flex">
                <div id="myBtnContainer" style="padding: 100px 0; margin: 0 auto;">
                    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn" onclick="filterSelection('cars')"> Cars</button>
                    <button class="btn" onclick="filterSelection('animals')"> Animals</button>
                    <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
                    <button class="btn" onclick="filterSelection('colors')"> Colors</button>
                </div>
            </div>

            <div class="container3">
                <div class="grid">
                    {{-- @foreach ($items as $item)
                    <div class="colom" style="background: url({{Storage::url($item->image)}}); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        <h1>{{ $item->title }}</h1>
                        <h2>{{ $item->kota }}</h2>
                    </div>
                    @endforeach --}}
                </div>
            </div>
        </section>
    </div>

@endsection
