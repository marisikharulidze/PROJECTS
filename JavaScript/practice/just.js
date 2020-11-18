function func10(){
    var str="its a beautiful day to be sitting at home:)"
    var arr = ["great", "beautiful", "to", "and"]
    for(i=0;i<arr.length;i++){
        ar = arr[i]
        if (str.includes(ar)){
            document.write(ar+"  ")
        }
    }document.write("<br>"+"სტრიქონში მოიძებნება სტრიქონების მასივში ჩაწერილი სიტყვები.")
}