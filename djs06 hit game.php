

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=0.6, user-scalable=no, shrink-to-fit=yes">
    <title>Hit Game</title>
    <style>
    html, body {
        position:fixed;
        left: 10px;
        right: 10px;
        overflow:hidden;
    }
    button{
        height:45px;
        width:160px;
        padding: 5px 8px;
        margin: 0 20px;
        text-align: center;
        font-size: 110%;
    }
        #result{
            display: none;
            font-size: 120%;
            position: absolute;
            top:130px;
            left: 100px;
            right:100px;
            text-align: center;
            background-color: darkblue;
            color: white;
            height: 160px;
            padding: 30px 10px;
            z-index: 3;
            border: 3px solid yellow;
            box-shadow: 0 0 8px yellow;
            opacity: 0.8;
            filter: alpha(opacity=80);
            transition: all 0.5s;
            
        }
        h1,h2,h3,.container,#container{
            margin: 0 auto;
            text-align: center;
        }
        input{
            width: 90px;
            font-size: 130%;
        }
        
        .gameboard {
            width: 650px;
            height: 100%;
            margin: 0 auto;
            border: 1px solid #ddd;
        }
        
        .office {
            float: left;
            width: 150px;
            height: 170px;
            overflow: hidden;
            position: relative;
            border: 1px solid #ddd;
            margin: 10px 30px;
        }
        
        .desk {
            width: 100%;
            height: 50px;
            bottom: 0px;
            position: absolute;
            background-color: burlywood;
            z-index: 2;
        }
        
        .computer {
            background: url('https://classroomclipart.com/images/gallery/Clipart/Animals/Mouse_Clipart/TN_mouse-holding-cheese-clipart.jpg') bottom center no-repeat;
            background-size: 100% 100%;
            position: absolute;
            top: 100%;
            width: 90%;
            height: 70%;
            transition: all 0.5s;
        }
        
        .popup {
            top: 0;
        }
        .inline{
            display: inline-block;
            margin: 0 auto;
            text-align: center;
            padding: 0 20px;
        }
        
        .on{
            color:black;
            background-color: yellow;
            border:1px solid skyblue;
            margin: 3px;
            box-shadow: 0 0 5px cornsilk;
            transition: all 0.3s;
        }
        .on:hover{
            color:white;
            border:1px solid blue;
            background-color: blue;
            box-shadow: 0 0 5px yellow;
        }
    </style>
</head>

<body><div id="container" >
      <div class="inline"> <h3> clicks :<span class="clickat">0</span></h3></div>
    <div class="inline"> <h2> Score:<span class="score">0</span></h2></div>
      <div class="inline"> <h3> Popups:<span class="popup">0</span></h3></div>
      <div class="inline"> <h3> Time :<span class="timming">0</span></h3></div>
     </div>
     <div id="result"> </div>
    <div class="container" >
        square count : <input type="nember" oninput="updateoffices()"   value="6" id="offices"> 
        <button type="button" onclick="start()" class="on" >Play Game</button> max popups : <input type="nember" oninput="updatelimiteroff()"   value="20" id="limiteroff"><br>
        <button type="button"  class="level on" level-data="easy"  onclick="setlevel(this.getAttribute('level-data'))" >Easy</button>
        <button type="button"  class="level on" level-data="med"  onclick="setlevel(this.getAttribute('level-data'))" >Medium</button>
        <button type="button"  class="level on" level-data="hard"  onclick="setlevel(this.getAttribute('level-data'))" >Hard</button>
    <div class="gameboard"></div>
    </div>
    
   
    <script>
        document.ready = function(){
         var keyCodes = [61, 107, 173, 109, 187, 189];

         document.keydown = function(event) {   
           if (event.ctrlKey==true && (keyCodes.indexOf(event.which) != -1)) {
            // alert('disabling zooming'); 
             event.preventDefault();
            }
         };
        };
        
        
        window.onload = build;
        var limiteroff = 20 ;
        var starttime , endtime , takentime ;
        var computer , level ;
        var offices = 6;
        var timer ;
        var addedtime = 400 ;
        var sCom;
        var score = 0;
        var cOff = true;
        var popups = 0 ;
        var clickat = 0 ;
        var gameboard = document.querySelector('.gameboard');
        var bgimg , rTime  ;
        var images = ["https://classroomclipart.com/images/gallery/Clipart/Animals/Mouse_Clipart/TN_mouse-holding-cheese-clipart.jpg" , "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQizYRMTS3wZHzsv8qlCebaedVhn4Y2G1xyoF8jekxWtYcXjLeP" , "https://classroomclipart.com/images/gallery/Clipart/Animals/Mouse_Clipart/TN_baby-mouse-waving-cartoon-style-clipart-84343.jpg" , "https://previews.123rf.com/images/iimages/iimages1212/iimages121200385/16969744-ilustraci%C3%B3n-de-un-rat%C3%B3n-y-un-queso-en-un-fondo-blanco.jpg"];
        
        var result =  document.querySelector('#result') ;
        
        function setlevel(l){
            if(l == 'easy'){
                addedtime = 600 ;
                offices = 3;
                document.getElementById('offices').value = 3;
                limiteroff = 10 ; document.getElementById('limiteroff').value = 10;
            }else if(l == 'med'){
                addedtime = 400 ;
                offices = 6;
                document.getElementById('offices').value = 6;
                limiteroff = 15 ; document.getElementById('limiteroff').value = 15;
            }else if(l == 'hard'){
                addedtime = 200 ;
                offices = 9;
                document.getElementById('offices').value = 9;
                limiteroff = 20 ; document.getElementById('limiteroff').value = 20;
            }
            
            
            build() 
        }
        
        gameboard.onclick = function(){
            clickat++;
            document.querySelector('.clickat').innerHTML = clickat;
        }
        function updatelimiteroff(){
            limiteroff = document.getElementById('limiteroff').value;
            build()
        }
        function updateoffices (){
            offices = document.getElementById('offices').value;
             build()
        }

        function build() {
            var html = "<h1>Hit the computer</h1>";
            for (var x = 0; x < offices; x++) {
                html += '<div class="office"><div class="desk"></div><div class="computer"></div></div>';
            }
            document.querySelector('.gameboard').innerHTML = html;
            computer = document.querySelectorAll('.computer');
            for (var x = 0; x < computer.length; x++) {
                //false from inside to outside bubling
                // true from outside to inside capture
                computer[x].addEventListener('click', hitcomputer, false);
            }
        }

        function popup() {
            cOff = true;
            sCom = computer[Math.floor(Math.random() * computer.length)];     
            sCom.classList.add('popup');
            bgimg = images[Math.floor( Math.random()*images.length ) ]
            sCom.style.backgroundImage = "url('"+bgimg+"')";
            popups++; 
            document.querySelector('.popup').innerHTML = popups;
            rTime = (Math.floor(Math.random() * 10) * 100) + addedtime ;
            console.log(rTime)
            timer = setTimeout(hidecomputer, rTime);
            
            

        }
        

        function hidecomputer() {
            
            sCom.classList.remove('popup');
            if(popups == limiteroff ){
                dofinish();
            }else{
                popup(); 
            }

            
            
        }

        function hitcomputer(event) {
            event.target.classList.remove('popup');
            if (cOff) {
                cOff = false;
                score++;
                document.querySelector('.score').innerHTML = score;
                if(popups == limiteroff ){
                    hidecomputer();
                   
                }else{
                //  popup(); 
                }
            }
          //  popup();
        }
        function dofinish(){
            clearTimeout();
            endtime = new Date().getTime() ;
            takentime = endtime - starttime ;

            sec =Math.floor ( ( takentime % (60*1000) ) / 1000 ) ;
            sec = sec <10 ? '0'+sec : sec;
            m = Math.floor ( ( takentime % (60*60*1000) ) / (1000*60) ) 
            m = m <10 ? '0'+ m : m;
            m = m == '00' ? '' : m + 'min : ' ;
            h = Math.floor ( ( takentime % (60*60*24*1000) ) / (1000*60*60) ) 
            d = Math.floor ( ( takentime / (60*60*24*1000) ) ) 
            // d + ' : ' + h + ' : ' +
            out =  m + sec  + ' sec'
            
            
            result.style.display = 'block';
            document.querySelector('.timming').innerHTML = out ;
            var congrat = score >= popups/2 ? " Congratulations WOW!" : 'Ouch! Fail !!' ; 
            result.innerHTML = congrat + ' , You Finish!<br> Your Score : ' + score + " from "+ popups + ' in ' + out + '<br><br> <button onclick="start()" >Play Again</button><button onclick="closersult()">Close</button>' ;
            
            
          //  alert();
        }
        
        function closersult(){ 
            result.style.display = 'none';
            result.innerHTML = '';
        }

        function start() {
            //starttime , endtime , takentime ;
            starttime = new Date().getTime();
            result.style.display = 'none';
            result.innerHTML = '';
            score = 0;
            clickat = 0;
            popups = 0 
            popup();

        }
    </script>
</body>

</html>
