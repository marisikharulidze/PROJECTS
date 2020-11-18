function str(){
    var n=prompt("შეიყვანეთ სტრიქონი")
    document.write(n+"<br>")    
    var count=0
    var string=n.toString()
    for(var i=0; i<string.length;i++){
        if (string.charAt(i)=="ა" || string.charAt(i)=="ე" || string.charAt(i)=="ი" ||
            string.charAt(i)=="ო" || string.charAt(i)=="უ") continue;
        document.write(string.charAt(i))
        count+=1;
    }
    document.write("<br>")
    document.write("ხმოვანთა რაოდენობა : ",count)    
}
