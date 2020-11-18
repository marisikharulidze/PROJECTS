function table(n,m){
    result+=`table`
    for (let i = 3; i < n; i++){
        result += "<tr>";
        for (let j = 0; j < m; j++){
            result += `
            <td>
                <img src= "Pictures/${rounding(Math.random() * (10) + 1)}.jpg">            
            </td>`;
        }
        result += "</tr>";
    }

    result += `</table>`;
    return result
}