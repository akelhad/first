<html>

<head>
    <title>Powered By Akram El Hadad </title>

    <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=0.6, user-scalable=no, shrink-to-fit=yes">
    <style>
        html { 
            /*   https://www.toptal.com/designers/subtlepatterns/patterns/white-waves.png     https://i.stack.imgur.com/jGlzr.png*/
              background: url(https://www.toptal.com/designers/subtlepatterns/patterns/leaves.png) repeat center fixed; 
              -webkit-background-size:400px 400px;
              -moz-background-size: 400px 400px;
              -o-background-size: 400px 400px;
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
        input{
            margin: 1px;
            font-size: 110%;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 5px;
            padding-right: 5px;
            height: 50px;
            width: 50%;
        } 
        button{
            margin: 1px;
            font-size: 110%;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 5px;
            padding-right: 5px;
            height: 50px;
            width: 190px;
        }
        
        .clear{
            clear: both;
        } 
        .lefter{
            position: relative;
            display: inline-block;
            width: 350px;
            overflow: hidden;
            border: 1px solid #999999;
            padding: 5px;
            margin: 5px;
            height: 300px;
            color: darkmagenta;
            background-color: #f2f2f2;
            font-size: 1.3em;
            
        }
        #playerdiv{
            position: absolute;
            top: 0%;
            bottom: 0%;
            right: 0%;
            left: 0%;
            display: none;
            background-color: #595959;
            height: 100%;
            overflow-y: hidden;
            overflow: hidden;
        }
        iframe{
            position: sticky;
            margin: 75px auto;
            width: 75%;
            min-height:400px ;
            height: 500px;
            max-height: 700px;
        }
        img{
            margin: 0 auto;
            vertical-align: bottom;
            width: 340px;
            height: 240px;
            text-align: center;
            position: relative;
        }
        .noscrolling {
          height: 100%;
          overflow: hidden;
            overflow-y: hidden;
        }
        .descrip{
            position: absolute;
            width: 100%;
            background-color: #595959;
            color: white;
            bottom:0px;
            left:0px;
            right: 0px;
            height: 100px;
            display: none;
            overflow: hidden;
            opacity: 0.8;
            transition: 2s;
        }
        .showdescrip{
            
        }
        
    </style>
</head>

<body>
    <div id="container">
        <div>
            <input type="text" id="searchfor" placeholder="search youtube" value="رعد الكردي">
            <button id="dosearch" >Search</button>
        </div>
        
        <div id="output"> </div>
        <div id="playerdiv"> </div>
    
    </div>
    
    <script>
        window.onload = init ;
//AIzaSyAcTpP10tCI9luKAd5wmi431_NPH1hb4Xc
// 'https://www.googleapis.com/youtube/v3/search/?part=snippet&key=AIzaSyAcTpP10tCI9luKAd5wmi431_NPH1hb4Xc&q=test&maxResults=20';
        var output = document.getElementById('output');
        var searchfor = document.getElementById('searchfor');
        var dosearch = document.getElementById('dosearch');
        var container = document.getElementById('container');
        var playerdiv = document.getElementById('playerdiv');
        var sdata =[];
        var link = '';
        
        function init(){
            dosearch.addEventListener('click' , ysearch);
        }
        
        function ysearch(){
            var url = 'https://www.googleapis.com/youtube/v3/search/?part=snippet&key=AIzaSyAcTpP10tCI9luKAd5wmi431_NPH1hb4Xc&q='+searchfor.value+'&maxResults=20';
            getjson(url , function(data){
                sdata = data ;
                loopsdata();
            });
        }
        
        function getjson(url , callback){
            var xhr = new XMLHttpRequest();
            xhr.open('get' , url , true );
            xhr.responseType = 'json';
            xhr.onload = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    callback( xhr.response ) ;
                }
            }
            xhr.send();
        }
        
        
        function loopsdata(){
            output.innerHTML = '' ;
            for(var x=0 ; x<sdata.items.length ; x++){
              output.innerHTML += '<div id='+sdata.items[x].id.videoId+' class="lefter" >'+ sdata.items[x].snippet.title+ '<br><img src="'+  sdata.items[x].snippet.thumbnails.medium.url + '" ><div class="descrip">'+sdata.items[x].snippet.description +'</div></div>';
            }
            //.https://www.youtube.com/watch?v=dviBz_N44dM
            var lefter = document.querySelectorAll('.lefter');
            for(var x=0 ; x<lefter.length ; x++){
                
                lefter[x].addEventListener('mouseover' , function(event){
                    var target2 = event.target ;
                    if(target2.tagName == 'IMG'){
                       var lastdiv = target2.parentElement.children[2];
                       lastdiv.style.display = 'block';
                    }
                    
                })
                
                lefter[x].addEventListener('mouseout' , function(event){
                    var target3 = event.target ;
                    if(target3.tagName == 'IMG'){
                        var lastdiv3 = target3.lastChild;
                        lastdiv3 = target3.parentElement.children[2];
                        lastdiv3.style.display = 'none';
                    }
                    
                })
                
                lefter[x].addEventListener('click' , function(event){
                    var target = event.target ;
                    if(event.target.tagName == 'IMG'){
                        target = target.parentElement ;
                    }
                    
                    link = target.getAttribute('id') ;
                    player() ;
                   
                })
                
            }
            
        }
        
        function player(){
            container.classList.add('noscrolling');
            playerdiv.style.display = 'block';
            playerdiv.innerHTML = ' <iframe " src="https://www.youtube.com/embed/'+ link +'?controls=1&autoplay=true"> </iframe> ';
            playerdiv.onclick = function(){
                playerdiv.style.display = 'none';
                playerdiv.innerHTML = '';
                container.classList.remove('noscrolling');
            }
        }
                    
                    

    </script>
</body>

</html>
