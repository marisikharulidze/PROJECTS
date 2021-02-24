function rand(n,k,p){
    for(var i=0;i<=n;i++){
        document.write(Math.round(Math.random()*(p-k)+k))
    }
}