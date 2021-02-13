@extends('layouts.app')

@section('title')
<title>RND Template</title>
@endsection

@section('content')

<div class="main" style="padding-right: 10%;">
    <br>

    <div class="container" style="min-height: 700px;">

    <h2 align="center">Welcome To Virtual Lab </h2>
    <br>
    <h3 align="center">About Us</h3>
    <p>Concept of Virtual labs are to simulate learning environments that allow students to complete laboratory experiments online and explore concepts and theories without stepping into a physical science lab.</p>
    <b>Aim :</b><br><br><br>
    <b>Objective:</b>
    <br>
    <br>
    <br>
    <hr>
        <h3 align="center">Experiments List</h3>
        <div class="container-fluid row" style="padding-left:10%">
            <a href="/Prolog"><div class="col-md-4">
                <div class="card" style="width:18rem;height:25rem;margin:20px 0 24px 0">
                    <img class="card-img-top" src="http://www.gprolog.org/gprolog.png" alt="image" style="width:100%;height:18rem">
                    <div class="card-body">
                    <h4 class="card-title">Prolog</h4>
                    <p class="card-text"> Prolog</p>

                    </div>
                </div>
            </div></a><a  href="/MP_Neuron">
            <div class="col-md-4">
                <div class="card" style="width:18rem;height:25rem;margin:20px 0 24px 0">
                    <img class="card-img-top" src="https://miro.medium.com/max/3840/1*YdhljPn5q1KNIN8b8Li2sA.jpeg" alt="image" style="width:100%;height:18rem">
                    <div class="card-body">
                    <h4 class="card-title">MP Neuron</h4>
                    <p class="card-text">McCulloch-Pitts Neuron</p>

                    </div>
                </div>
            </div></a><a  href="#">
            <div class="col-md-4">
                <div class="card" style="width:18rem;height:25rem;margin:20px 0 24px 0">
                    <img class="card-img-top" src="{{asset('img/SPIT_logo.png')}}" alt="image" style="width:100%;height:18rem">
                    <div class="card-body">
                    <h4 class="card-title">Practical 3</h4>
                    <p class="card-text"> Practical 3</p>

                    </div>
                </div>
            </div></a>
        </div>

    </div>
</div>
@endsection


