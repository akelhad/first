<html>
    <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=0.6, user-scalable=no, shrink-to-fit=yes">
    <title>Memory Game</title>
    <style>
    html, body {
        position:fixed;
        left: 10px;
        right: 10px;
        overflow:hidden;
    }
        #container{
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            border: 2px solid silver;
            border-radius: 20px;
            box-shadow: 0 0 4px grey;
            height: 600px;
        }
        .score{
            margin: 10px auto 20px auto;
            max-width: 520px;
            height: 40px;
            display: block;
            padding: 3px;
        }
        #msg{
            position: absolute;
            top: 70px;
            left: 30px;
            right: 30px;
            margin: 10px auto;
            max-width: 580px;
            height: 30px;
            background-color: blanchedalmond;
            color: crimson;
            padding: 10px ;
            font-weight: bold;
            font-size: 100%;
            border: 1px solid orange;
            border-radius: 10px;
            display: none;
            opacity: 0.8 ;
        }
        #wrapper{
            margin: 20px auto;
            text-align: center;
        }
        
        button[class="level on"]{
            width: 150px;
            border-radius: 10px;
            padding: 12px;
            background-color: beige;
            color: brown;
            font-size: 120%;
            margin: 8px auto;
            text-align: center;
            box-shadow: 0 0 7px yellow;
            transition: 0.5 all;
        }
        button[id="start"]{
            width: 70%;
            max-width: 400px;
            border-radius: 10px;
            padding: 12px;
            background-color: beige;
            color: brown;
            font-size: 120%;
            margin: 8px auto;
            text-align: center;
            box-shadow: 0 0 7px brown;
            transition: 0.5 all;
        }
        
        button:hover{
            background-color: greenyellow;
            color:  darkred;
            box-shadow: 0 0 7px brown;
        }
        .active{
            width: 150px;
            border-radius: 10px;
            padding: 12px;
            font-size: 120%;
            margin: 8px auto;
            text-align: center;
            background-color: greenyellow;
            color:  darkred;
            box-shadow: 0 0 7px brown;
        }
        
        #gameboard{
            max-width: 520px;
            min-height: 50px;
            text-align: center;
            margin: 0 auto;
            
        }
        .gametile{
            display: inline-block;
            padding: 3px;
            float: left;
        }
        .flipImage {
            width: 120px;
            height: 120px;
            border: 1px solid silver;
        }
        

    </style>
</head>

<body>
    <div id="container">
        <div class="score">  
        <div >
            <button type="button" id="but1"  class="level on" level-data="1"  onclick="setlevel(this.getAttribute('level-data'))" >Easy</button>
            <button type="button"  id="but2"  class="level on" level-data="2"  onclick="setlevel(this.getAttribute('level-data'))" >Medium</button>
            <button type="button"  id="but3"  class="level on" level-data="3"  onclick="setlevel(this.getAttribute('level-data'))" >Hard</button>
        </div>
        </div>
        <div class="score">  
        <div id="msg">  </div>
        </div>
        <div id="wrapper">
            <button id="start" onclick="start()" > Play Now</button>
            <div id="gameboard" > </div>
        </div>
    </div>    
        
    <script>
       // var ar = [1,2,3,4,5,6];
        var level = 1;
        var cardcount = 6 ;
        var cardarray = [];
        var doublecardarray = [];
        var matchedarray = [];
        var clickedarray = [];
        var clickedobjarray = [];
        var timer = 800 ;
        var clickcounter = 0 ;
        var clickat = 0 ;
        var ismatched = false ;
        var isplaying = false ;
        var clicksrc = "http://via.placeholder.com/250/000000/ffffff?text=click" ;
        var numbersrc = "http://via.placeholder.com/250/00e0f0/000?text=";
        var lastitem , beforelastitem;
        var starttime , endtime , takentime , usedtime ;
        
        
        var gameboard    = document.getElementById('gameboard');
        var stbutton = document.getElementById('start');
        var msg      = document.getElementById('msg');
        var score    = document.getElementById('score');
        var container = document.getElementById('container');
        var but1 = document.getElementById('but1');
        var but2 = document.getElementById('but2');
        var but3 = document.getElementById('but3');
        but1.classList.add('active');
        
        function setlevel(l = 1){
            if(l == 1 && !isplaying ){
                timer = 800 ;
                cardcount = 6 ;
                container.style.height ='600px';
                but1.classList.add('active');
                but2.classList.remove('active');
                but3.classList.remove('active');
            }else if(l == 2  && !isplaying ){
                timer = 700 ;
                cardcount = 8 ;
                container.style.height ='720px';
                but2.classList.add('active');
                but1.classList.remove('active');
                but3.classList.remove('active');
            }else if(l == 3  && !isplaying ){
                timer = 600 ;
                cardcount = 10 ;
                container.style.height ='900px';
                but3.classList.add('active');
                but2.classList.remove('active');
                but1.classList.remove('active');
            }
        }
        
        function start(){
            starttime = new Date().getTime();
            stbutton.style.display = 'none' ;
            isplaying = true ;
            buildcardarray();
            buildBoard();
        }
        
        function buildcardarray(){
            for( var x=0 ; x<cardcount ; x++){
                cardarray.push( x + '.jpg' );
            }
            doublecardarray = cardarray.concat(cardarray); 
            shuffleArray(doublecardarray ) ; 
            
            
        }
        
        function buildBoard(){
            var outhtml = '' ;
            for(var x=0 ; x < doublecardarray.length ; x++ ){
                outhtml += '<div class="gametile" >';
                var dot = doublecardarray[x];
                outhtml += '<img src="'+ clicksrc + '" id="card'+ x + '"  onclick="pickcard(\''+ dot +'\' , this , event )" class="flipImage" dataflipped="0"  /></div> ' ;
            }
            gameboard.innerHTML = outhtml ; 

            
        }
        
        
        function pickcard(id , item , event){
            clickat++;
            if( clickcounter < 2 & item.getAttribute('dataflipped') == "0" && ! isinarray(item , clickedobjarray)  ){
                hideoutptmsg();
                clickedarray.push(id);
                clickedobjarray.push(item);
                item.src = numbersrc + id ;
                item.getAttribute('dataflipped' , 1 ) ;
                clickcounter++;
                
                if( clickcounter == 2  ){
                    
                    
                    var clickedlength = clickedarray.length ;
                    lastitem = clickedobjarray[clickedlength-1] ;
                    beforelastitem = clickedobjarray[clickedlength-2] ;
                    
                    if( clickedarray[clickedlength-1] == clickedarray[clickedlength-2]   ){
                        outptmsg("WoW!Matched Ok ");
                        if( clickedarray.length  == doublecardarray.length ){
                            finishgame();
                        }
                        clickcounter = 0 ;
                    }else{
                        lastitem.getAttribute('dataflipped' , 0 ) ;
                        beforelastitem.getAttribute('dataflipped' , 0 ) ;
                        clickedarray.pop();
                        clickedobjarray.pop();
                        clickedarray.pop();
                        clickedobjarray.pop();
                        setTimeout( hidecards , timer )  ;
                        outptmsg("OOOPS!Matched Not Found ");
                        
                    }
                    
                }
            } 
        }
        
        function hidecards(){
            lastitem.src = clicksrc ;
            beforelastitem.src = clicksrc ;
            clickcounter = 0 ;
        }
        
        
        function finishgame(){
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
            usedtime =  m + sec  + ' sec'
            outptmsg("Congratulations!!!You did it in " + usedtime + ' and '+ clickat +" clicks");
            cardarray = [];
            doublecardarray = [];
            matchedarray = [];
            clickedarray = [];
            clickedobjarray = [];
            ismatched = false ;
            isplaying = false ;
            gameboard.innerHTML = "";
            stbutton.style.display = 'block' ;
        }

        function shuffleArray(a) {
            for (var x=0 ; x<a.length ; x++ ) {
                var holder =Math.floor( Math.random()*a.length ) ;
                var value = a[holder];
                a[holder] = a[x] ;
                a[x] = value ;
            }
            return a;
        }
        
        function isinarray(item , array){
            if(array.indexOf(item) != -1 ){
                return true ;
            }
            return false ;
        }
        
        function outptmsg(m){
            msg.style.display = 'block';
            msg.innerHTML = m;
        }
        
        function hideoutptmsg(){
            msg.style.display = 'none';
        }
       
    </script>
</body>

</html>
