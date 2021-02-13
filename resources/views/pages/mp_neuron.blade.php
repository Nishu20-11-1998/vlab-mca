@extends('layouts.app')

@section('title')
<title>MP Neuron</title>
@endsection

@section('content')

<div class="main" style="padding-right: 10%;">
    <br>

    <div class="container" style="min-height: 700px;">

    <h2>
        McCulloch-Pitts Neuron </h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item ">
          <a class="nav-link active" data-toggle="tab" href="#home1">Introduction
              <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_95.png">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Simulation
            <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_4.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">Assignment
            <img src="https://vlab.spit.ac.in/Virtual%20Laboratory_files/content_2.png"></a>
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
            <br>
            <p>McCulloch & Pitts (1943) are generally recognised as the designers of the first neural network. Many of their ideas still used today (e.g. many simple units combine to give increased computational power and the idea of a threshold). Hebb (1949) developed the first learning rule (on the premise that if two neurons were active at the same time the strength between them should be increased)</p><br>
            <b>Aim:</b><br>
            <b>Objective:</b><br>
            <b>How does a neural network learn ?</b><br>
            <ul>
            <li>when an input is given to the neural network, it returns an output.</li>
            <li>During the learning phase, every inputs come with its label, explaining what output the neural network should have guessed. If the choice is the good one, actual parameters are kept and the next input is given. However, if the obtained output doesn’t match the label, weights are changed. Those are the only variables that can be changed during the learning phase.</li>
            <li>To determine which weight is better to modify, a particular process, called “backpropagation” is done.</li>
            <li>The “learning rate”. The name says it all, this new value determines on what speed the neural network will learn, or more specifically how it will modify a weight, little by little or by bigger steps. 1 is generally a good value for that parameter.</li></ul>
            <br>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <h3 align="center">Simulation</h3>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. LOGIC GATE </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body"><div class="container-fluid row">
                            <div class="col-md-4">
                                <a href="#">
                                <div class="card"> <div class="card-body" align="center">AND GATE</div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href="#">
                                <div class="card">
                                    <div class="card-body" align="center">OR GATE</div>
                                </div></a>
                            </div>
                            <div class="col-md-4">
                                <a href="#">
                                <div class="card">
                                    <div class="card-body" align="center">XOR GATE</div>
                                </div></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. MP_Neuron </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>MP_Neuron 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <h3>Assignment</h3>
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


