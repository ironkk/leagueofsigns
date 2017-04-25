$(document).ready(inicio);
function inicio() {
    open();
}

function open(){ 
    $('#first').hover(
            function(){$('#text1').css('display', 'block')},
            function(){$('#text1').css('display', 'block')}, 
            function(){$('#text1').css('-webkit-transition', 'width 2s')}
);
}