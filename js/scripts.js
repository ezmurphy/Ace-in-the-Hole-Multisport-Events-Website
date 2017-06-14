$(document).ready(function () {
    
//Simple Weather Plugin
// Docs at http://simpleweatherjs.com
    
    $.simpleWeather({
        woeid: '2475687',
        location: 'Portland, OR',
        unit: 'f',
        success: function (weather) {
            if (weather.temp > 75) {
            $('#weather_plugin').animate({backgroundColor: '#F7AC57'}, 1500);
            }
                else {
                    $('#weather_plugin').animate({backgroundColor: '#0091c2'}, 1500);
                }
            html = '<h1 class="icon-'+weather.code+'"></h1>';
            html += '<h2>'+weather.temp+'&deg;</h2>';
            html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
            html += '<li class="currently">'+weather.currently+'</li></ul>';
          //html += '<li>'+weather.tempAlt+'&deg;C</li></ul>';

            var timestamp = moment();
          //html += '<p class="updated">Updated '+moment(timestamp).fromNow()+'</p>';

            $("#weather").html(html);
        },
        
        error: function (error) {
            $("#weather").html('<p>'+error+'</p>');
        }
    });
    
});