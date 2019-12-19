function domov(pritisnjenaTipka){
    //pove katera tipka je bila pritisnjena
    if(pritisnjenaTipka.keyCode==13){ //13 je tipka ENTER
        window.location.assign("Galerija.php"); //preusmeritev na galerijo
    }
}