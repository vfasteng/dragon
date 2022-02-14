const url = "https://mirok.ga/dragon/weather.php";


function json(response) {
    return response.json();
}

function getWeather() {
    fetch(url, {
        method: 'get',
        credentials: 'include',
        headers: {
			"Access-Control-Allow-Origin": "*"
        }
    })
        .then(json)
        .then(function (data) {
            console.log('Request succeeded with JSON response', data);
						var el = document.getElementById("weatherText");
			el.setAttribute('text-geometry', {
value: "Yandex weather in Borisoglebsk\n"+data.forecast.parts[0].part_name+": t:"+data.forecast.parts[0].temp_min+ " - "+data.forecast.parts[0].temp_max+"°C",
						font: "#exoFont"
					});

//            document.getElementById("dataDiv").innerHTML = JSON.stringify(data);
        })
        .catch(function (error) {
            console.log('Request failed', error);
        });
}


function init(){

    var dataDiv = document.getElementById("dataDiv");

   // dataDiv.innerHTML = "Data Place";
	
getWeather();
}
window.onload = init;
