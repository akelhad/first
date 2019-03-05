<html>

<head>
<title> shoping cart </title>
<style>
.item{
border: 1px solid black;
width: 250px;
display: inline-block;
padding: 5px;

}
img , .desc , .price {
margin-left: 35px; 
}
table{
width: 95%;
border: 1px solid black;
border-collapse: collapse;
}

td{
border: 1px solid black;
border-collapse: collapse;
}

.smallinput{
width: 50px;
padding: 6px;
border: 0px white ;
background-color: beige;
font-size: 100%;
}
input,button{
    margin: 5px;
    font-size: 100%;
    padding: 5px 20px ;
    height: 40px;
}
    
    button:hover{
        background-color:yellow ;
        color:deeppink;
        border: 1px solid red; 
}
</style>
</head>

<body>
<div id="container">
    <div id="addingshopitems"><h3> Add New Item To Market </h3>
        <input type="text" placeholder="item name" id="iname" value="" required >
        <input type="number" placeholder="price" id="iprice" value="" required> <br>
        <input type="text" placeholder="description" id="idesc" value="" required>
        <input type="number" placeholder="discount" id="idisc" value="" required><br>
        <button id="submit" onclick="addtomarket()" > Add to Market </button> 
        <button   onclick="resetmarket()" > Reset Market </button>
    </div>
<div id="output">
</div>
<div id="output2"  >
</div>

</div>

<script>

    var output = document.getElementById('output');
    var output2 = document.getElementById('output2');
    var shopitems = [
    {id:0 , name:"computer" , price: 1360 , desc: " high quality " , disc:20 } ,
    {id:1 , name:"laptop" , price: 2350 , desc: " toshiba 6 gb " , disc:30 } ,
    {id:2 , name:"washing mashine" , price: 1360 , desc: " economic power usage " , disc:10 } ,
    {id:3 , name:"casette" , price: 76 , desc: " panasonic" , disc:24 } ,
    {id:4 , name:"Yoyo lab" , price: 7000 , desc: " Goodgame active superB" , disc:1 }
    ]
    
    
    var html = '';
    var html2 = '';
    var shopcart = [];
    var marketitem = {};
    var strshopcart , strshopitems ;
    var confirmdel = false;
    window.onload = init;
    
    
    var iname = document.getElementById('iname');
    var iprice = document.getElementById('iprice');
    var idesc = document.getElementById('idesc');
    var idisc = document.getElementById('idisc');
    

    function resetmarket(){
        var resetshopitems = [
            {id:0 , name:"computer" , price: 1360 , desc: " high quality " , disc:20 } ,
            {id:1 , name:"laptop" , price: 2350 , desc: " toshiba 6 gb " , disc:30 } ,
            {id:2 , name:"washing mashine" , price: 1360 , desc: " economic power usage " , disc:10 } ,
            {id:3 , name:"casette" , price: 76 , desc: " panasonic" , disc:24 } ,
            {id:4 , name:"Yoyo lab" , price: 7000 , desc: " Goodgame active superB" , disc:1 }
            ]
        localStorage.setItem('marketitems' , JSON.stringify(resetshopitems) );
      //  console.log(shopitems)
        init();
    }
    
    function addtomarket(){
        var id = shopitems.length ;
        marketitem['id'] = shopitems.length
        marketitem['name']= iname.value; 
        marketitem['price']= parseInt( iprice.value );
        marketitem['desc'] = idesc.value;
        marketitem['disc'] = parseInt(idisc.value);
        if( iname.value != ''  &&  parseInt( iprice.value ) > 0){
            parsemarket();
            shopitems.push(marketitem);
            localStorage.setItem('marketitems' , JSON.stringify(shopitems) )
          //  console.log(shopitems)
            init();
        }
    }
    
    function init(){
        build();
        showcart();

    }

    function build(){
        parsemarket();
        var netprice ;
        html  =" ";
        shopitems.forEach( function(item){
            netprice = Math.floor( item.price - ( (item.price * item.disc )/ 100 ) ) ;
            html += "<div class='item' ><h3>"+item.name +"</h3> <img src='http://placehold.it/150x100' ><br> <div class='desc' >" +item.desc + " </div> <div class='price'><del>" + fMoney(item.price) +"</del> " + fMoney(netprice) +"</div> <button class='addtocart' data-id='" +item.id + "' onclick='addtocart(this.dataset.id);' > Add To Cart </button> </div>";
        } )

        output.innerHTML = html ;
    }




    function addtocart(s){
        var item ;
        var isnotadded = true ;
        var qty = 1 ;
        parseshopped();
        shopcart.forEach(function(x){
            if(x.id == s ){
                isnotadded = false ;
                x.qty = parseInt(x.qty) +parseInt(qty); 
            }
        })

        if( isnotadded ){
            shopitems.forEach(function(x){
                if(x.id == s ){
                    x.qty = qty;
                    shopcart.push(x) ;
                }
            })
        }

        strshopcart = JSON.stringify(shopcart);
        localStorage.setItem('shopeditems' , strshopcart )
        showcart();
    }


    function showcart(){
        var x =0 ;
        var total = 0 ;
        parseshopped();
        html2 = '<br><table><tr><td>serial</td><td>name </td> <td>Description</td><td> price </td><td> Disc % </td><td> Qty</td> <td> total </td> <td> Delete </td> </tr>';
        shopcart.forEach( function(item){
            //console.log( findinonj(item.id,shopcart) );
            x++ ;
            netprice = Math.floor( item.price - ( (item.price * item.disc )/ 100 ) ) ;
            total += (item.qty * netprice) ;
            html2 += "<tr ><td>"+x+" </td><td> <h4>"+item.name +"</h4></td> <td>" +item.desc + " </td> <td > " + fMoney(item.price) +"</td> <td > " + item.disc +"</td> <td><input class='smallinput' type='number' oninput='updateqty("+item.id+" , this)' value='" + item.qty +"' > </td> <td > " + fMoney(item.qty * netprice) +"</td> <td> <input  type='button' onclick='deleteitem("+item.id+")' value='Delete' ></td></tr>";
        } )

        html2 += "<tr><td colspan='2' ><h3> Grand Total </h3></td> <td colspan='5' ><h2> " + fMoney(total) +" </h2></td> </tr></table>";

        output2.innerHTML = html2 ;
    }

    function parseshopped(){
        if(localStorage.getItem('shopeditems') != null ){
            shopcart = JSON.parse(localStorage.getItem('shopeditems')) ;
        }
    }


    function updateqty(id , inp ){
        qty = parseInt(inp.value);
        if(qty < 0 || qty == null || qty == ''  || qty == ' '){
            inp.value = 0 ;
            qty = 0;
        }
        
        parseshopped();
        var editeditem = findinonj(id,shopcart) ;
        if( editeditem ){
            editeditem.qty = qty;
        }
        /*
        confirmdel = false ;
        parseshopped();
        for (var x = 0; x < shopcart.length; x++) {    
            if(shopcart[x].id == id ){
                if(qty == 0 || qty == null){
                    confirmdel = confirm(" Do you really want to cancel " + shopcart[x].name )
                    if (confirmdel){
                        shopcart.splice(x,1);
                    }else{
                        shopcart[x].qty = qty; 
                    }
                }else{
                    shopcart[x].qty = qty; 
                }

            }
        }
        */
        strshopcart = JSON.stringify(shopcart);
        localStorage.setItem('shopeditems' , strshopcart )
        showcart();
    }

    function deleteitem(id ){
        parseshopped();
        for (var x = 0; x < shopcart.length; x++) {
            if(shopcart[x].id == id ){
                shopcart.splice(x,1);
            }
        }
        strshopcart = JSON.stringify(shopcart);
        localStorage.setItem('shopeditems' , strshopcart )
        showcart();
    }


    function fMoney(n) {
        return n.toFixed(2) + '$';
    }
    
    function findinonj(id=-1,obj=[]){
        for (var x = 0; x < obj.length; x++) {
            if(obj[x].id == id ){
                return obj[x];
            }
        }
        return false ;
    }

    function parsemarket(){
        
       if(localStorage.getItem('marketitems') != null ){
            shopitems = JSON.parse( localStorage.getItem('marketitems')  ) ;
        }
    }






</script>
</body>

</html>
