
document.querySelectorAll(".cls").forEach(item => {
    item.addEventListener('click', function () {
        let pe;
        pe = item.parentNode;
        while (pe.className.indexOf('win') != -1) {
            console.log(pe.className)
            pe = pe.parentNode;
        }
        $('#term_win').hide(1000);
        $('#brut_win').hide(1000);
    })
});



$('#brut').click(() => {
    if (!$('#brut_win')[0].style.display == '' || $('#brut_win')[0].style.display == 'none') {
        if($('#term_win')[0].style.display != 'none'){
            $('#term_win').hide(1000);
        }
        $('#brut_win').show(1000);
    }
    else{
        $('#brut_win').hide(1000);
    }
});
$('#term').click(() => {
    if (!$('#term_win')[0].style.display == '' || $('#term_win')[0].style.display == 'none') {
        if($('#brut_win')[0].style.display != 'none'){
            $('#brut_win').hide(1000);
        }
        $('#term_win').show(1000);
    }
    else{
        $('#term_win').hide(1000);
    }
});
