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
            <b>Aim :</b><br>
            <b>Objective :</b><br>
            <b>How does a neural network learn ?</b><br>
            <ul>
            <li>when an input is given to the neural network, it returns an output.</li>
            <li>During the learning phase, every inputs come with its label, explaining what output the neural network should have guessed. If the choice is the good one, actual parameters are kept and the next input is given. However, if the obtained output doesn’t match the label, weights are changed. Those are the only variables that can be changed during the learning phase.</li>
            <li>To determine which weight is better to modify, a particular process, called “backpropagation” is done.</li>
            <li>The “learning rate”. The name says it all, this new value determines on what speed the neural network will learn, or more specifically how it will modify a weight, little by little or by bigger steps. 1 is generally a good value for that parameter.</li></ul>
            <br>
            <b>Architecture :</b>
            <br>
            <p>The activation function is a mathematical “gate” in between the input feeding the current neuron and its output going to the next layer. It can be as simple as a step function that turns the neuron output on and off, depending on a rule or threshold. Or it can be a transformation that maps the input signals into output signals that are needed for the neural network to function.</p>
            <br>
            <b>Activation Function Chartsheet</b><br>
            <b>The -notations</b><br>
            <ul>
            <li>xi: Activation of unit Xi, input signal.</li>
            <li>yi: Activation of unit Yj, yj = f(yinj)</li>
            <li>Wij: Weight on connection from unit Xi to unit Yj</li>
            <li>bj: Bias acting on unit j. Bias has a constant activation of 1.</li>
            <li>W: Weight matrix, W = {wij}</li>
            <li>Yinj= Net input to unit Yj given by yinj = bj + ⅀XiWij</li>
            <li>||x||: Norm of magnitude vector X.</li>
            <li>Ɵj: Threshold for activation of neuron Yj</li>
            <li>S: Training input vector, S = (s1, …, sj, ... , sn)</li>
            <li>T: Training output vector, T = (t1, ... , tj, . , tn)</li>
            <li>X: Input vector, X= (X1,... , Xj... , Xn)</li>
            <li>△wij: Change in weights given by △ wij = Wij(new) - Wij(old)</li>
            <li>a: Learning rate; it controls the amount of weight adjustment at each step of training.</li>
            </ul><br>
            <b>M-P Neuron</b>
            <ul>
            <li>The M-P neurons are connected by directed weighted paths.</li>
            <li>M-P neuron is binary, that is, at any time neuron may fire or may not fire.</li>
            <li>The weights associated with the communication links may be excitatory (weight is positive) or inhibitory (weight is negative). It is excitatory with weight (w > 0) or inhibitory with weight -p(p < 0).</li>
            <li>All the excitatory connected weights entering into a particular neuron will have same weights.</li>
            <li>The threshold plays a major role in M-P neuron: There is a fixed threshold for each neuron, and if the net input to the neuron is greater than the threshold then the neuron fires.</li>
            <li>Also, it should be noted that any nonzero inhibitory input would prevent the neuron from firing. The M-P neurons are most widely used in the case of logic functions. Inputs from xi to xn possess excitatory weighted connections and inputs from xn+ 1 to xn+m possess inhibitory weighted interconnections. Since the firing of the output neuron is based upon the threshold, the activation function here is defined as</li>
            <li>The M-P neuron has no particular training algorithm. An analysis has to be performed to determine the values of the weights and the threshold. Here the weights of the neuron are set along with the threshold to make the neuron "perform a simple logic function. The M. P.  neurons are used as buildings blocks on which we can model any function or phenomenon, which can be represented as a logic function.</li>
            </ul><br>
            <b>Hebb’s Rule</b>
            <ul>
            <li>According to the Hebb rule, the weight vector is found to increase proportionately to the product of the input and the learning signal. Here the learning signal is equal to the neuron's output. In Hebb learning, if two interconnected neurons are 'on' simultaneously then the weights associated w1ih these neurons can be increased by the modification made in their synaptic gap (strength). The weight update in Hebb rule is given by wi(new) = wi(old) + xim</li>
            </ul><br>
            <b>Limitations Of M-P Neuron</b>
            <ul>
            <li>What about non-boolean (say, real) inputs?</li>
            <li>Do we always need to hand code the threshold?</li>
            <li>Are all inputs equal? What if we want to assign more importance to some inputs?</li>
            <li>What about functions which are not linearly separable? Say XOR function.</li>
            </ul><br>
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
                            <div class="col-md-3">
                                <a href="#">
                                <div class="card"> <div class="card-body" align="center">AND GATE</div>
                                </div></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                <div class="card">
                                    <div class="card-body" align="center">OR GATE</div>
                                </div></a>
                            </div>
                            <div class="col-md-3">
                                <a href="/MP_Neuron/Xor-Gate">
                                <div class="card">
                                    <div class="card-body" align="center">XOR GATE</div>
                                </div></a>
                            </div>
                            <div class="col-md-3">
                                <a href="/MP_Neuron/Nand-Gate">
                                <div class="card">
                                    <div class="card-body" align="center">NAND GATE</div>
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
            @foreach($assignments as $assignment)
            <div class="card">
                <div class="card-header">
                    <b>{{ $assignment->student_name}}</b>
                    <span>{{ $assignment->student_details}}</span>
                </div>
                <div class="card-body">
                    <b>{{ $assignment->assignment_name}}</b>
                    <br>
                    <div class="container" >
                    <pre style="margin: 20px;padding:10px;border: 1px solid black;">{{ $assignment->answer}}</pre></div>
                </div>
            </div>
            <hr>
            @endforeach
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


