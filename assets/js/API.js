var ip_esp = "http://stmiot.local:8080/"
var esp_online = false; // Variabel untuk melacak status ESP32

document.addEventListener("DOMContentLoaded", function(){
    getLEDStatus();
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
        suhu();
        jarak();
        hujan();
        gas();
        asap();
    }
}

// ====================================================================
// S    E   N   S   O   R   -   F   U   N   C   T   I   O   N
// ====================================================================
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

// ====================================================================
// L    E   D   -   F   U   N   C   T   I   O   N
// ====================================================================

function toggleLED(toggleId) {
    $.ajax({
        url: ip_esp+"toggle-led?led="+toggleId,
        type: "GET",
        success: function(response){
            if (toggleId=="teras") {
                $("#LEDTeras").text(response);
            }else if (toggleId=="tengah") {
                $("#LEDTengah").text(response);
            }else if (toggleId=="kamar1") {
                $("#LEDKamar1").text(response);
            }else if (toggleId=="kamar2") {
                $("#LEDKamar2").text(response);
            }else if (toggleId=="dapur") {
                $("#LEDDapur").text(response);
            }else{
                $("#LEDGarasi").text(response);
            }
        },
        error: function(e){
            console.error(e);
        }
    });
}
function getLEDStatus() {
    $.ajax({
        url: ip_esp + "get-led-status",
        type: "GET",
        dataType: "json",
        success: function(response) {
            // Update Teras LED Status
            var statusTeras = response.stateTeras;
            $("#LEDTeras").text(statusTeras);
            $("#LEDSwitchTeras").prop("checked", (statusTeras === "ON"));
            console.log("Status LED Teras: ",statusTeras);

            // Update Tengah LED Status
            var statusTengah = response.stateTengah;
            $("#LEDTengah").text(statusTengah);
            $("#LEDSwitchTengah").prop("checked", (statusTengah === "ON"));
            console.log("Status LED Tengah: ",statusTengah);

            // Update Kamar LED Status
            var statusKamar1 = response.stateKamar1;
            $("#LEDKamar1").text(statusKamar1);
            $("#LEDSwitchKamar1").prop("checked", (statusKamar1 === "ON"));
            console.log("Status LED Kamar 1: ",statusKamar1);

            var statusKamar2 = response.stateKamar2;
            $("#LEDKamar2").text(statusKamar2);
            $("#LEDSwitchKamar2").prop("checked", (statusKamar2 === "ON"));
            console.log("Status LED Kamar 2: ",statusKamar2);

            // Update Dapur LED Status
            var statusDapur = response.stateDapur;
            $("#LEDDapur").text(statusDapur);
            $("#LEDSwitchDapur").prop("checked", (statusDapur === "ON"));
            console.log("Status LED Dapur: ",statusDapur);

            // Update Garasi LED Status
            var statusGarasi = response.stateGarasi;
            $("#LEDGarasi").text(statusGarasi);
            $("#LEDSwitchGarasi").prop("checked", (statusGarasi === "ON"));
            console.log("Status LED Garasi: ",statusGarasi);
        }
    });
}

// ====================================================================
// S    E   R   V   O   -   F   U   N   C   T   I   O   N
// ====================================================================
function togglePintu(){
    console.log(1)
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

function toggleJendela(){
    console.log(1)
    $.ajax({
        url: ip_esp+"servoJendela",
        type: "GET",
        success: function(response){
            $("#jendela").text(response);
        }
    });
}
function getPintuStatus(){
    $.ajax({
        url: ip_esp + "servoJendelaStatus",
        type: "GET",
        dataType: "json",
        success: function(response) {
            var status = response.servoJendelaState;
            $("#jendela").text(status);
            $("#jendelaToggle").prop("checked", (status === "Jendela Terbuka"));
            console.log("Status : ",status);
        }
    });
}