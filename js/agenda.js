$(document).ready(function(){
    const buttons = [ $('#btn-sun'), $('#btn-mon'), $('#btn-tues'), $('#btn-wed'), $('#btn-thu'), $('#btn-fri'), $('#btn-sat')];
    const divs = [$('#info-sun'), $('#info-mon'), $('#info-tues'), $('#info-wed'), $('#info-thu'), $('#info-fri'), $('#info-sat')];

    divs.forEach(Esconde);
    function Esconde (item, index, array){
        array[index].addClass('hide');
    };

    buttons[0].click(function(){
        mostraItem(divs[0], divs[1], divs[2], divs[3], divs[4], divs[5], divs[6]);
    });
    buttons[1].click(function(){
        mostraItem(divs[1], divs[0], divs[2], divs[3], divs[4], divs[5], divs[6]);
    });
    buttons[2].click(function(){
        mostraItem(divs[2], divs[1], divs[0], divs[3], divs[4], divs[5], divs[6]);
    });
    buttons[3].click(function(){
        mostraItem(divs[3], divs[1], divs[0], divs[2], divs[4], divs[5], divs[6]);
    });
    buttons[4].click(function(){
        mostraItem(divs[4], divs[1], divs[0], divs[2], divs[3], divs[5], divs[6]);
    });
    buttons[5].click(function(){
        mostraItem(divs[5], divs[1], divs[0], divs[2], divs[3], divs[4], divs[6]);
    });
    buttons[6].click(function(){
        mostraItem(divs[6], divs[1], divs[0], divs[2], divs[3], divs[4], divs[5]);
    });

    function mostraItem (divone, divtwo, divthree, divfour, divfive, divsix, divseven){
        divone.removeClass('hide');
        divtwo.addClass('hide');
        divthree.addClass('hide');
        divfour.addClass('hide');
        divfive.addClass('hide');
        divsix.addClass('hide');
        divseven.addClass('hide');
    };
})