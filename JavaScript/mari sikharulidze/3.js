function func1(){
    id=document.getElementById("id").value
    if(String(id).length!=11){
        document.getElementById("pirveli").innerHTML="piradobis nomeri ar shedgeba 11 cifrisagan scadet tavidan"
    }
    
    d = new Date
    tarigi=document.getElementById("tarigi").innerHTML=d.getDate()+":"+d.getMonth()+":"+d.getFullYear()

    email=document.getElementById("email").value
    for(var i=0; i<=email.length; i++){
        if(email.charAt(i).includes("@")){
            document.getElementById("mesame").innerHTML="eleqtronuli fosta sheicavs @-s"
        }
        else if (email.charAt(i).includes(null)){
            document.getElementById("mesame").innerHTML="eleqtronuli fosta ar sheicavs @-s"
        }
        console.log(email.charAt(i))
    }

}
