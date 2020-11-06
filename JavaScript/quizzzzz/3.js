
function table_builder(row, col){
    result = `<table>`;

    for (let i = 0; i < row; i++){
        result += "<tr>";
        for (let j = 0; j < col; j++){
            result += `
            <td>
                <img src= "Pictures/${rounding(Math.random() * (20) + 1)}.jpg">
                <br>
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