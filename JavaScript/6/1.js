function func1(){
    document.getElementById("smth").innerText="orshabati"
}function func2(){
    document.getElementById("smth").innerText="samshabati"
}function func3(){
    document.getElementById("smth").innerText="otxshabati"
}function func4(){
    document.getElementById("smth").innerText="xutshabati"
}function func5(){
    document.getElementById("smth").innerText="paraskevi"
}function func6(){
    document.getElementById("smth").innerText="shabati"
}function func7(){
    document.getElementById("smth").innerText="kvira"
}

function plus(){
    num1=document.getElementById("num1")
    num2=document.getElementById("num2")
    sum=parseInt(num1.value)+parseInt(num2.value)
    result=document.getElementById("result").innerHTML=sum
}
function minus(){
    num1=document.getElementById("num1")
    num2=document.getElementById("num2")
    sum=parseInt(num1.value)-parseInt(num2.value)
    result=document.getElementById("result").innerHTML=sum
}
function mult(){
    num1=document.getElementById("num1")
    num2=document.getElementById("num2")
    sum=parseInt(num1.value)*parseInt(num2.value)
    result=document.getElementById("result").innerHTML=sum
}
function div(){
    num1=document.getElementById("num1")
    num2=document.getElementById("num2")
    sum=parseInt(num1.value)/parseInt(num2.value)
    result=document.getElementById("result").innerHTML=sum
}
function axarisxeba(){
    num1=document.getElementById("num1")
    num2=document.getElementById("num2")
    sum=parseInt(num1.value)**parseInt(num2.value)
    result=document.getElementById("result").innerHTML=sum
}
function fesvi(){
    num1=document.getElementById("num1")
    num2=document.getElementById("num2")
    n1=1/parseInt(num2.value)
    sum=parseInt(num1.value)**n1
    result=document.getElementById("result").innerHTML=sum
}
function ez_calculate(){
    p=document.getElementById("princ").value
    r=document.getElementById("rate").value
    t=document.getElementById("time").value
    okay=document.getElementById("okay").innerHTML="simple interest is : "+(p*r*t/100)
}
function hard_calculate(){
    amm=document.getElementById("ammount").value
    r=document.getElementById("ratei").value
    y=document.getElementById("years").value
    ry=document.getElementById("rateY").value
    var r1=r/100
    result=document.getElementById("results").innerHTML="compund interest is : "+
        amm*Math.pow((1+r1/ry),ry*y)
}
function ricxvi(){
    num=Math.floor(Math.random()*30)
    document.getElementById("gilaki").innerHTML=num
}
function shualedi(a,b){
    num=Math.floor(Math.random()*(b-a)+a)
    document.getElementById("shualedi").innerHTML=num
}