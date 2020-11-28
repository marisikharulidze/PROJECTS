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
    console.log(result)
}
function rand(){
    result= ``
    num = Math.round(Math.random()*(50-10)+10)
    result+=num
    return result
}

    
