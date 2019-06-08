$(function(){
    iniciar();
})

function replace_text(div){
    var curInnerHTML = div.innerHTML;
    curInnerHTML = highlight(curInnerHTML)
    div.innerHTML = curInnerHTML;
}
function highlight(words) {
    words = words.replace(/(^|\s)(@[^\w\d\s]*\w+)/gi, "$1<span class='mention'>$2</span>");
    words = words.replace(/(^|\s)(#[a-zA-Z0-9ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ_-]*)/gi, "$1<span class='hashtag'>$2</span>");
    words = words.replace(/(^|\s)(https?:\/\/[^\s,;!$%@*]+)/gi, "$1<span class='url'>$2</span>");

    return words;
}

function dayWeek(day){
    var semana = ["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"];
    return semana[day];
}
function updateClock ( )
{
    var currentTime = new Date ( );
    var currentHours = currentTime.getHours ( );
    var currentMinutes = currentTime.getMinutes ( );

    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;

    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

    // Convert the hours component to 12-hour format if needed
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

    // Convert an hours component of "0" to "12"
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;

    // Compose the string for display
    var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
    var currentTimeString = dayWeek(currentTime.getDay()) + " " + currentTime.getUTCDate()+"/"+(currentTime.getUTCMonth()+1)+"/" + currentTime.getUTCFullYear()+" " + currentHours + ":" + currentMinutes + " " + timeOfDay;


    $(".time").html( currentTimeString);

}


function iniciarAnimation(div){
    div.show();
    //notice
    div.animate({opacity:1.0},{duration:1000});
    div.find('.time').each(function(){
        $(this).delay(1000).animate({opacity:0.6},{duration:2000});
    });
    div.find('.logo').each(function(){
        $(this).delay(1000).animate({opacity:1.0},{duration:2000});
    });
    div.find('.text-notice').each(function(){
        $(this).delay(1000).animate({left:0},{duration:3000});
    });


    //twitter

    div.find('.user').each(function(){
        $(this).delay(500).animate({opacity:1.0},{duration:2000});
    });


    div.find('.user_author').each(function(){
        $(this).delay(1000).animate({opacity:1.0},{duration:1500});
    });

    div.find('.user-info').each(function(){
        $(this).delay(500).animate({opacity:1.0},{duration:1500});
    });

    div.find('.text').each(function(){
        replace_text(this);
        $(this).delay(1000).animate({opacity:1.0},{duration:2000});
    });

    div.delay(17400).animate({opacity:0},{duration:1000});
}

function iniciar(){

    updateClock();
    var i = 0;
    $('body').find('.ifrntv').each(function(){
        var div = this;
        setTimeout(function(){
            iniciarAnimation($(div));
        },20000*i);
        setTimeout(updateClock,19500);
        i++;
    });
    setTimeout(function () {
        location.reload(true);
    },20000*i);

}
;
