@extends('layouts.app')

@section('title')
<title>Prolog</title>
@endsection

@section('content')

<div class="main" style="padding-right: 10%;">
    <br>

    <div class="container" style="min-height: 700px;">

    <h2>Prolog</h2>
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
            <b>Aim:</b><br>
            <b>Objective:</b>
            <ul>
            <li>Familiarity with the Prolog programming environment.</li>
            <li>Tutorial introduction to Prolog programming.</li>
            <li>Understanding the under the hood workings of Prolog interpreter.</li>
            <li>Developing a procedural code which imitates the declarative style of Prolog programming by focusing on matching algorithm followed by Prolog interpreter.</li>
            <li>Understanding the concept of arithmetic expressions in Prolog.</li>
            <li>Writing illustrative examples and solving exercises related to various user-defined operators in Prolog.</li>
            </ul><br>
        <!-- </div>
        <div id="theory" class="container tab-pane active"><br> -->
            <h4>Prolog : Programming in logic</h4>
            <b>Main advantages</b><br>
            <ul>
            <li>Ease of representing knowledge</li>
            <li>Natural support of non-determinism</li>
            <li>Natural support of pattern-matching</li>
            <li>Natural support of meta-programming</li>
            <li>Meaning of programs is independent of how they are executed</li>
            <li>Simple connection between programs and computed answers and specifications</li>
            <li>No need to distinguish programs from databases</li>
            </ul><br>

            <b>Notes :</b><br>
            <ul>
            <li>Prolog programs consist of clauses, each terminated with a full-stop (.). </li>
            <li>A relation can be defined in form of n-tuple.</li>
            <li>Arguments to the relation can be of two types – atoms and variables</li>
            <li>Clauses are of three types – facts, rules and questions. Facts declare statements that are unconditionally true, rules are statements that are true based on certain conditions and through questions, user can ask what is true and what is false.</li>
            <li>Questions are given as goals to be satisfied whose answers are “yes” or “no”.</li>
            <li>Prolog clauses consist of head and body, body consist of list of goals separated by comma (,) where a comma is a conjunction.</li>
            <li>Facts are prolog clauses with empty body.</li>
            <li>Predecessor relation (formed using recursive rule) is composed of two rules. First rule determines direct relation while second rule determines indirect relation.</li>
            <li>Prolog programs explains declarative and procedural meanings, declarative decides the output of the program while procedural decides how the output is obtained.</li>
            <li>Emphasis upon the declarative style of programming.</li>
            </ul><br>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <h3 align="center">Simulation</h3>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. Monekey Banana Problem</button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="panel-body" data-pym-src="https://www.jdoodle.com/embed/v0/2RBS"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. List Basic Problems</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="panel-body" data-pym-src="https://www.jdoodle.com/iembed/v0/784"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. 8 Puzzle Problem</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="panel-body" data-pym-src="https://www.jdoodle.com/embed/v0/2ZaP"></div>
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
<script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
    });
    </script>
@endsection


