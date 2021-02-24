function rand(){
    var red = Math.floor(Math.random()*256)
    var blue = Math.floor(Math.random()*256)
    var green = Math.floor(Math.random()*256)

    var main = document.getElementById("table")
    console.log(main)
    // var child = main.childNodes
    main.style.backgroundColor = "rgb("+red+","+blue+","+green+")";
    // child.style.backgroundColor = "rgb("+red+","+blue+","+green+")";


}

function table(){
    result = `
    
    <tr>
        <td>${rand()}</td>
        <td>${rand()}</td>
        <td>${rand()}</td>
    </tr>
    <tr>
        <td>${rand()}</td>
        <td>${rand()}</td>
        <td>${rand()}</td>
    </tr>
    <tr>
        <td>${rand()}</td>
        <td>${rand()}</td>
        <td>${rand()}</td>
    </tr>
    
    `
    document.getElementById("table").innerHTML=result
}
setInterval(()=> {table()},3000);