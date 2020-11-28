function parentNodee(){
    document.querySelector(".h1").parentNode.style.backgroundColor = 'red'
    document.querySelector(".h1").nextElementSibling.style.backgroundColor = 'red'
    document.querySelector(".pirveli").firstElementChild.style.backgroundColor = 'white'
    document.querySelector(".pirveli").lastElementChild.style.backgroundColor = 'greenyellow'

    // var foniH =document.querySelector(".h1")
    // var foniB =document.querySelector(".pirveli")
    // var foni =document.querySelector(".p")
    // foniB.style.backgroundColor = 'red'
    // foni.style.backgroundColor = 'red'
    // foniH.style.backgroundColor = 'white'
}
function firstChildd(){
    document.querySelector(".pirveli").firstElementChild.style.backgroundColor = 'red'
    document.querySelector(".h1").parentNode.style.backgroundColor = 'white'
    document.querySelector(".h1").nextElementSibling.style.backgroundColor = 'white'
    document.querySelector(".pirveli").lastElementChild.style.backgroundColor = 'greenyellow'
    
    // var foniH =document.querySelector(".h1")
    // var foniB =document.querySelector(".pirveli")
    // var foni =document.querySelector(".p")
    // foniB.style.backgroundColor = 'white'
    // foni.style.backgroundColor = 'white'
    // foniH.style.backgroundColor = 'red'
}
function lastChildd(){
    document.querySelector(".pirveli").lastElementChild.style.backgroundColor = 'red'
    document.querySelector(".pirveli").firstElementChild.style.backgroundColor = 'white'
    document.querySelector(".h1").parentNode.style.backgroundColor = 'white'
    document.querySelector(".h1").nextElementSibling.style.backgroundColor = 'white'
    
}
function nextSiblingg(){
    document.querySelector(".h1").parentNode.style.backgroundColor = 'white'
    document.querySelector(".h1").nextElementSibling.style.backgroundColor = 'red'
    document.querySelector(".pirveli").firstElementChild.style.backgroundColor = 'white'
    document.querySelector(".pirveli").lastElementChild.style.backgroundColor = 'greenyellow'

    // var foniH =document.querySelector(".h1")
    // var foniB =document.querySelector(".pirveli")
    // var foni =document.querySelector(".p")
    // foniB.style.backgroundColor = 'white'
    // foni.style.backgroundColor = 'red'
    // foniH.style.backgroundColor = 'white'
}
function previousSiblingg(){
    document.querySelector(".pirveli").lastElementChild.style.backgroundColor = 'greenyellow'
    document.querySelector(".pirveli").firstElementChild.style.backgroundColor = 'white'
    document.querySelector(".h1").parentNode.style.backgroundColor = 'white'
    document.querySelector(".h1").nextElementSibling.style.backgroundColor = 'white'
    document.querySelector(".box").previousElementSibling.style.backgroundColor = 'red'
    
}