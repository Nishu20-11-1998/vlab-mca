

<?php $__env->startSection('title'); ?>
<title>SPIT R & D</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="main mt-4 mb-2">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="container mt-2">
                        <?php if(count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php echo e($error); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php if(session('Success')): ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo e(session('Success')); ?>

                            </div>  
                        <?php endif; ?>

                        <?php if(session('Error')): ?>
                            <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo e(session('Error')); ?>

                            </div>  
                        <?php endif; ?>
                    </div>

                    <h2 class="page-title">Post Paper</h2>
                    <hr>

                    <div class="card">
                        <div class="card-header">Basic Info</div>
                            <form method="POST" action="<?php echo e(action('PostsController@store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                
                                <p class="menu m-4">Applicants</p>
                                <div id="dynamic_field">
                                    <div class="row ml-5 mr-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Applicant</label>
                                                <input type="text" class="form-control" name="UCID" id="ucid1" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Applicant</label>
                                                <input type="email" class="form-control" name="Email_of_applicant">
                                            </div>
                                            <div class="form-group">
                                                <label>Department of Applicant</label>
                                                <input type="email" class="form-control" name="Department_of_applicant">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Description</label>
                                                <input type="text" class="form-control" name="idea_description">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Name</label>
                                                <input type="text" class="form-control" name="mentor_name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Applicant</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile No. of Applicant</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Title</label>
                                                <input type="text" class="form-control" name="idea_title">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Domain</label>
                                                <input type="text" class="form-control" name="idea_domain">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Department</label>
                                                <input type="text" class="form-control" name="mentor_department">
                                            </div>
                                        </div>

                                        <div class="container"><hr></div>

                                    </div>
                                
                                    <div class="row ml-5 mr-5"  id="applicantRow2" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Appli.2</label>
                                                <input type="text" class="form-control" name="UCID2" id="ucid2" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Appli.2</label>
                                                <input type="email" class="form-control" name="Email_of_applicant2">
                                            </div>
                                            <div class="form-group">
                                                <label>Department of Applicant</label>
                                                <input type="email" class="form-control" name="Department_of_applicant2">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Description</label>
                                                <input type="text" class="form-control" name="idea_description2">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Name</label>
                                                <input type="text" class="form-control" name="mentor_name2">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Appli.2</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant2">
                                            </div>
                                            <div class="form-group">
                                                <label>Mb. No. of Appli.2</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant2">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Title</label>
                                                <input type="text" class="form-control" name="idea_title2">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Domain</label>
                                                <input type="text" class="form-control" name="idea_domain2">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Department</label>
                                                <input type="text" class="form-control" name="mentor_department2">
                                            </div>
                                        </div>

                                        <div class="container"><hr></div>
                                    </div>

                                    <div class="row ml-5 mr-5" id="applicantRow3" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Appli.3</label>
                                                <input type="text" class="form-control" name="UCID3" id="ucid3" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Appli.3</label>
                                                <input type="email" class="form-control" name="Email_of_applicant3">
                                            </div>
                                            <div class="form-group">
                                                <label>Department of Applicant</label>
                                                <input type="email" class="form-control" name="Department_of_applicant3">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Description</label>
                                                <input type="text" class="form-control" name="idea_description3">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Name</label>
                                                <input type="text" class="form-control" name="mentor_name3">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Appli.3</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant3">
                                            </div>
                                            <div class="form-group">
                                                <label>Mb. No. of Appli.3</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant3">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Title</label>
                                                <input type="text" class="form-control" name="idea_title3">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Domain</label>
                                                <input type="text" class="form-control" name="idea_domain3">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Department</label>
                                                <input type="text" class="form-control" name="mentor_department3">
                                            </div>
                                        </div>
                                        <div class="container"><hr></div>
                                    </div>

                                    <div class="row ml-5 mr-5" id="applicantRow4" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UCID of Appli.4</label>
                                                <input type="text" class="form-control ucid" name="UCID4" id="ucid4" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Email of Appli.4</label>
                                                <input type="email" class="form-control" name="Email_of_applicant4">
                                            </div>
                                            <div class="form-group">
                                                <label>Department of Applicant</label>
                                                <input type="email" class="form-control" name="Department_of_applicant4">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Description</label>
                                                <input type="text" class="form-control" name="idea_description4">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Name</label>
                                                <input type="text" class="form-control" name="mentor_name4">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name of Appli.4</label>
                                                <input type="text" class="form-control" name="Name_of_Applicant4">
                                            </div>
                                            <div class="form-group">
                                                <label>Mb. No. of Appli.4</label>
                                                <input type="text" class="form-control" name="Mb_no_of_applicant4">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Title</label>
                                                <input type="text" class="form-control" name="idea_title4">
                                            </div>
                                            <div class="form-group">
                                                <label>Idea Domain</label>
                                                <input type="text" class="form-control" name="idea_domain4">
                                            </div>
                                            <div class="form-group">
                                                <label>Mentor Department</label>
                                                <input type="text" class="form-control" name="mentor_department4">
                                            </div>
                                        </div>  
                                    </div> 
                                    <button type="button" onclick="displayApplicant()" class="btn btn-primary btn-sm addApplicantButton">Add Applicant</button>
                                </div>

                                <div class="container"><hr></div>

                                <div id="paper_details">
                                    <input type="text" class="form-control" name="paper_id" id="paper_details2" hidden>
                                </div>

                                <div class="container mb-4 mt-4">
                                    <button class="bttn">Cancel</button>
                                    <button type="submit" class="bttn">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="http://code.jquery.com/jquery-3.4.1.js"></script> -->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('javascripts'); ?>

<script>


// paper id
// rnd_Year/U/P/Ph/Ph_F/S_J/id
//comboRndYear comboRndType typeOfAppli comboPaperType
//getComboRndYear(this) getComboRndType(this) getComboTypeOfAppli(this) getComboPaperType(this)
var rndyearvalue, rndtypevalue, typeapplivalue, typeapplivalue2, papertypevalue, papertypevalue2, paperidres;

function getComboRndYear(obj){
    rndyearvalue = obj.value;

    let paperid = document.getElementById("paper_details2");

    let paperidres = rndyearvalue;

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboRndType(obj){
    rndtypevalue = obj.value;

    if(rndtypevalue == "PhD"){
        rndtypevalue = rndtypevalue.substring(0,2);
        paperidres = rndyearvalue + "/" + rndtypevalue;
        
    }else{
        rndtypevalue = rndtypevalue.substring(0,1);
        paperidres = rndyearvalue + "/" + rndtypevalue;
    }

    let paperid = document.getElementById("paper_details2");

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboTypeOfAppli(obj){
    typeapplivalue = obj.value;

    if (typeapplivalue == "Faculty") {
        document.getElementById("ucid1").disabled = true;
        document.getElementById("ucid2").disabled = true;
        document.getElementById("ucid3").disabled = true;
        document.getElementById("ucid4").disabled = true;
    } else {
        document.getElementById("ucid1").disabled = false;
        document.getElementById("ucid2").disabled = false;
        document.getElementById("ucid3").disabled = false;
        document.getElementById("ucid4").disabled = false;
    }

    typeapplivalue2 = typeapplivalue.substring(0,1);
    
    let paperid = document.getElementById("paper_details2");

    let paperidres = rndyearvalue + "/" + rndtypevalue + "/" + typeapplivalue2;

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboPaperType(obj){
    papertypevalue = obj.value;
    papertypevalue2 = papertypevalue.substring(0,1);
    
    let paperid = document.getElementById("paper_details2");

    let paperidres = rndyearvalue + "/" + rndtypevalue + "/" + typeapplivalue2 + "/" + papertypevalue2;

    paperid.setAttribute('value', paperidres);
    console.log(paperid.value);
}

function getComboFacultyName(obj){
    facultynameavalue = obj.value;
}

// Dynamic Dropdown for department and name of guide
$(document).ready(function () {
                $(document).on('change', '#Department_of_Guide', function () {
                let id = $(this).val();
                // console.log(id);
                $('#Name_of_Guide').empty();
                $('#Name_of_Guide').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMainCatEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#Name_of_Guide').empty();
                $('#Name_of_Guide').append(`<option value="0" disabled selected>Select Name Of Guide</option>`);
                response.forEach(element => {
                    $('#Name_of_Guide').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
        });
    });

    $(document).ready(function () {
                $(document).on('change', '#Department_of_Guide2', function () {
                let id = $(this).val();
                // console.log(id);
                $('#Name_of_Guide2').empty();
                $('#Name_of_Guide2').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMainCatEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#Name_of_Guide2').empty();
                $('#Name_of_Guide2').append(`<option value="0" disabled selected>Select Name Of Guide</option>`);
                response.forEach(element => {
                    $('#Name_of_Guide2').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
        });
    });

// Displaying amount on button clicked
// displayAmount
var countAmount = 0;

function displayAmount() {
    countAmount++;
    if (countAmount == 1) {
        document.getElementById("amountSection").style.display = "";
    } else {
        document.getElementById("amountSection").style.display = "none";
        countAmount = 0;
    }
}

// Calculating total amount
var registration_amt = document.querySelector("#registration_amt > input");
var Travelling_amt = document.querySelector("#Travelling_amt > input");
var Accommodation_amt = document.querySelector("#Accommodation_amt > input");
var other_expenses_amt = document.querySelector("#other_expenses_amt > input");
var total_amount = document.querySelector("#total_amount > input");

function totalAmount() {
    var one = parseFloat(registration_amt.value) || 0;
    var two = parseFloat(Travelling_amt.value) || 0;
    var three = parseFloat(Accommodation_amt.value) || 0;
    var four = parseFloat(other_expenses_amt.value) || 0;

    total_amount.value = one + two + three + four;

    if (total_amount.value != 0) {
        document.getElementById("supporting_proof").style.display = "";
    } else {
        document.getElementById("supporting_proof").style.display = "none";
    }
}

function main() {
    registration_amt.addEventListener("input", totalAmount);
    Travelling_amt.addEventListener("input", totalAmount);
    Accommodation_amt.addEventListener("input", totalAmount);
    other_expenses_amt.addEventListener("input", totalAmount);
}

main();
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\iedc\resources\views/pages/postPaper.blade.php ENDPATH**/ ?>