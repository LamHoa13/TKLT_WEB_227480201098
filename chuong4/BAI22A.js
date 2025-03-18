var total=0;
var state=" ";
document.getElementById("0").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 0;
})
document.getElementById("1").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 1;
})
document.getElementById("2").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 2;
})
document.getElementById("3").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 3;
})
document.getElementById("4").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 4;
})
document.getElementById("5").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 5;
})
document.getElementById("6").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 6;
})
document.getElementById("7").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 7;
})
document.getElementById("8").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 8;
})
document.getElementById("9").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 9;
})

document.getElementById("+").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='+';
    document.getElementsByName("kq")[0].value= '+';
})
document.getElementById("-").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='-';
    document.getElementsByName("kq")[0].value= '-';
})
document.getElementById("*").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='*';
    document.getElementsByName("kq")[0].value= '*';
})
document.getElementById("/").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='/';
    document.getElementsByName("kq")[0].value= '/';
})
document.getElementById("=").addEventListener("click",function(){
    switch(state){
        case '+': total+=parseFloat(document.getElementsByName("kq")[0].value); break;
        case '-':{
            let sub = document.getElementsByName("kq")[0].value;
            sub = sub.substring(1);
            total-=parseFloat(sub); break;
        } 
        case '*':
            {
                let multi = document.getElementsByName("kq")[0].value;
                multi = multi.substring(1);
                total*=parseFloat(multi); break;
            } 
        case '/':{
            let div = document.getElementsByName("kq")[0].value;
            div = div.substring(1);
            total/=parseFloat(div); break;
        } 
    }
    document.getElementsByName("kq")[0].value=total;
    
})
document.getElementById("clear").addEventListener("click",function(){

    document.getElementsByName("kq")[0].value='0';
    total=0;
    
})