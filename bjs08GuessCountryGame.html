<html>

<head>
    <title>Guess Country Game </title>

    <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=0.6, user-scalable=no, shrink-to-fit=yes">
    <style>
        html { 
            /*   https://www.toptal.com/designers/subtlepatterns/patterns/white-waves.png     https://i.stack.imgur.com/jGlzr.png*/
              background: url(https://www.toptal.com/designers/subtlepatterns/patterns/doodles.png) repeat center fixed; 
              -webkit-background-size:400px 400px;
              -moz-background-size: 400px 400px;
              -o-background-size:400px 400px;
              background-size: 400px 400px;
        }
        body{
            background: transparent;   /* */
        }
        
        #container{
            min-width: 670px;
            width: 95%;
            margin: 0 auto;
            padding: 5px;
            text-align: center;
        }
        #output{
            clear: both;
            margin: 5px 5px 10px 5px;
            font-size: 1.3em;
        }
        #resultboard{
            clear: both;
            margin: 10px 5px 10px 5px;
            min-height: 60px;
        }
        #result{
            color: red;
            min-height: 40px;
            background-color: #CCFB5D;
            display: none;
            font-size: 120%;
            border:1px solid silver;
            padding-top: 15px;
        }
        input,button{
            margin: 1px;
            font-size: 110%;
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 1px;
            padding-right: 1px;
            height: 90px;
            width: 190px;
        }
        
        .level{
            width: 60px;
            font-size: 70%;
            padding: 5px 1px ;
            margin: 1px;
        }

        .letter{
            display: inline-block;
            width: 80px;
            height: 80px;
            background-color: azure;
            color: red;
            font-size: 200%;
            border:1px solid silver;
            text-align: center;
            padding: 0px 20px;
            margin-right:5px;
            padding-top: 40px;
            
        }
        #imagecontainer{
            width: 150px;
            padding-top: 5px;
            vertical-align: top;
            float: right;
        }
        #guessimage{
            width: 140px;
            height: 120px;
            vertical-align: top;
            display: none;
            border:1px solid silver;
            
        }
        .inline{
            display: inline-block ;
            margin: 5px;
            padding: 5px;
            vertical-align: middle;
            min-height: 90px;
            
        }
        #userguess{
            border: 1px solid silver; 
            min-height: 130px;
            background-color: #FFF380;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }
        .guessletter{
            display: inline-block;
            width: 80px;
            height: 80px;
            background-color: azure;
            color: red;
            font-size: 200%;
            border:1px solid silver;
            text-align: center;
            padding: 0px 20px;
            margin-right:5px;
            padding-top: 40px;
            
        }
        #gameboard{   
            width: 70%;
            float: left;
            padding: 5px;
        }
        .comment{
            color: grey;
            font-size: 95%;
            text-align: left;
            
        }
        #timestyle{
            background-color: beige;
            color: fuchsia;
            font-size: 70%;
            padding: 5px 2px ;
            text-align: left;
        }
        
        #extradata{
            display: inline-block;
            color: darkmagenta;
            cursor: pointer;
            
        }
        
    </style>
</head>

<body>
    <div id="container">
        <div id="output">
            <div style="float:right;">
                <input type="button" value="Start Game" id="startgame" > 
            </div>
            <div style="float:left;">
                <div >
                    <button disabled id="timestyle"><span id="usedtimetext">Timer: </span><span id="usedtime">00 sec</span></button>
        <button type="button"  class="level on" level-data="easy"  onclick="setlevel(this.getAttribute('level-data'))" >Easy</button>
        <button type="button"  class="level on" level-data="med"  onclick="setlevel(this.getAttribute('level-data'))" >Medium</button>
        <button type="button"  class="level on" level-data="hard"  onclick="setlevel(this.getAttribute('level-data'))" >Hard</button>
        <button type="button"  class="level"   onclick="chelp()" >Help</button>
                </div> 
            </div>
        </div>
        <div id="resultboard" > <div id="result" ></div> </div>
        <div id="userguess"  > </div>
        <div id="gameboard" class="inline"> </div>
        <div id="imagecontainer" class="inline"> 
        <img src='' id="guessimage"   > 
        </div>
        <div style="clear:both;"></div>
        <div class="comment">
            press on letter to select and press to return back<br>
        Now you play in <strong><span id="levelcomment"></span> level </strong><br>
            press Flag image to reset all <br>
            press help to show country after 10 sec
        </div>
    </div>
    <script>
        var guesslength = 9 ;
        var guessword ='';
        var rguessword ='' ;
        var guesscountry =[];
        var userguessletters =[];
        var gameon       = false ;
        var gameboard = document.getElementById('gameboard') ;
        var userguess = document.getElementById('userguess') ;
        var imagecontainer = document.getElementById('imagecontainer') ;
        var guessimage = document.getElementById('guessimage') ;
        var usedtime = document.getElementById('usedtime') ;
        var result = document.getElementById('result') ;
        var startgame = document.getElementById('startgame') ;
        var levelcomment = document.getElementById('levelcomment') ;
        var usedtimevalue = 0;
        var helpcountdownvalue = 3 ;
        var helpcountdown = helpcountdownvalue ;
        var stopcounterdown   = false ;
        var ishelprequested = false;
        
        if(!gameon){
            result.style.display = 'block';
            result.innerHTML = 'Start New Guess Game'; 
            startgame.addEventListener('click',myloader);
        }
        
        function chelp(){
            if(! ishelprequested){
                stopcounterdown = false ;
                if(gameon){
                    result.style.display = 'block';
                    result.innerHTML = helpcountdown+' sec';
                    ishelprequested = true ;
                    setTimeout(helptimer , 1000);
                }
            }            

        }
        
        function helptimer(){
            helpcountdown-- ;
            if(gameon){
                if(helpcountdown == 0){
                    userguessletters =[]
                    buildguess();
                    clearTimeout(setTimeout(helptimer , 1000));
                    result.innerHTML = guessword;
                    helpcountdown = helpcountdownvalue ;
                    ishelprequested = false ;
                }else{
                    if(stopcounterdown){
                        clearTimeout(setTimeout(helptimer , 1000));
                        helpcountdown = helpcountdownvalue ;
                        ishelprequested = false ;
                    }else{
                        setTimeout(helptimer , 1000)
                        result.innerHTML = helpcountdown +' sec'  ;      
                    }
                }
            }
             
            
        }
        
        levelcomment.innerHTML = "Medium";
        function setlevel(l){
            levelcomment.innerHTML = l;
            if(l == 'easy'){
                levelcomment.innerHTML = "Easy";
                guesslength = 6 ;
            }else if(l == 'med'){
                levelcomment.innerHTML = "Medium";
                guesslength = 9 ;
            }else if(l == 'hard'){
                levelcomment.innerHTML = "Hard";
                guesslength = 100 ;
            }
            if(gameon){
                result.style.display = 'block';
                result.innerHTML = ' Your Change will be applied next game';
                
            }
        }
        
        window.onload = init ;
        
        function init(){
          //  myloader();
            
        }

        function myloader() {
            var xHR = new XMLHttpRequest();
            xHR.onload = copen;
            //https://restcountries.eu/rest/v2/all
            xHR.open('get','https://restcountries.eu/rest/v2/all' ,true)
            xHR.send();
        }
        
        
        function copen(){
            var ele = JSON.parse(this.responseText) ;
            guesscountry = ele[Math.floor(Math.random()*ele.length)];
            guessword  = guesscountry.name ;
            guessword  = guessword.toUpperCase()
            guessword  = guessword.replace(/ /g , "-")
            
            if(guessword.length < guesslength ){
                userguessletters =[];
                gameon = true;
                startgame.disabled = true;
                startgame.removeEventListener('click',myloader);
                result.style.display = 'none';
                usedtime.innerHTML = '00 sec' ;
                setTimeout(starttimer,1000);
                //buildguess
                rguessword = randomizer(guessword);
                buildguess();
            }else{
                myloader()
            } 
        }
        
        function starttimer(){
            
            if( gameon ){
                usedtimevalue++;
                var takentime = usedtimevalue * 1000 ;
                sec =Math.floor ( ( takentime % (60*1000) ) / 1000 ) ;
                sec = sec <10 ? '0'+sec : sec;
                m = Math.floor ( ( takentime % (60*60*1000) ) / (1000*60) ) 
                m = m <10 ? '0'+ m : m;
                m = m == '00' ? '' : m + 'min:' ;
                h = Math.floor ( ( takentime % (60*60*24*1000) ) / (1000*60*60) ) 
                d = Math.floor ( ( takentime / (60*60*24*1000) ) ) 
                // d + ' : ' + h + ' : ' +
                out =  m + sec  + ' sec'
                usedtime.innerHTML = out ;
                setTimeout(starttimer,1000);
                
            }
            
        }
        
        
        function buildguess(){
            var html='';
            userguess.innerHTML = '' ;
            gameboard.innerHTML ='';
            for(var x=0 ; x<rguessword.length;x++){
                html += '<div class="letter">'+rguessword[x]+'</div>';
            }
            gameboard.innerHTML = html;
            guessimage.src = guesscountry.flag ;
            guessimage.style.display = 'block';
            guessimage.addEventListener('click' , resetall)
            var letters = document.querySelectorAll('.letter');
            for(var x=0 ; x<letters.length;x++){
                letters[x].addEventListener('click' , addguessletter)
            }
            
        }
        
        function addguessletter(event){
            result.style.display = 'none'; 
            result.innerHTML = '';
            var target = event.target;
            var guessletters = document.querySelectorAll('.guessletter');
            userguess.innerHTML +='<div class="guessletter" data-id="'+guessletters.length+'">'+target.innerHTML+'</div>' ;
            target.remove();
            guessletters = document.querySelectorAll('.guessletter');
            for(var x=0 ; x<guessletters.length;x++){
                stopcounterdown = true;
                userguessletters[x] = guessletters[x].innerHTML ;
                guessletters[x].addEventListener('click' , removeguessletter)
            }
            
            
            if(guessletters.length == guessword.length){
                result.style.display = 'block';
                if( docheckfinish()){
                    usedtimevalue = 0;
                    gameon = false;
                    startgame.disabled = false;
                    startgame.addEventListener('click',myloader);
                    clearTimeout();
                    //extradata()
                    result.innerHTML = 'Congratulations ..Well Done <span id="extradata" onclick="extradata()">click for more data </span>';
                    guessimage.removeEventListener('click' , resetall)
                    for(var x=0 ; x<guessletters.length;x++){
                        guessletters[x].removeEventListener('click' , removeguessletter)
                    }
                }else{
                    result.innerHTML = 'OOOPS!!! Try Again';
                }
            }
            
            
        }
        
        function docheckfinish(){ 
            for(var x=0; x< userguessletters.length ; x++){
                if(userguessletters[x] != guessword[x]){
                    return false
                }
                
            }
            return true;
        }
        
        
        function removeguessletter(event){
            result.style.display = 'none';
            var target = event.target;
            gameboard.innerHTML +='<div class="letter">'+target.innerHTML+'</div>' ;
            var rid = target.dataset.id;
            userguessletters.splice(rid,1);
            target.remove();
            var letters = document.querySelectorAll('.letter');
            for(var x=0 ; x<letters.length;x++){
                letters[x].addEventListener('click' , addguessletter)
            }
        }
        
        
        function resetall(){
            userguessletters =[];
            result.style.display = 'none';
            buildguess();
        }
        
        function extradata(){
            result.style.display='block';
            result.innerHTML = guesscountry.name +' ['+ guesscountry.nativeName +'] and capital '+ guesscountry.capital + ' and curruncy '+ guesscountry.currencies[0].name  ;
        }
        
        function randomizer(t){
            var newn=t.toUpperCase().split('') ;
            var newv = '' ;
            while(newn.length >0){
                newv += newn.splice( Math.floor(Math.random()*newn.length ) , 1)
            }
            return(newv)
            
            /*
            var holder ;
            var l =newn.length-1  ;
            for(var x=0; x<newn.length;x++){
                holder = Math.floor(Math.random()*l) ;
                newv = newn[x];
                newn[x] = newn[holder];
                newn[holder] = newv ;
                
            }
            return( newn.join(''))
            */

        }
    </script>
</body>

</html>
