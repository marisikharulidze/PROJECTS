

function rounding(number, fl = true){
    if (fl){
        return Math.floor(number)
    } else {
        return Math.ceil(number)
    }
}

function number_picker(start, end, times = 1){

    result = "";

    for (i = 0; i < times; i++){
        result += `${rounding(Math.random() * (end - start + 1) + start)} `;
    }

    return result
}

function table_builder(row, col){
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    

    result = `<table>`;

    for (let i = 0; i < row; i++){
        result += "<tr>";
        for (let j = 0; j < col; j++){
            picker = rounding(Math.random() * 12)
            rand_month = months[picker]
            if ((picker +1)%2 == 0){
                cope = 30
            } else{
                cope = 31
            }
            rand_date = rounding(Math.random() * (cope) + 1)
            result += `
            <td>
                <img src= "Pictures/${rounding(Math.random() * (20) + 1)}.jpg">
                <br>
                <span>${rand_month} ${rand_date}</span>
            
            </td>`;
        }
        result += "</tr>";
    }

    result += `</table>`;

    
    return result
}

function make_action(){
    row = document.getElementById("row").value;
    col = document.getElementById("col").value;
    console.log(table_builder(row, col));
    document.getElementById("test").innerHTML = table_builder(row, col)
    
} 

function clear(){
    document.getElementById("insert").innerHTML = "";
}