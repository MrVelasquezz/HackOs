let time = document.getElementById('time');
setInterval(()=>{
    let date = new Date();
    let h, m, s;
    h = date.getHours();
    m = date.getMinutes();
    s = date.getSeconds();
    if(h <= 9){
        h = '0' + h;
    }
    if(m <= 9){
        m = '0' + m;
    }
    if(s <= 9){
        s = '0' + s;
    }
    time.innerHTML = h + ':' + m + ':' + s;
}, 1000)