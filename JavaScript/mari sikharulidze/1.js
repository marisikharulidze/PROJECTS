function rand(){
    result= ``
    for(i = 0; i<10; i++){
        randNum = Math.floor(Math.random()*25 + 97)
        result += String.fromCharCode(randNum)
    }
    return result
}
function table(){
    result = `
    
    <tr>
        <td>${rand()}</td>
        <td>${rand()}</td>
    </tr>
    <tr>
        <td>${rand()}</td>
        <td>${rand()}</td>
    </tr>
    <tr>
        <td>${rand()}</td>
        <td>${rand()}</td>
    </tr>
    
    `
    document.getElementById("table").innerHTML=result
}
setInterval(()=> {table()},1000);