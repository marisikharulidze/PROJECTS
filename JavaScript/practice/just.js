function faf(){
    var str = "abcdefghijklmnopqrstuvwxyz"
    minS=parseInt(document.getElementById("minSimbolo").value)
    maxS=parseInt(document.getElementById("maxSimbolo").value)
    minA=parseInt(document.getElementById("minSitkva").value)
    maxA=parseInt(document.getElementById("maxSitkva").value)
    a=parseInt(document.getElementById("abzaci").value)
    var output= ""
    //function rand(){
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