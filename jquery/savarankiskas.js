$(document).ready(function(){
    $('ul>li') . eq(0).css ('color', 'red');
    $('ul>li') . eq(1).text('antras elementas');
    $('ul>li') . eq(2).html($('ul>li').eq(2).text() + '<span style="font-weight:bold">antras elementas</span>');
});