function kvemot(){
    //result += parseInt(document.querySelector(".box").style.top= "20px") + "px"
    const result=document.querySelector(".box");
    var k=result.style.top = `${result.offsetTop + 10}px`
    document.getElementById("zemot").disabled = false;
    
    if(k==330+"px"){
        document.getElementById("kvemot").disabled = true;
    }
    console.log(result)
}

function zemot(){
    const result=document.querySelector(".box");
    var k = result.style.top = `${result.offsetTop - 10}px`
    document.getElementById("kvemot").disabled = false;
    
    if(k<=0+"px"){
        document.getElementById("zemot").disabled = true;
    }
    console.log(result)
}

function marcxniv(){
    const result=document.querySelector(".box");
    var k = result.style.left = `${result.offsetLeft - 10}px`;
    document.getElementById("marjvniv").disabled = false;
    
    if(k<=0+"px"){
        document.getElementById("marcxniv").disabled = true;
    }
    console.log(result)
}

function marjvniv(){
    const result=document.querySelector(".box");
    var k = result.style.left = `${result.offsetLeft + 10}px`;
    document.getElementById("marcxniv").disabled = false;
    
    if(k==480+"px"){
        document.getElementById("marjvniv").disabled = true;
    }
    document.getElementById("kvemotMarj").disabled = false;
    console.log(result)
}

function kvemotMarc(){
    const result=document.querySelector(".box");
    var k = result.style.left = `${result.offsetLeft - 10}px`;
    var j = result.style.top = `${result.offsetTop + 10}px`
    
    if(j==330+"px"){
        document.getElementById("kvemotMarc").disabled = true;
    }
    if(k<=0+"px"){
        document.getElementById("kvemotMarc").disabled = true;
    }
    document.getElementById("zemotMarj").disabled = false;
    console.log(result)
}

function kvemotMarj(){
    const result=document.querySelector(".box");
    var k = result.style.left = `${result.offsetLeft + 10}px`;
    var j = result.style.top = `${result.offsetTop + 10}px`

    if(k==480+"px"){
        document.getElementById("kvemotMarj").disabled = true;
    }
    if(j==330+"px"){
        document.getElementById("kvemotMarj").disabled = true;
    }
    document.getElementById("zemotMarc").disabled = false;

    console.log(result)
}

function zemotMarc(){
    const result=document.querySelector(".box");
    var k = result.style.top = `${result.offsetTop - 10}px`
    var j = result.style.left = `${result.offsetLeft - 10}px`;

    if(k<=0+"px"){
        document.getElementById("zemotMarc").disabled = true;
    }
    if(j<=0+"px"){
        document.getElementById("zemotMarc").disabled = true;
    }
    document.getElementById("kvemotMarc").disabled = false;
    console.log(result)
}

function zemotMarj(){
    const result=document.querySelector(".box");
    var k = result.style.top = `${result.offsetTop - 10}px`
    var j = result.style.left = `${result.offsetLeft + 10}px`;

    if(k<=0+"px"){
        document.getElementById("zemotMarj").disabled = true;
    }
    if(j==480+"px"){
        document.getElementById("zemotMarj").disabled = true;
    }
    document.getElementById("kvemotMarc").disabled = false;
    console.log(result)
}

// document.addEventListener('keypress', key);
// function key(e) {
//     const log = document.getElementById('log');
//     if(e.keyCode == '39'){
//         console.log("fuckk )))")
//     }
//     log.textContent += ` ${e.code}`;
  
// }

document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 39:
            var box = document.querySelector(".box").animate([
                { transform: 'translateX(0%)' }, 
                { transform: 'translate(480px)' }
              ], { 
                duration: 2000, iterations: Infinity});
        default : break;
    }
}




// function func(){
    
//     box = document.querySelector(".box");
//     box.KeyframeEffect(ke)
//     // box.style.width+="42px";
// }

