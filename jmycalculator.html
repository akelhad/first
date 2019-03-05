<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>

    <link href="css/fontawesome/all.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/jquery-ui.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome/all.js"></script>
    <script src="js/jquery.color.js"></script>

    <style>
        .btn-outline-primary {
            width: 70px;
        }
        #screen2 {
            color: silver;
            height: 30px;
        }
    </style>
</head>

<body>
    <div class="container" style="width: 350px;">
        <table class="table">
            <tr>
                <td colspan="4">
                    <h2 id="screen"></h2>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <h2 id="screen2"></h2>
                </td>
            </tr>


            <tr>
                <td>
                    <button class="btn-outline-primary btn-lg" id="11">C</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="12">del</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="%">%</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="/">/</button>
                </td>
            </tr>

            <tr>
                <td>
                    <button class="btn-outline-primary btn-lg" id="1">1</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="2">2</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="3">3</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="*">X</button>
                </td>
            </tr>



            <tr>
                <td>
                    <button class="btn-outline-primary btn-lg" id="4">4</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="5">5</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="6">6</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="-">-</button>
                </td>
            </tr>





            <tr>
                <td>
                    <button class="btn-outline-primary btn-lg" id="7">7</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="8">8</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="9">9</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="+">+</button>
                </td>
            </tr>



            <tr>
                <td>
                    <button class="btn-outline-primary btn-lg" id="18">+/-</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="0">0</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id=".">.</button>
                </td>
                <td>
                    <button class="btn-outline-primary btn-lg" id="20">=</button>
                </td>
            </tr>



        </table>



    </div>


    <script type="text/javascript">
        var holder = 0;
        var prevresultholder = 0;
        var operatorcount = 0;
        var operatorarray = [];
        var screenholderarray = [];
        var regx = new RegExp(/[-|\+|\*|\/]/, 'gi');
        var regxfull = new RegExp(/([0-9]{1,}[.0-9]{0,})([-|\+|\*|\/])([0-9]{1,}[.0-9]{0,})/, 'gi');


        function is_operator(inp) {

            var buttonuniq = Array();
            buttonuniq = ["+", "-", "*", "/", "%"];
            var len = buttonuniq.length;
            for (var i = 0; i < len; i++) {
                if (buttonuniq[i] == inp) return true;
            }
            return false;
        }


        var screen = document.getElementById("screen");
        screen.innerHTML = 0;
        var screen2 = document.getElementById("screen2");
        screen2.innerHTML = 0;
        var httprequest = new XMLHttpRequest();
        var httprequest2 = new XMLHttpRequest();

        $(".btn-outline-primary").click(function() {

            if (($(this).attr("id") == 18 || $(this).attr("id") == 12 || $(this).attr("id") == 20) && screen.innerHTML == 0) {
                screen.innerHTML = screen.innerHTML;
            } else if (screen.innerHTML == 0) {
                if ($(this).attr("id") == 11) {
                    screen.innerHTML = 0;
                } else {
                    screen.innerHTML = $(this).attr("id");
                }

            } else if ($(this).attr("id") == 12) {
                if (screen.innerHTML.length == 1) {
                    screen.innerHTML = 0;
                } else if (screen.innerHTML == 0) {
                    screen.innerHTML = 0;
                } else {
                    screen.innerHTML = screen.innerHTML.substr(0, screen.innerHTML.length - 1);
                }

            } else if ($(this).attr("id") == 11) {
                screen.innerHTML = 0;
            } else if ($(this).attr("id") == 18) {
                if (screen.innerHTML[0] == '-') {
                    screen.innerHTML = screen.innerHTML.substr(1, screen.innerHTML.length);
                } else {
                    screen.innerHTML = '-' + screen.innerHTML;
                }
            } else {
                if ($(this).attr("id") != 20) {
                    screen.innerHTML += $(this).attr("id");
                }
            }


            var lastchecker = '';
            var last = screen.innerHTML[screen.innerHTML.length - 1];
            var beforelast = screen.innerHTML[screen.innerHTML.length - 2];
            if (is_operator(beforelast)) {
                if (is_operator(last)) {
                    screen.innerHTML = screen.innerHTML.substr(0, screen.innerHTML.length - 2) + last;
                }
            }




            if ($(this).attr("id") == 20) {}

            screen2.innerHTML = loopscreen();

        })


        function findoperator() {
            var subfinal = 0;
            if (operatorarray[operatorcount - 2] == '+') {
                subfinal = Number(screenholderarray[0]) + Number(screenholderarray[1]);
            }
            if (operatorarray[operatorcount - 2] == '-') {
                subfinal = Number(screenholderarray[0]) - Number(screenholderarray[1]);
            }
            if (operatorarray[operatorcount - 2] == '*') {
                subfinal = Number(screenholderarray[0]) * Number(screenholderarray[1]);
            }
            if (operatorarray[operatorcount - 2] == '/') {
                subfinal = Number(screenholderarray[0]) / Number(screenholderarray[1]);
            }

            console.log(subfinal);
            return (subfinal)
        }




        function loopscreen() {

            if (screen.innerHTML.match(regx) != null) {

                operatorarray = screen.innerHTML.match(regx);
                operatorcount = operatorarray.length;
                if (operatorcount > 1) {
                    var sett = clearfix(screen.innerHTML.split(regxfull));
                    console.log(sett)

                    screenholderarray = screen.innerHTML.split(regx);
                    findoperator();
                }


            }
        }

        function clearfix(t) {
            var newt = [];
            t.splice(0, 1);
            t.pop()
            for (var x = 0; x < t.length; x++) {
                if (t[x] != '' || t[x] != null) {
                    newt[x] = t[x];
                }
            }
            return newt;
        }

    </script>


</body>

</html>
<?php 
echo 'hellow'; 
if($x==1 ){ 
    echo 2; 
} 
?>
