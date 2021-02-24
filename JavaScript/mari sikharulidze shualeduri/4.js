function rand(){
    var str = "abcdefghijklmnopqrstuvwxyz123456789"
    var i =0
    result=""
    while (i<6){
        result+=str.charAt(Math.floor(Math.random()*str.length))
        i++
    }
    document.getElementById("erti").innerText=result
}

function nebartva(){
    document.getElementById("a").disabled = false;
    document.getElementById("b").disabled = false;
    document.getElementById("c").disabled = false;
    document.getElementById("d").disabled = false;
    document.getElementById("e").disabled = false;
    document.getElementById("f").disabled = false;
    document.getElementById("g").disabled = false;
    document.getElementById("h").disabled = false;
    document.getElementById("i").disabled = false;
    document.getElementById("j").disabled = false;
    document.getElementById("k").disabled = false;
    document.getElementById("l").disabled = false;
    document.getElementById("m").disabled = false;
    document.getElementById("n").disabled = false;
    document.getElementById("o").disabled = false;
    document.getElementById("p").disabled = false;
    document.getElementById("q").disabled = false;
    document.getElementById("r").disabled = false;
    document.getElementById("s").disabled = false;
    document.getElementById("t").disabled = false;
    document.getElementById("u").disabled = false;
    document.getElementById("v").disabled = false;
    document.getElementById("w").disabled = false;
    document.getElementById("x").disabled = false;
    document.getElementById("y").disabled = false;
    document.getElementById("z").disabled = false;
    document.getElementById("0").disabled = false;
    document.getElementById("1").disabled = false;
    document.getElementById("2").disabled = false;
    document.getElementById("3").disabled = false;
    document.getElementById("4").disabled = false;
    document.getElementById("5").disabled = false;
    document.getElementById("6").disabled = false;
    document.getElementById("7").disabled = false;
    document.getElementById("8").disabled = false;
    document.getElementById("9").disabled = false;    
    document.getElementById("space").disabled = false;    
}
resultt=""
function a(){
    resultt=document.getElementById("ori").innerText=resultt + "a"
}function b(){
    resultt=document.getElementById("ori").innerText=resultt + "b"
}function c(){
    resultt=document.getElementById("ori").innerText=resultt + "c"
}function d(){
    resultt=document.getElementById("ori").innerText=resultt + "d"
}function e(){
    resultt=document.getElementById("ori").innerText=resultt + "e"
}function f(){
    resultt=document.getElementById("ori").innerText=resultt + "f"
}function g(){
    resultt=document.getElementById("ori").innerText=resultt + "g"
}function h(){
    resultt=document.getElementById("ori").innerText=resultt + "h"
}function i(){
    resultt=document.getElementById("ori").innerText=resultt + "i"
}function j(){
    resultt=document.getElementById("ori").innerText=resultt + "j"
}function k(){
    resultt=document.getElementById("ori").innerText=resultt + "k"
}function l(){
    resultt=document.getElementById("ori").innerText=resultt + "l"
}function m(){
    resultt=document.getElementById("ori").innerText=resultt + "m"
}function n(){
    resultt=document.getElementById("ori").innerText=resultt + "n"
}function o(){
    resultt=document.getElementById("ori").innerText=resultt + "o"
}function p(){
    resultt=document.getElementById("ori").innerText=resultt + "p"
}function q(){
    resultt=document.getElementById("ori").innerText=resultt + "q"
}function r(){
    resultt=document.getElementById("ori").innerText=resultt + "r"
}function s(){
    resultt=document.getElementById("ori").innerText=resultt + "s"
}function t(){
    resultt=document.getElementById("ori").innerText=resultt + "t"
}function u(){
    resultt=document.getElementById("ori").innerText=resultt + "u"
}function v(){
    resultt=document.getElementById("ori").innerText=resultt + "v"
}function w(){
    resultt=document.getElementById("ori").innerText=resultt + "w"
}function x(){
    resultt=document.getElementById("ori").innerText=resultt + "x"
}function y(){
    resultt=document.getElementById("ori").innerText=resultt + "y"
}function z(){
    resultt=document.getElementById("ori").innerText=resultt + "z"
}function o0(){
    resultt=document.getElementById("ori").innerText=resultt + "0"
}function o1(){
    resultt=document.getElementById("ori").innerText=resultt + "1"
}function o2(){
    resultt=document.getElementById("ori").innerText=resultt + "2"
}function o3(){
    resultt=document.getElementById("ori").innerText=resultt + "3"
}function o4(){
    resultt=document.getElementById("ori").innerText=resultt + "4"
}function o5(){
    resultt=document.getElementById("ori").innerText=resultt + "5"
}function o6(){
    resultt=document.getElementById("ori").innerText=resultt + "6"
}function o7(){
    resultt=document.getElementById("ori").innerText=resultt + "7"
}function o8(){
    resultt=document.getElementById("ori").innerText=resultt + "8"
}function o9(){
    resultt=document.getElementById("ori").innerText=resultt + "9"
}function space(){
    resultt=document.getElementById("space").innerText=resultt + " "
}

function shemowmeba(){
    erti = document.getElementById("erti").value
    ori = document.getElementById("ori").value
    if(erti==ori) {
        document.getElementById("div").style.color='green'
        document.getElementById("div").innerText="kodi sworia"
    }else{
        document.getElementById("div").style.color='red'
        document.getElementById("div").innerText="kodi ar aris swori"
    }
}