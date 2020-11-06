function confirmm(){
    var k=confirm("gamarjobat, gsurt gaigot veb gverdis shesaxeb ufro meti? ;)")
    if (k==true){
        var a="gilocavt"
        k=a.fontcolor("red")
        document.write(k.fontsize(6))
        var o=" tqven swori archevani gaaketet"
        document.write(o.fontsize(6))
    }else{
        var l="dainteresdit veb gverdis awkobis teknologiit :)"
        document.write(l.fontsize(5))
    }
}
function promptt(){
    var k = prompt("input week day (1,2,3,4,5,6,7)")
    if(k>7){
        document.write("there is no matching week day")
    }else if(k==1){document.write("monday")}
    else if(k==2){document.write("tuesday")}
    else if(k==3){document.write("wednesday")}
    else if(k==4){document.write("thursday")}
    else if(k==5){document.write("friday")}
    else if(k==6){document.write("saturday")}
    else if(k==7){document.write("sunday")}
    else{document.write("you pressed cancel or ok without inputting a number")}
}
function func5(){
    var d=new Date();
    document.write("weli : "+d.getFullYear())
    document.write("  tve : "+d.getMonth())
    document.write("  ricxvi : "+d.getDate())
    document.write("  kviris dge : "+d.getDay())
    document.write("  saati : "+d.getHours())
    document.write("  wuti : "+d.getMinutes())
    document.write("  wami : "+d.getSeconds())
    document.write("  miliwami : "+d.getMilliseconds())
}
function func6(){
    var date= new Date()
    var hour=date.getHours()
    var minute=date.getMinutes()
    var seconds=date.getSeconds()
    hour= updateTime(hour)
    minute=updateTime(minute)
    seconds=updateTime(seconds)
    document.getElementById("clock").innerText=hour+" : "+minute+" : "
    +seconds
    setTimeout(function(){func6()},1000)
    
    function updateTime(k){
        if (k<10){
            return "0"+k
        }
        else{
            return k
        }
    }
}
/*function func7(){
    var date=new date()
    var year=date.getFullYear()
    var day=date.getDate()
    var hour=date.getHours()
    var min=date.getMinutes()
    var sec=date.getSeconds()
    year=updateTime(year)
    day=updateTime(day)
    hour=updateTime(hour)
    min=updateTime(min)
    sec=updateTime(sec)
    document.getElementById("sClock").innerText=year-sYear +"year:  "+day+"day"

    function updateTime(k){
        if(k<10){return "0"+k}
        else{return k}
    }
    var sYear=2016
    var Smonth=1
    ?????????????????????????????????
}*/
