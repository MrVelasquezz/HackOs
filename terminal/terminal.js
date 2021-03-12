var h, m, s, i;
var timp = '';
let treq = [];
let answ = [];
let rand_ip = [];
let ip_adr = [];
let ip_part = 0;
let ipd_part = 0;

function t() {
    let date = new Date();
    h = date.getHours();
    m = date.getMinutes();
    s = date.getSeconds();
    if (h <= 9) {
        h = '0' + h;
    }
    if (m <= 9) {
        m = '0' + m;
    }
    if (s <= 9) {
        s = '0' + s;
    }
}

function handler() {
    t();
    treq.push('[' + h + ':' + m + ':' + s + ']' + ' ' + timp);
    if (timp.indexOf('ip') != -1 && timp.indexOf('adr') != -1 && timp.indexOf('show') != -1) {
        t();

        for (i = 0; i < 4; i++) {

            ipd_part = Math.floor(Math.random() * 1000);
            ip_part = Math.floor(Math.random() * 100);

            rand_ip.push(ipd_part, ip_part);
        }

        answ = [];
        answ = [' </br>', 'lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000 </br>    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00 </br>    inet 127.0.0.1/8 scope host lo </br> inet6 ::1/128 scope host </br>', ' </br>', 'lan0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc mq state UP group default qlen 1000 </br> link/ether 00:15:5d:00:0b:00 brd ff:ff:ff:ff:ff:ff </br> inet <strong class="ip">' + rand_ip[0] + '.' + rand_ip[2] + '.' + rand_ip[1] + '.' + rand_ip[3] + '</strong> brd <strong class="ip">' + rand_ip[4] + '.' + rand_ip[6] + '.' + rand_ip[5] + '.' + rand_ip[7] + '</strong> scope global noprefixroute lan0 </br>inet6 fe80::21de:fd46:49da:3a86/64 scope link noprefixroute </br>', ' </br>'];
        ip_adr = [rand_ip[0] + '.' + rand_ip[2] + '.' + rand_ip[1] + '.' + rand_ip[3], rand_ip[4] + '.' + rand_ip[6] + '.' + rand_ip[5] + '.' + rand_ip[7]];

        for (i = 0; i < answ.length; i++) {
            treq.push(answ[i]);
        }

        newMessage();
    }
    if (timp.indexOf('xhydra') != -1) {
        answ = [];
        answ = [' </br>','Запускаю Hydra.', 'Hydra откроется в отдельном окне.', ' </br>'];

        for (i = 0; i <= answ.length - 1; i++) {
            treq.push(answ[i]);
        }

        newMessage();
    }

    if(timp.indexOf('nmap') != -1 && timp.indexOf('-sn') != -1  && timp.indexOf('localhost') != -1){
        treq.push('nmaped');
        newMessage();
    }

    if (timp) {
        newMessage();
    }
}

function newMessage() {

    for (i = 0; i < treq.length; i++) {
        let tmsg = document.createElement('div')
        tmsg.setAttribute('class', 'tmsg text-light');

        let tcd = document.createElement('code');

        tcd.innerHTML = treq[i];
        tmsg.appendChild(tcd);

        $('.tmsgbox').append(tmsg);
        $('#term_i').val('');
    }

    treq = [];
    listener;
}

let listener = document.addEventListener('keydown', function (event) {
    if (event.code == 'Enter' && event.key == 'Enter' && $('#term_i').val().length >= 1) {
        document.removeEventListener('keydown', listener);
        timp = $('#term_i').val();
        handler();
    }
});