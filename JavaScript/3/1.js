function str(){
    var str = "something!";
    document.write(str.length)
}
function str2(){
    var str="beautiful day"
    count=0
    for(i=0; i<str.length; i++){
        if(str.charAt(i)=="a"){
            count +=1
        }
    }
    document.write(count)
}
function str3(){
    var str="beautiful day and i sit at home"
    count=0
    for(i=0; i<str.length; i++){
        if(str.charAt(i)==" "){
            count +=1
        }
    }
    document.write(count+1)
}
function str4(){
    var str="beautiful day"
    for(i=0;i<=str.length;i++){
        document.write(str.charCodeAt(i))

    }
}
function func5(){
    var str = "abcdefghijklmnopqrstuvwxyz123456789!@#$%"
    for (i=0; i<40;i++){
        document.write(str.charAt(Math.floor(Math.random()*39)))
    }
}
function func6(){
    var str = "abcdefghijklmnopqrstuvwxyz123456789!@#$%^&*-=+|/"
    for (i=0; i<str.length; i++){
        document.write(str.charAt(Math.floor(Math.random()*str.length-1)))
    }
}
function func7(){
    var n= "abcdefghijklmnopqrstuvwxyz"
    function shemtxveviti(){
        for (i=0; i<n.length; i++){
            document.write(n.charAt(Math.floor(Math.random()*n.length-1)))  
        }
        document.write("  ")
    }
    for(j=1;j<=20;j++){
        shemtxveviti()
    }
    
}
function func8(){
    var str = "abcdefghijklmnopqrstuvwxyz123456789!"
    var m = 10 ; var n = 30
    function shemtxveviti(){
        for (i=0; i<=str.length;i++){
            document.write(str.charAt(Math.floor(Math.random()*(n-m)+m)))
        }
        document.write("  ")
    }
    var k = 12
    for(j=1;j<=k;j++){
        shemtxveviti()
    }
}
function func9(){
    var str="its a beautiful day to be sitting at home:)"
    var arr = ["great", "beautiful", "to", "and"]
    for(i=0;i<arr.length;i++){
        ar = arr[i]
        if (str.includes(ar)){
            document.write(ar+"  ")
        }
    }document.write("<br>"+"სტრიქონში მოიძებნება სტრიქონების მასივში ჩაწერილი სიტყვები.")
}
function func10(){
    var str="its a beautiful day to be sitting at home :)"
    var arr = ["great", "beautiful", "to", "and"]
    for(i=0;i<arr.length;i++){
        var ar = arr[i]
        if (str.includes(ar)){
            str=str.replace(ar,"*")
        }
    }
    document.write(str+"<br>")
}
function func11(){
    return 0
    var str="its a beautiful day to be sitting at home:)"
    let find = 'a'
    while(str.indexOf(find)!=-1){
        srt = str.replace(find," ")
        document.write(str)
    }
}


function faf(){
    var str = "abcdefghijklmnopqrstuvwxyz"
    minS=parseInt(document.getElementById("minSimbolo").value)
    maxS=parseInt(document.getElementById("maxSimbolo").value)
    minA=parseInt(document.getElementById("minSitkva").value)
    maxA=parseInt(document.getElementById("maxSitkva").value)
    a=parseInt(document.getElementById("abzaci").value)
    var output= ""
        x = Math.floor(Math.random()*(maxA-minA)+minA)
        y = Math.floor(Math.random()*(maxS-minS)+minS)
        for(i=0; i<a; i++){
            for(j=0; j<x; j++){
                for(k=0; k<y; k++){
                    output=output + str.charAt(Math.floor(Math.random()*str.length))
                    console.log(output)
                } 
                output+=" "
            } 
            output +="\n"
        }      
        document.getElementById("end").value="you get : "+output
}