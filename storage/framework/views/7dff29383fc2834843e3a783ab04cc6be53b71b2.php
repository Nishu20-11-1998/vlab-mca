<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <link rel="icon" href="<?php echo e(asset('img/SPIT_logo.png')); ?>" type="image/icon type">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <?php echo $__env->yieldContent('title'); ?>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    </head>
    <body>

        <div id="wrapper" class="home-page">
            <header>
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 col-sm-2 col-xs-3">
                                <a class="navbar-brand pull-left" href="/"><img src="<?php echo e(asset('img/SPIT_logo.png')); ?>"/></a>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-9">
                                <a class="navbar-brand pull-left" href="/"><img src="<?php echo e(asset('img/logo.gif')); ?>"/></a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="container">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item" id="spithome">
                                    <a class="nav-link" href="https://www.spit.ac.in/" target="_blank">SPIT</a>
                                </li>
                                <li class="nav-item" id="home">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </header>

            <div class="sidenav">
                <a href="/Prolog">Prolog</a>
                <a href="/MP_Neuron">MP Neuron</a>
            </div>

        </div>

        <?php echo $__env->yieldContent('content'); ?>



        <!-- Footer -->
        <footer class="font-small text-white mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>© SPIT R&D 2019 All Right Reserved.</strong></p>
                    </div>

                    <div class="col-md-6">
                        <button id="scroll-to-top"><i class="fa fa-angle-double-up"></i></button>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });





        </script>

        <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

        <?php echo $__env->yieldContent('javascripts'); ?>

    </body>
</html>
<?php /**PATH C:\Users\nisar\OneDrive\Documents\GitHub\vlab-mca\resources\views/layouts/app.blade.php ENDPATH**/ ?>