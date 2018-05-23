$('.vat_select > label > input[type="radio"]').on('change', function(){
	$('.vat_select > label > input[type="radio"]').parent().removeClass('btn-success');
	$(this).parent().addClass('btn-success');
    $('#custom_vat').val('');
	vat = $(this).val();
});

var konwersja;
var kwota;

var vat = $('.vat_select > label > input[type="radio"]:checked').val();

var brutto;
var netto;

$('#custom_vat').on('focus', function(){
	$('.vat_select > label > input[type="radio"]').parent().removeClass('btn-success');
	$('.vat_select > label > input[type="radio"]').prop('checked', false);
    vat = undefined;
});

$('#custom_vat').on('keyup', function(){
    vat=$(this).val();
});

//Licznik vat

$('#brutto_netto, #netto_brutto').on('click', function(e){
    //prevent defauld behavior
    e.preventDefault();

    //set konwersja var and give it a value of clicked button. Also give that button success class, and remove that class from other btn
    if($(this).hasClass('btn-success')){

    }else {
        if ($(this).siblings().hasClass('btn-success')) {
            $(this).siblings().removeClass('btn-success');
        }
        $(this).addClass('btn-success');
        konwersja = $(this).attr('id');

    }

});

function count_vat(){
    kwota  = $('#kwota').val();

    if(konwersja == undefined){
        alert('Proszę podać typ konwersji');
        return;
    }else if(konwersja == 'netto_brutto'){
        if(kwota == undefined || kwota == ""){
            alert('Proszę podaj kwotę netto');
            return;
        }
        brutto = parseFloat(kwota)+(parseFloat(kwota)*(parseFloat(vat)/100));
        $('#vat_result').html(brutto.toFixed(2)+" zł");
    }else{

        if(kwota == undefined || kwota == ""){
            alert('Proszę podaj kwotę brutto');
            return;
        }
        netto = parseFloat(kwota)/(1+(parseFloat(vat)/100));
        $('#vat_result').html(netto.toFixed(2)+" zł");
    }
}

$('#oblicz').on('click', function(e){
    e.preventDefault();
    count_vat();
});

// Jakim procentem jednej liczby jest druga liczba

var liczba_a_01;
var liczba_b_01;

function count_percent_01(){
    liczba_a_01 = $('#liczba_a_01').val();
    liczba_b_01 = $('#liczba_b_01').val();

    if(liczba_b_01 == undefined || liczba_b_01 == "" || liczba_a_01 == undefined || liczba_a_01 == ""){
        alert('Wprowadź obie liczby');
        return;
    }

    var wynik = (parseFloat(liczba_b_01)/parseFloat(liczba_a_01))*100;

    $('#procent_wynik_01').html(wynik.toFixed(2)+"%");
}

$('#oblicz_procent_01').on('click', function(e){
    e.preventDefault();
    count_percent_01();
});

//Procent z liczby

var procent_02;
var liczba_02;

function count_percent_02(){
    procent_02 = $('#liczba_a_02').val();
    liczba_02 = $('#liczba_b_02').val();
    if(procent_02 == undefined || procent_02 == "" || liczba_02 == undefined || procent_02 == ""){
        alert('Proszę podać procent i liczbę');
        return;
    }else {
        var output = parseFloat(liczba_02) * (parseFloat(procent_02) / 100);
        $('#wynik_procent_02').html(output.toFixed(2));
    }
}


$('#oblicz_procent_02').on('click', function(e){
    e.preventDefault();
    count_percent_02();
});


//O ile wzrosła lub zmalała liczba

var liczba_a_03;
var liczba_b_03;

function count_percent_03(){
    liczba_a_03 = $('#liczba_a_03').val();
    liczba_b_03 = $('#liczba_b_03').val();

    if(liczba_a_03 == undefined || liczba_a_03 == "" || liczba_b_03 == undefined || liczba_b_03 == ""){
        alert ('Proszę, podaj obie liczby');
        return;
    }else{
        var output = (parseFloat(liczba_a_03) - parseFloat(liczba_b_03)) / parseFloat(liczba_b_03)*100;
        $('#wynik_procent_03').html(Math.abs(output.toFixed(2)));
    }
}

$('#oblicz_procent_03').on('click', function(e){
    e.preventDefault();
    count_percent_03();
});


// Kalkulator walut

var $waluta_select = $('.waluta_select');
var $waluta_01 = $('#waluta_01');
var $waluta_02 = $('#waluta_02');
var $waluta_liczba = $('#waluta_liczba');

$waluta_select.append('<option value="1">Polski Złoty</option>');

//Wartości walut NBP
$.ajax({
    type: 'GET',
    url: 'http://api.nbp.pl/api/exchangerates/tables/a/',
    success: function(data){
        $.each(data[0].rates, function(i, item){
            $waluta_select.append('<option value="'+item.mid+'" data-currency-code="'+item.code+'">'+item.currency+'</option>');
        });
    },
});

function convert_currency(){
    if($waluta_01.val() == undefined || $waluta_02.val() == undefined || $waluta_liczba.val() == undefined || $waluta_liczba.val() == ""){
        alert('Proszę wybrać waluty');
        return;
    }

    var kurs = parseFloat($waluta_01.val())/parseFloat($waluta_02.val());
    var output = (parseFloat($waluta_liczba.val())*kurs).toFixed(2);
    var code = $('#waluta_02 > option:selected').attr('data-currency-code');


    $('#waluta_wynik').html(output+" "+code);
}

$('#waluta_oblicz').on('click', function(e){
    e.preventDefault();
    convert_currency();
});

// smooth scrool

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

//scrool to top hide / show

var $goUp = $('.goUp');

$(window).on('scroll', function(){
    if($(window).scrollTop() > 500){
        if($goUp.hasClass('displayNone')){
            $goUp.removeClass('displayNone');
        }
    }else{
        if(!$goUp.hasClass('displayNone')){
            $goUp.addClass('displayNone')
        }
    }
});