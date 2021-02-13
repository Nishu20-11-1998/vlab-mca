// adding smooth scrolling
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            $("#scroll-to-top").fadeIn();
        } else {
            $("#scroll-to-top").fadeOut();
        }
    });

    // Adding scoll-to-top animation
    $("#scroll-to-top").click(function () {
        $("html,body").animate({ scrollTop: 0 }, 1000);
    });

    $(".addDepart").click(function () {
        $("#departRow2").css("display:block");
    });
});

// Adding Applicants and Guides
var countDepart = 0;
function displayGuide() {
    countDepart++;
    if (countDepart == 1) {
        document.getElementById("departRow2").style.display = "";
    } else {
        document.getElementById("departRow2").style.display = "none";
        countDepart = 0;
    }
}

var count = 0;
function displayApplicant() {
    count++;
    console.log(count);
    if (count == 1) {
        document.getElementById("applicantRow2").style.display = "";
    } else if (count == 2) {
        document.getElementById("applicantRow3").style.display = "";
    } else if (count == 3) {
        document.getElementById("applicantRow4").style.display = "";
    } else {
        document.getElementById("applicantRow2").style.display = "none";
        document.getElementById("applicantRow3").style.display = "none";
        document.getElementById("applicantRow4").style.display = "none";
        count = 0;
    }
}
