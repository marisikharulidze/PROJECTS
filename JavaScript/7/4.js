function txt(){
    div = document.getElementById("div").textContent
    p = document.getElementById("p").textContent
    console.log(div)
    console.log(p)
    console.log(document.getElementById("body").firstElementChild)
    console.log(document.getElementById("div").nextElementSibling)

    document.getElementById("end").innerHTML="<br>"+div +"<br>"+p
}
