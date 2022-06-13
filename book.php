<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Ticket Booking System</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
   
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //fonts -->
</head>

<body onload="onLoaderFunc()">
<form method="post" action="insertdata.php">
    <h1>Movie Seat Selection</h1>
    <div class="container">

        <div class="w3ls-reg">
            <!-- input fields -->
            <div class="inputForm">
                <h2>Fill the required details below and select your seats</h2>
                <div class="mr_agilemain">
                    <div class="agileits-left">
                        <label> Name
                            <span>*</span>
                        </label>
                        <input type="text" name="uname" id="Username" required>
                    </div>
                    <div class="agileits-right">
                        <label> Number of Seats
                            <span>*</span>
                        </label>
                        <input type="number" id="Numseats" name="useat" required min="1">
                    </div>
                </div>
                <div class="mr_agilemain">
                    <div class="agileits-left">
                        <label> Moblie No
                            <span>*</span>
                        </label>
                        <input type="text" id="Mobile" name="uphone" required>
                    </div>
                    <div class="agileits-right">
                        <label> City
                            <span>*</span>
                        </label>
                        <input type="text" id="City" name="ucity" required min="1">
                    </div>
                </div>
                <div class="mr_agilemain">
                    <div class="agileits-left">
                        <label> Date of Birth
                            <span>*</span>
                            <br><br>
                        </label>
                        <input  name="ubirth" style="background:transparent;
                         border: 1px solid #888686;
                         color: #f5f5f5;
                         width:315px;
                         height: 35px;
                         margin-bottom:10px;
                         font-weight: 600;
                         padding: 8px 10px;
                         font-size: 1em;
                         letter-spacing: 1px;
                         font-family: 'Source Sans Pro', sans-serif;
                         cursor: pointer;" type="Date" id="Mobile" required >
                    </div>
                    <div class="agileits-right">
                    <label> Gender
                            <span>*</span>
                            <br><br>
                        </label>
                        <select name="ugender" class="form-control" style="background: transparent;
                         border:1px solid #888686;
                         color:  #f5f5f5;
                         width:240px;
                         height: 53px;
                         font-weight: 600;
                         padding: 8px 10px;
                         font-size: 1em;
                         letter-spacing: 1px;
                         font-family: 'Source Sans Pro', sans-serif;
                         cursor: pointer;">
                       <option selected>Male</option>
                       <option>Female </option>
                       <option>Other</option>
                      </select>
                    </div>
                </div>
                <div class="mr_agilemain">
                <div class="agileits-left">
                        <label> E-mail
                            <span>*</span>
                            <br><br>
                        </label>
                        <input type="email" id="City" style="background:transparent;
                         border: 1px solid #888686;
                         color: #f5f5f5;
                         width:315px;
                         height: 35px;
                         margin-bottom:10px;
                         font-weight: 600;
                         padding: 8px 10px;
                         font-size: 1em;
                         letter-spacing: 1px;
                         font-family: 'Source Sans Pro', sans-serif;
                         cursor: pointer;" name="uemail" required min="1">
                    </div>
                
                    <div class="agileits-right">
                        <label>Select a Movie:
                            <span>*</span>
                          <br><br>
                       
                        <select class="form-control" name="movie" style="background: transparent;
                          border:1px solid #888686;
                          color:  #f5f5f5;
                          width:240px;
                          height: 53px;
                          font-weight: 600;
                          padding: 8px 10px;
                          font-size: 1em;
                          letter-spacing: 1px;
                          font-family: 'Source Sans Pro', sans-serif;
                          cursor: pointer;">
                      
                           <option value="100">Black Window</option>
                           <option value="150">Shang-Chi and the Legend of the Ten Rings</option>
                           <option value="200">The Eternals</option>
                          <option value="120">Dr Strenger</option>
                        </select>
                      
                        </label>
                    </div>
                </div>
                <button  onclick="takeData()">Start Selecting</button>
            </div>
            </form>
            <!-- //input fields -->
            <!-- seat availabilty list -->
            <ul class="seat_w3ls">
                <li class="smallBox greenBox">Selected Seat</li>

                <li class="smallBox redBox">Reserved Seat</li>

                <li class="smallBox emptyBox">Empty Seat</li>
            </ul>
            <!-- seat availabilty list -->
            <!-- seat layout -->
            <div class="seatStructure txt-center" style="overflow-x:auto;">
                <table id="seatsBlock">
                    <p id="notification"></p>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td></td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>
                            <input type="checkbox" class="seats" value="A1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats sold" value="A4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A5">
                        </td>
                        <td class="seatGap"></td>
                        <td>
                            <input type="checkbox" class="smallBox " value="A6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A8">
                        </td>
                        <td>
                            <input type="checkbox" class="smallBox " value="A9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="A12">
                        </td>
                    </tr>

                    <tr>
                        <td>B</td>
                        <td>
                            <input type="checkbox" class="seats" value="B1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="B6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="B12">
                        </td>
                    </tr>

                    <tr>
                        <td>C</td>
                        <td>
                            <input type="checkbox" class="seats" value="C1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="C6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="C12">
                        </td>
                    </tr>

                    <tr>
                        <td>D</td>
                        <td>
                            <input type="checkbox" class="seats" value="D1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="D6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="D12">
                        </td>
                    </tr>

                    <tr>
                        <td>E</td>
                        <td>
                            <input type="checkbox" class="seats" value="E1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="E6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="E12">
                        </td>
                    </tr>

                    <tr class="seatVGap"></tr>

                    <tr>
                        <td>F</td>
                        <td>
                            <input type="checkbox" class="seats" value="F1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="F6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="F12">
                        </td>
                    </tr>

                    <tr>
                        <td>G</td>
                        <td>
                            <input type="checkbox" class="seats" value="G1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="G6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="G12">
                        </td>
                    </tr>

                    <tr>
                        <td>H</td>
                        <td>
                            <input type="checkbox" class="seats" value="H1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="H6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="H12">
                        </td>
                    </tr>

                    <tr>
                        <td>I</td>
                        <td>
                            <input type="checkbox" class="seats" value="I1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="I6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="I12">
                        </td>
                    </tr>

                    <tr>
                        <td>J</td>
                        <td>
                            <input type="checkbox" class="seats" value="J1">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J2">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J3">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J4">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J5">
                        </td>
                        <td></td>
                        <td>
                            <input type="checkbox" class="seats" value="J6">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J7">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J8">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J9">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J10">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J11">
                        </td>
                        <td>
                            <input type="checkbox" class="seats" value="J12">
                        </td>
                    </tr>
                </table>
<div class="row">           
   <p class="text" style="margin-left: 90px; color:white; font-size: 15px; margin-top:20px; padding:10px; margin-left:10px">
      You have selected <span id="count">0</span> seat for a price of RS.<span id="total">0</span>
   </p>
</div>
    <div class="row">
    <input id="reset" type="RESET" style="background: #f5f5f5;
    border: none;
    color: #000;
    font-weight: 600;
    padding: 8px 20px;
    border-radius: 10px;
    font-size: 1em;
    letter-spacing: 1px;
    font-family: 'Source Sans Pro', sans-serif;
    cursor: pointer;">
       
        <br><br>
    </div>

                <div class="screen">
                    <h2 class="wthree">Screen this way</h2>
                </div>
                <button onclick="updateTextArea()">Confirm Selection</button>
            </div>
            <!-- //seat layout -->
            <!-- details after booking displayed here -->
            <div class="displayerBoxes txt-center" style="overflow-x:auto;">
                <table class="Displaytable w3ls-table" width="100%">
                    <tr>
                        <th>Name</th>
                        <th>Number of Seats</th>
                        <th>Seats</th>
                    </tr>
                    <tr>
                        <td>
                            <textarea id="nameDisplay"></textarea>
                        </td>
                        <td>
                            <textarea id="NumberDisplay"></textarea>
                        </td>
                        <td>
                            <textarea id="seatsDisplay"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <a href="payment.php" type="submit" class="btn btn-info" style="background: #f5f5f5;
    border: none;
    color: #000;
    font-weight: 600;
    margin-top:20px;
    margin-left: 200px;
    padding: 8px 20px;
    border-radius: 10px;
    font-size: 1em;
    letter-spacing: 1px;
    font-family: 'Source Sans Pro', sans-serif;
    cursor: pointer;">Make Payment</a>
    

            <!-- //details after booking displayed here -->
        </div>
    </div>

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for seat selection -->
    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {
            if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0)) {
                alert("Please Enter your Name and Number of Seats");
            } else {
                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                document.getElementById("notification").innerHTML =
                    "<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
            }
        }


        function updateTextArea() {

            if ($("input:checked").length == ($("#Numseats").val())) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];

                //Storing in Array
                allNameVals.push($("#Username").val());
                allNumberVals.push($("#Numseats").val());
                $('#seatsBlock :checked').each(function () {
                    allSeatsVals.push($(this).val());
                });

                //Displaying 
                $('#nameDisplay').val(allNameVals);
                $('#NumberDisplay').val(allNumberVals);
                $('#seatsDisplay').val(allSeatsVals);
            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }


        function myFunction() {
            alert($("input:checked").length);
        }

       

        $(":checkbox").click(function () {
            if ($("input:checked").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
        $(document).ready(function(){
         var cnt = 0;
         var amt = 0;
      $(".seats").click(function(){
       $(this).css("background","green"); 
       $(this).css("color","white"); 
       cnt = cnt+1;
       amt = amt + 100;
       $("#count").text(cnt);
       $("#total").text(amt);
     });
   });
    </script>
    <!-- //script for seat selection -->

</body>

</html>