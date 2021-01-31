@extends('layouts.app')

@section('title')
<title>RND Template</title>
@endsection

@section('content')

<div class="main" style="padding-right: 10%;">
    <br>

    <div class="container" style="min-height: 700px;">

    <h2>Welcome</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item ">
          <a class="nav-link active" data-toggle="tab" href="#home1">Introduction
              <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_95.png">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Experiments
            <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_2.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">Simulation
            <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_4.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu3">People
            <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_94.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu4">Feedback
            <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_7.png"></a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home1" class="container tab-pane active"><br>
            <h3>Introduction</h3>
            <b>Aim:</b><br>
            <b>Objective:</b>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <h3 align="center">Experiments</h3>
            <div class="row">
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
        <div id="menu2" class="container tab-pane fade"><br>
            <h3>Simulation</h3>
        </div>
        <div id="menu3" class="container tab-pane fade"><br>
            <h3>People</h3>
            <b>Principal Investigator:</b><br>
            <b>Integration Engineers:</b>
        </div>
        <div id="menu4" class="container tab-pane fade"><br>
            <h3>Feedback</h3>
        </div>
    </div>

    </div>
</div>

<script>
    $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
    });
    </script>
@endsection


