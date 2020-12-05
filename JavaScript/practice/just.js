function addElement(){
    d1 = document.querySelector(".d1");
    box = document.createElement("div");
    box.style.backgroundColor = getRandomColor();
    box.style.top = Math.floor(Math.random()*276)+"px";
    box.style.left = Math.floor(Math.random()*676)+"px";
    box.classList.add("box");
    box.addEventListener("click", function(e){
        // console.log(e);
        // console.log(e.target);
        // console.log(this);
        this.parentNode.removeChild(this);
        points = document.getElementById("points");
        p = parseInt(points.innerHTML);
        p++;
        points.innerHTML = p;
    });
    // console.log(box);
    // console.log(d1);
    d1.appendChild(box);
}

function points(){

}

function startAddElement(){
    start = setInterval(addElement, 1000);
    time = setInterval(timer, 1000);
}

function  timer() {
    timer = document.getElementById("timer");
    t = parseInt(timer.innerHTML);
    t--;
    timer.innerHTML = t;
    if(t==0){
        clearInterval(start);
        clearInterval(time);
        d1 = document.querySelector(".d1");
        boxChilder = d1.children;
        for(var i=0; i<boxChilder.length; i++){
            var old_element = boxChilder[i];
            var new_element = old_element.cloneNode(true);
            old_element.parentNode.replaceChild(new_element, old_element);
        }
    }
}



function getRandomColor(){
    var color = {
        red: Math.floor(Math.random()*256),
        green: Math.floor(Math.random()*256),
        blue: Math.floor(Math.random()*256)
    }
    return "rgb("+color.red+", "+color.green+", "+color.blue+")";
}