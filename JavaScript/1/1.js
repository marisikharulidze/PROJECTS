function smth(name="1)something",class_name="oo"){
    document.write("<p class="+class_name+">"+name+"</p>")
}

function jami(name="a da b ricxvebis jami"){
    document.write(name);
    var a=2,b=3;
    c = a + b;
    document.write(" a+b=",c)
}
function shrifti(name="3)shrifti",css="shrifti"){
    document.write("<p class="+css+">"+name+"</p>")
}
function table_builder(sigane=100, simagle=100,bgColor="white",borderWidth=1){
    table = `<table style="width:`+sigane+`px;
                           height:`+simagle+`px;
                           background:`+bgColor+`";
                           border="`+borderWidth+`"
                           collspacing="0"
                           collpading="0">`;
        table +=` <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>`;
        table += '</table>';
        document.write(table);
}
function num(){
    for(var i=1;i<=10;i++){
        document.write(i+" ");
    }
}
function parameterN(n){
    for(var i=1;i<=n;i++){
        document.write(i+"<br>");
    }
}
function parameterMN(m,n){
    for(var i=m;i<=n;i++){
        document.write(i+"<br>");
    }
}
function parameter(m,n){
    if (m<n){
        for(var i=m;i<=n;i++){
            document.write(i+"<br>");
        }
    }
    else {
        for(var i=n;i<=m;i++){
            document.write(i+"<br>");
        }
    }
    
}