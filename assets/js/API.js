var ip_esp = "http://stmiot.local:8080/"
var esp_online = false; // Variabel untuk melacak status ESP32
document.addEventListener("DOMContentLoaded", function(){
    getPintuStatus();
});
$(document).ready(function(){
    setInterval(isOnline, 500);
    setInterval(checkAndRunSensors, 500); // Menjalankan sensor hanya jika ESP32 online
});

var state;
function isOnline(){
    $.ajax({
        url: ip_esp,
        type: "GET",
        success: function(response){
            state = response;
        },
        error: function(){
            state = "offline";
        }
    })
    if(state=="online"){
        $("#ESP32_Status").text("Online").toggleClass('text-success');
        esp_online = true;
    }else{
        $("#ESP32_Status").text("Offline").toggleClass('text-danger');
        esp_online = false;
    }
}

function checkAndRunSensors(){
    if(esp_online){
        // suhu();
        // jarak();
        // hujan();
        // gas();
        // asap();
    }
}

function suhu(){
$.ajax({
    url: ip_esp+"kelembapan",
    type: "GET",
    dataType: "json",
    success: function(response){
    $("#kelembapan").text(response.humidity + "%");
    $("#temperature").text(response.temperature + "°C");
    },
    error: function(e){
    console.log("Error Suhu: "+e);
    }
});
}

function jarak(){
$.ajax({
    url: ip_esp+"jarak",
    type: "GET",
    dataType: "json",
    success: function(response){
    $("#jarak").text(response.distance+" | CM");
    $("#garasi").text(response.servo);
    console.log(response);
    },
    error: function(e){
    console.log("Error Jarak :"+e); 
    }
});
}

function hujan(){
$.ajax({
    url: ip_esp+"hujan",
    type: "GET",
    success: function(response){
    $("#hujan").text(response);
    },
    error: function(){
    console.log("Error Hujan");
    }
});
}

function gas(){
$.ajax({
    url: ip_esp+"gas",
    type: "GET",
    success: function(response){
    $("#gas").text(response);
    },
    error: function(){
    console.log("Error Gas");
    }
});
}

function asap(){
    $.ajax({
        url: ip_esp+"asap",
        type: "GET",
        success: function(response){
        $("#asap").text(response);
        },
        error: function(){
        console.log("Error Asap");
        }
    });
    }

function togglePintu(){
    $.ajax({
        url: ip_esp+"servoPintu",
        type: "GET",
        success: function(response){
            $("#pintu").text(response);
        }
    });
}
function getPintuStatus(){
    $.ajax({
        url: ip_esp + "servoPintuStatus",
        type: "GET",
        dataType: "json",
        success: function(response) {
            var status = response.servoPintuState;
            $("#pintu").text(status);
            $("#pintuToggle").prop("checked", (status === "Pintu Terbuka"));
            console.log("Status : ",status);
        }
    });
}