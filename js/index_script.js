window.onload = onLoad;

function onLoad() {
    let submitButton = document.getElementById("submit");
    console.log(submitButton);
    if (submitButton !== null) submitButton.addEventListener("click", submitLocation);
}

function submitLocation() {

    let city = document.getElementById("weather-form-city").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "/private/submit.php?city=".city, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = document.createElement("span");
            response.innerHTML = this.responseText;
            document.querySelector(".content").appendChild(response);
            console.log(response);
        }
    }
    xmlhttp.send();
}