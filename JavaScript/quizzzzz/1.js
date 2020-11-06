function pic(){
    var pic=Math.round(Math.random()*4)
    if(pic==1){
        var x=document.createElement("img")
        x.setAttribute("src","pic/1.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","150")
        document.body.appendChild(x)
    }else if(pic==2){
        var x=document.createElement("img")
        x.setAttribute("src","pic/2.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","150")
        document.body.appendChild(x)
    }else if(pic==3){
        var x=document.createElement("img")
        x.setAttribute("src","pic/3.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","150")
        document.body.appendChild(x)
    }else if(pic==4){
        var x=document.createElement("img")
        x.setAttribute("src","pic/4.jpg")
        x.setAttribute("width","150")
        x.setAttribute("height","150")
        document.body.appendChild(x)}
    setTimeout(pic, 1000);

}