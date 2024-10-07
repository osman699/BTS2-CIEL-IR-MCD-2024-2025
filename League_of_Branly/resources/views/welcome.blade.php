@extends('layouts.app')

@section('content')

<div class="welcome-block-1" style="background-image: url('{{ asset('img/ffe8f50201af51a0956875d2aeeb9e662eb0b228-3840x2160.webp')}}');">
    <div class="block-opacity w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <div class="h1 mb-0">LEAGUE of</div>
            <div class="h1">BRANLY</div>
            <div class="block-1-subtitle mt-3 mx-5 text-blue-5">
                <div class="h3">A training website for the students of BTS CIEL.</div>
                <div class="h3">HTML, CSS, JS, PHP, DCM & SQL</div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gold-1">
    <div class="container">
        <div class="d-flex flex-column vh-100 gx-5">
            <div class="text-blue-7 d-flex justify-content-center flex-column p-5">
                <h2>1. Create a Database Conceptual Model</h2>
                <p>Using the official League of Legends website and the Merise method, create a Conceptual Data Model (CDM) that represents the champions of Runeterra.</p>
                <p>Define all the Data Entities (also known as Entity) that represent the information in our system, for example we need the Entity "Champion".</p>
                <p>Then, define the Relationships between the Entities. Example: a Champion belongs to only one Region.</p>
                <p>These Relationships and Entities will form your Database Conceptual Model.</p>
            </div>
            <div class="col-sm d-flex justify-content-center align-items-center pb-5">
                <img class="img-fluid" id="cdm-diagram" src="{{ asset('img/league_of_legends_diagram_v2.png')}}" />
            </div>

        </div>
    </div>
</div>

@endsection