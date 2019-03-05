<html>

<head>
    <title> canvas </title>
    <style>
        canvas{
            border: 1px solid red;
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div id="container">
        <canvas id="output0">
        </canvas> 
        <canvas id="output">
        </canvas>
        <canvas id="output2">
        </canvas>
        <img src="" id="image">
    
    </div>
    
    <script>
        window.onload = init;

        var canvas = document.getElementById('output');
        var canvas0 = document.getElementById('output0');
        var ctx0 = canvas0.getContext('2d');
        canvas0.width = 400 ;
        canvas0.height = 300; 
        var pos = {x:0, y:50};
        
        
        function init(){
            draw();
        }
        
        var checkx,checky ;
        var drowround= 0;
        function draw(){
            
            ctx0.clearRect(0,0,canvas0.width , canvas0.height);
            ctx0.beginPath();
            ctx0.fillStyle = 'green' ;
            if(pos.x >= canvas0.width -50 && pos.y < canvas0.height -50 ){
                ctx0.fillStyle = 'blue' ;
                pos.x += 5 ;
                pos.y += 5;
                pos.x = canvas0.width -50;
                checkx = false ;
                
            }else if( (pos.y > 50 && pos.x == 50  )   ){
                ctx0.fillStyle = 'green' ;
                pos.x = 50 ;
                pos.y -= 5 ;
                drowround++;
            }else if( (pos.y >= canvas0.height -50 && pos.x >= canvas0.width -50  ) || (pos.y >= canvas0.height -50 && pos.x < canvas0.width -50 )  ){
                ctx0.fillStyle = 'red' ;
                pos.y = canvas0.height -50 ;
                pos.x -= 5 ;
                checkx = true ;
            }else{
                ctx0.fillStyle = 'yellow' ;
                pos.x += 5 ;
                
            }
            
            
                ctx0.arc(pos.x,pos.y,50,0,Math.PI*2);
                ctx0.fill();
                ctx0.closePath();
            if(drowround < 40){
                setTimeout(draw , 20)
            }else{
                clearTimeout();
            }
        }
        
        
        
        
        canvas.width = 300 ;
        canvas.height = 500; 
        var ctx = canvas.getContext('2d');
        ctx.fillStyle =  'blue';
        ctx.fillRect(10,30,150,50);
        ctx.lineWidth = 3;
        ctx.strokeStyle = 'green';
        ctx.strokeRect(20,90,100,75);
        
        ctx.lineWidth = 10;
        ctx.strokeStyle = 'red';
        ctx.moveTo(10,180);
        ctx.lineTo(70 ,250);
        ctx.stroke();
        
        ctx.lineWidth = 5;
        ctx.strokeStyle = 'orange';
        ctx.beginPath();
        ctx.arc( 60 , 330, 50,0,2*Math.PI);
        ctx.stroke();
        ctx.fillStyle =  'violet';
        ctx.font = "24px Arial"
        ctx.fillText("hellow" , 10 ,400)

        var canvas2 = document.getElementById('output2');
        var ctx2 = canvas2.getContext('2d');
        canvas2.height = 600; 
        ctx2.drawImage(canvas , 0,0)
        var imag = document.getElementById("image");  
        canvas2.addEventListener('click' , 
                                 
         function(event){
            var img = event.target.toDataURL() ;
            imag.src = img;
            
        })

    </script>
</body>

</html>
