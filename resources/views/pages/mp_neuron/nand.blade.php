<!DOCTYPE html>
<html lang="en">

<head>
    <title>NAND gate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <br>
        <div class="jumbotron">

            <h1>MP Neuron NAND Gate</h1>
            <div class="row">
                <div class=" col-md-6">

                    <svg height="300" width="500">
                    <line x1="50" y1="50" x2="100" y2="50" style="stroke:rgb(0,0,0);stroke-width:2" />
                    <circle cx="120" cy="50" r="25" stroke="black" stroke-width="3" fill="white" />
                    <text x="110" y="55" fill="black">X1</text>
                    <line x1="145" y1="50" x2="300" y2="50" style="stroke:rgb(0,0,0);stroke-width:2" />
                    <circle cx="320" cy="50" r="25" stroke="black" stroke-width="3" fill="white" />
                    <text x="310" y="60" fill="black">Z1</text>
                    
                    
                    <line x1="140" y1="68" x2="320" y2="225" style="stroke:rgb(0,0,0);stroke-width:2" />
                    
                    <line x1="125" y1="225" x2="300" y2="68" style="stroke:rgb(0,0,0);stroke-width:2" />
                    
                    <line x1="425" y1="140" x2="490" y2="140" style="stroke:rgb(0,0,0);stroke-width:2" />
                    
                    
                    <line x1="335" y1="70" x2="420" y2="135" style="stroke:rgb(0,0,0);stroke-width:2" />
                    <circle cx="420" cy="140" r="25" stroke="black" stroke-width="3" fill="white" />
                    <text x="415" y="145" fill="black">Y</text>
                    <line x1="335" y1="225" x2="400" y2="157" style="stroke:rgb(0,0,0);stroke-width:2" />
                    
                    
                    <line x1="50" y1="225" x2="100" y2="225" style="stroke:rgb(0,0,0);stroke-width:2" />
                    <circle cx="120" cy="225" r="25" stroke="black" stroke-width="3" fill="white" />
                    <text x="110" y="230" fill="black">X2</text>
                    <line x1="145" y1="225" x2="300" y2="225" style="stroke:rgb(0,0,0);stroke-width:2" />
                    <circle cx="320" cy="225" r="25" stroke="black" stroke-width="3" fill="white" />
                    <text x="310" y="230" fill="black">Z2</text>

                    <text x="190" y="45" fill="black">w11</text>
                    <text x="225" y="90" fill="black">w12</text>
                    <text x="225" y="185" fill="black">w21</text>
                    <text x="190" y="245" fill="black">w22</text>
                    <text x="365" y="90" fill="black">v1</text>
                    <text x="360" y="175" fill="black">v2</text>
                    
                </svg>
                </div>

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <td colspan="2">
                                <span>Weight</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> w11 :</label></td>
                            <td>
                                <input type="text" id="w11" name="w11" value="0" placeholder="W11" onkeyup="myFunction()" /><br>
                            </td>
                            <td><label> w12 :</label></td>
                            <td>
                                <input type="text" id="w12" name="w12" value="0" placeholder="W12" onkeyup="myFunction()" /><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label> w21 :</label></td>
                            <td>
                                <input type="text" id="w21" name="w21" value="0" placeholder="W21" onkeyup="myFunction()" /><br>
                            </td>
                            <td><label> w22 :</label></td>
                            <td>
                                <input type="text" id="w22" name="w22" value="0" placeholder="W22" onkeyup="myFunction()" /><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label> v1&emsp;: </label></td>
                            <td>
                                <input type="text" id="v1" name="v1" value="0" placeholder="v1" onkeyup="myFunction()" /><br>
                            </td>
                            <td><label> v2&emsp;:</label></td>
                            <td>
                                <input type="text" id="v2" name="v2" value="0" placeholder="v2" onkeyup="myFunction()" />
                    </table>
                </div>
            </div>
            <p>Output:</p>
            <p id="demo1"></p>
            <p id="demo2"></p>
            <p id="demo"></p>
        </div>
    </div>
    <script>
/*
        var w11 = document.getElementById("w11").value;
        var w12 = document.getElementById("w12").value;
        var w21 = document.getElementById("w21").value;
        var w22 = document.getElementById("w22").value;
        var v1 = document.getElementById("v1").value;
        var v2 = document.getElementById("v2").value;
        var z = [0, 1, 1, 0];
        var x1 = [0, 0, 1, 1];
        var x2 = [0, 1, 0, 1];
        var zin1 = [0, 0, 0, 0];
        var zin2 = [0, 0, 0, 0];
        var y = [0, 0, 0, 0];
        for (var i = 0; i < 4; i++) {
            zin1[i] = x1[i] * w11 + x2[i] * w21;
            zin2[i] = x1[i] * w12 + x2[i] * w22;
        }
        for (var i = 0; i < 4; i++) {
            y[i] = threshold(zin1[i]) * v1 + threshold(zin2[i]) * v2;
        }

        var flag = true;
        for (var i = 0; i < z.length; i++) {
            if (y[i] != z[i])
                flag = false;
        }
        if (flag) {
            document.getElementById("demo").innerHTML = "<b>The above solution is feasible</b>";
            document.getElementById("demo").style.color = "green";
        } else {
            document.getElementById("demo").innerHTML = "<b>The above solution is not feasible</b>";
            document.getElementById("demo").style.color = "red";
        }

        t = "<p>Z is Expected output &emsp; Y is the Actual output<table id='tt' class='table'><tr><th> X1 </th><th> X2  </th><th> Z  </th><th>  Z1  </th><th> Z2 </th><th> Y</th></tr>";

        for (var i = 0; i < 4; i++) {
            t += " <tr><td>" + x1[i] + " </td><td>" + x2[i] + " </td><td>" + z[i] + " </td><td>" + threshold(zin1[i]) + " </td><td>" + threshold(zin2[i]) + " </td><td>" + y[i] + "</td></tr>";
        }
        t += "</p>"
        document.getElementById("demo2").innerHTML = t;

        if (flag)
            document.getElementById("tt").style.color = "green";
        else
            document.getElementById("tt").style.color = "red";
*/

        function myFunction() {
            var w11 = document.getElementById("w11").value;
            var w12 = document.getElementById("w12").value;
            var w21 = document.getElementById("w21").value;
            var w22 = document.getElementById("w22").value;
            var v1 = document.getElementById("v1").value;
            var v2 = document.getElementById("v2").value;
            var z = [1, 1, 1, 0];
            var x1 = [0, 0, 1, 1];
            var x2 = [0, 1, 0, 1];
            var zin1 = [0, 0, 0, 0];
            var zin2 = [0, 0, 0, 0];
            var y = [0, 0, 0, 0];
            for (var i = 0; i < 4; i++) {
                zin1[i] = x1[i] * w11 + x2[i] * w21;
                zin2[i] = x1[i] * w12 + x2[i] * w22;
            }
            for (var i = 0; i < 4; i++) {
                y[i] = threshold_Zin(zin1[i]) * v1 + threshold_Zin(zin2[i]) * v2;
		y[i] = threshold(y[i]);
            }

            var flag = true;
            for (var i = 0; i < z.length; i++) {
                if (y[i] != z[i])
                    flag = false;
            }
            if (flag) {
                document.getElementById("demo").innerHTML = "<b>The above solution is feasible</b>";
                document.getElementById("demo").style.color = "green";
            } else {
                document.getElementById("demo").innerHTML = "<b>The above solution is not feasible</b>";
                document.getElementById("demo").style.color = "red";
            }
            t = "<p>Z is Expected output<br>Y is the Actual output<br><table id='tt' class='table'><tr><th> X1 </th><th> X2  </th><th> Z  </th><th>  Z1  </th><th> Z2 </th><th> Y</th></tr>";
            for (var i = 0; i < 4; i++) {
                t += " <tr><td>" + x1[i] + " </td><td>" + x2[i] + " </td><td>" + z[i] + " </td><td>" + threshold_Zin(zin1[i]) + " </td><td>" + threshold_Zin(zin2[i]) + " </td><td>" + y[i] + "</td></tr>";
            }
            t += "</p>"
            document.getElementById("demo2").innerHTML = t;


            if (flag)
                document.getElementById("tt").style.color = "green";
            else
                document.getElementById("tt").style.color = "red";


        }

        function threshold_Zin(theta) {
            return (theta > -1) ? 1 : 0;
        }

	function threshold(y) {
	    return (y > 0) ? 1 : 0;
	}

	/* Feasible Soln : w11 = -1, w12 = 0, w21 = 0, w22 = -1, v1 = 1, v2 = 1*/

    </script>
</body>

  </html>

