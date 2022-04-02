function validateForm() {
    let x = document.forms["form"]["name"].value;
    if (x == "") {
        alert("il campo nome deve essere compilato");
        return false;
    }
}

function confermaDelete() {
    let text = "Press a button!\nEither OK or Cancel.";
    if (confirm(text) == true) {
      text = "You pressed OK!";
    } else {
      text = "You canceled!";
    }
    document.getElementById("demo").innerHTML = text;
  }


    