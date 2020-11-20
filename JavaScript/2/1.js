function metobit(a){
    document.write(Math.ceil(a));
}
function naklebobit(a){
    document.write(Math.floor(a));
}
function damrgvaleba(a){
    document.write(Math.round(a));
}
function damrgvalebaa(m,n){
    if(n==true){
        document.write(Math.ceil(m)+"<br>")
    }else if(n==false) {
        document.write(Math.floor(m)+"<br>")
    }else{
        document.write("b unda ikos true an false"+"<br>")
    }
}
function rand(){
    document.write(Math.random());
}
function randNum(min,max){
    return Math.random() * (max-min)+min;
}
function random(a,b){
    return Math.random()*(b-a) +a;
}
function randomab(a,b){
    return Math.round(Math.random() * (b-a) +a)
}
function randomAB(a,b){
    for(var i=1;i<=10;i++){
        document.write(Math.round(Math.random()*(b-a)+a)+"<br>")
    }
}
function rand10(a,b,n){
    for(var i=1;i<=n;i++){
        document.write(Math.round(Math.random()*(b-a)+a)+"<br>")
    }
}
function day(){
    var day=Math.round(Math.random()*7)
    if(day==1){
       document.write("monday") 
    }else if (day==2){
        document.write("tuesday")
    }else if (day==3){
        document.write("wednesday")
    }else if (day==4){
        document.write("thursday")
    }else if (day==5){
        document.write("friday")
    }else if (day==6){
        document.write("Saturday")
    }else{
        document.write("sunday")
    }
}
function pic(){
    var pic=Math.round(Math.random()*(10-1)+1)
    if(pic==1){
        var x=document.createElement("img")
        x.setAttribute("src","pic/1.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==2){
        var x=document.createElement("img")
        x.setAttribute("src","pic/2.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==3){
        var x=document.createElement("img")
        x.setAttribute("src","pic/3.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==4){
        var x=document.createElement("img")
        x.setAttribute("src","pic/4.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==5){
        var x=document.createElement("img")
        x.setAttribute("src","pic/5.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==6){
        var x=document.createElement("img")
        x.setAttribute("src","pic/6.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==7){
        var x=document.createElement("img")
        x.setAttribute("src","pic/7.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==8){
        var x=document.createElement("img")
        x.setAttribute("src","pic/8.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==9){
        var x=document.createElement("img")
        x.setAttribute("src","pic/9.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==10){
        var x=document.createElement("img")
        x.setAttribute("src","pic/10.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }   
}
function pic2(){
    var pic =Math.round(Math.random()*(20-1)+1)
    if(pic==1){
        var x=document.createElement("img")
        x.setAttribute("src","pic/1.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==2){
        var x=document.createElement("img")
        x.setAttribute("src","pic/2.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==3){
        var x=document.createElement("img")
        x.setAttribute("src","pic/3.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==4){
        var x=document.createElement("img")
        x.setAttribute("src","pic/4.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==5){
        var x=document.createElement("img")
        x.setAttribute("src","pic/5.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==6){
        var x=document.createElement("img")
        x.setAttribute("src","pic/6.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==7){
        var x=document.createElement("img")
        x.setAttribute("src","pic/7.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==8){
        var x=document.createElement("img")
        x.setAttribute("src","pic/8.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==9){
        var x=document.createElement("img")
        x.setAttribute("src","pic/9.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==10){
        var x=document.createElement("img")
        x.setAttribute("src","pic/10.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }if(pic==11){
        var x=document.createElement("img")
        x.setAttribute("src","pic/11.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==12){
        var x=document.createElement("img")
        x.setAttribute("src","pic/12.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==13){
        var x=document.createElement("img")
        x.setAttribute("src","pic/13.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==14){
        var x=document.createElement("img")
        x.setAttribute("src","pic/14.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==15){
        var x=document.createElement("img")
        x.setAttribute("src","pic/15.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==16){
        var x=document.createElement("img")
        x.setAttribute("src","pic/16.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==17){
        var x=document.createElement("img")
        x.setAttribute("src","pic/17.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==18){
        var x=document.createElement("img")
        x.setAttribute("src","pic/18.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==19){
        var x=document.createElement("img")
        x.setAttribute("src","pic/19.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==20){
        var x=document.createElement("img")
        x.setAttribute("src","pic/20.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }
    var pic =Math.round(Math.random()*(20-1)+1)
    if(pic==1){
        var x=document.createElement("img")
        x.setAttribute("src","pic/1.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==2){
        var x=document.createElement("img")
        x.setAttribute("src","pic/2.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==3){
        var x=document.createElement("img")
        x.setAttribute("src","pic/3.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==4){
        var x=document.createElement("img")
        x.setAttribute("src","pic/4.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==5){
        var x=document.createElement("img")
        x.setAttribute("src","pic/5.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==6){
        var x=document.createElement("img")
        x.setAttribute("src","pic/6.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==7){
        var x=document.createElement("img")
        x.setAttribute("src","pic/7.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==8){
        var x=document.createElement("img")
        x.setAttribute("src","pic/8.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==9){
        var x=document.createElement("img")
        x.setAttribute("src","pic/9.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==10){
        var x=document.createElement("img")
        x.setAttribute("src","pic/10.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }if(pic==11){
        var x=document.createElement("img")
        x.setAttribute("src","pic/11.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==12){
        var x=document.createElement("img")
        x.setAttribute("src","pic/12.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==13){
        var x=document.createElement("img")
        x.setAttribute("src","pic/13.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==14){
        var x=document.createElement("img")
        x.setAttribute("src","pic/14.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==15){
        var x=document.createElement("img")
        x.setAttribute("src","pic/15.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==16){
        var x=document.createElement("img")
        x.setAttribute("src","pic/16.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==17){
        var x=document.createElement("img")
        x.setAttribute("src","pic/17.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==18){
        var x=document.createElement("img")
        x.setAttribute("src","pic/18.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==19){
        var x=document.createElement("img")
        x.setAttribute("src","pic/19.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==20){
        var x=document.createElement("img")
        x.setAttribute("src","pic/20.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }
}
function dayPic(){
    var day=Math.round(Math.random()*7)
    if(day==1){
       document.write("monday")
        var x=document.createElement("img")
        x.setAttribute("src","pic/1.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if (day==2){
        document.write("tuesday")
        var x=document.createElement("img")
        x.setAttribute("src","pic/2.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if (day==3){
        document.write("wednesday")
        var x=document.createElement("img")
        x.setAttribute("src","pic/3.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if (day==4){
        document.write("thursday")
        var x=document.createElement("img")
        x.setAttribute("src","pic/4.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if (day==5){
        document.write("friday")
        var x=document.createElement("img")
        x.setAttribute("src","pic/5.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if (day==6){
        document.write("Saturday")
        var x=document.createElement("img")
        x.setAttribute("src","pic/6.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else{
        document.write("sunday")
        var x=document.createElement("img")
        x.setAttribute("src","pic/7.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }
}
function day15(){
    var day=Math.round(Math.random()*7)
    if(day==1){
       document.write("monday") 
    }else if (day==2){
        document.write("tuesday")
    }else if (day==3){
        document.write("wednesday")
    }else if (day==4){
        document.write("thursday")
    }else if (day==5){
        document.write("friday")
    }else if (day==6){
        document.write("Saturday")
    }else{
        document.write("sunday")
    }
    var pic =Math.round(Math.random()*(5-1)+1)
    if(pic==1){
        var x=document.createElement("img")
        x.setAttribute("src","pic/1.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==2){
        var x=document.createElement("img")
        x.setAttribute("src","pic/2.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==3){
        var x=document.createElement("img")
        x.setAttribute("src","pic/3.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==4){
        var x=document.createElement("img")
        x.setAttribute("src","pic/4.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }else if(pic==5){
        var x=document.createElement("img")
        x.setAttribute("src","pic/5.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","100")
        document.body.appendChild(x)
    }
}
function Mday(){
    document.write(Math.round(Math.random()*(31-1)+1))
}


function table(){
    result = `
    
    <tr>
        <td>${pic()}</td>
        <td>${pic()}</td>
        <td>${pic()}</td>
        <td>${pic()}</td>
    </tr>
    <tr>
        <td>${pic()}</td>
        <td>${pic()}</td>
        <td>${pic()}</td>
        <td>${pic()}</td>
    </tr>
    <tr>
        <td>${pic()}</td>
        <td>${pic()}</td>
        <td>${pic()}</td>
        <td>${pic()}</td>
    </tr>
    
    
    `
    document.getElementById("table").innerHTML=result
    console.log(result)
}
