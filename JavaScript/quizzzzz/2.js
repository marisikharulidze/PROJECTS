function fanjara(){
    var n=prompt("enter string")
    document.write(n.length+"<br>")
    if(n!=n.match(/^[A-Za-z]+$/)){
        
        var stripped = n.replace(/[^A-Za-z0-9]/g, '');
        document.write(stripped)

        n.replace(/^[A-Za-z]+$/g,"s")
        document.write(n)
    }
}
function isVoWel(char){
    if(char.length==1){
        var vowels=new Array("ა","ე","ი","ო","უ");
        var isVowels=false;

        for (e in vowels){
            if(vowels[e]==char){
                isVowels=true
            }
        }
        return isVowels
    }
    function deleteVolwes(str){
        let newStr="";
        for(var i=0;i<str.length;i++){
            if(!isVowel(str[i])) newStr=newStr+str[i];
        }
    return newStr
    }
}