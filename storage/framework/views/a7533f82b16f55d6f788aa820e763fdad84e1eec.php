

<?php $__env->startSection('title'); ?>
<title>Prolog</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
                            <p>8 Puzzle Problem</p>
                        </div>
                    </div>
                </div>
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
<script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
    });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nisar\OneDrive\Documents\GitHub\vlab-mca\resources\views/pages/prolog.blade.php ENDPATH**/ ?>