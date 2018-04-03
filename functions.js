function newuser(){
    var gebruiker = {};
    gebruiker.naam = $("#username").val();
    gebruiker.email = $("#email").val();
    gebruiker.wachtwoord = $("#pwd").val();
    gebruiker.rechten = $("#rechten").val();

    var xml = new XMLHttpRequest();
     
    xml.onreadystatechange = function (){
        if(xml.readyState === 4 && xml.status === 200){     
            console.log(this.responseText);
        }
    };
    var userdata = JSON.stringify(gebruiker);
    xml.open("POST", "newuser.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send("gebruiker="+userdata);
    alert("Nieuwe gebruiker aangemaakt");
    document.location="index.php";
}



function newrekening(){
    var rekening = {};
    rekening.rekeningNummer = $("#rekeningnr").val();
    rekening.saldo = $("#saldo").val();
    rekening.pincode = $("#pincode").val();
    //alert("Nieuwe user aangemaakt");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function (){
        if(xml.readyState === 4 && xml.status === 200){
            console.log(this.responseText);
        }
    };
    var rekeningdata = JSON.stringify(rekening);
    xml.open("POST", "newrekening.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send("rekening="+rekeningdata);
    alert("Nieuwe rekening aangemaakt");
    document.location="index.php";
}


function newtransactie(){
        var transactie = {};
    transactie.bedrag = $("#bedrag").val();
    transactie.rekeningOntvanger = $("#ontvanger").val();
    transactie.rekeningVerzender = $("#verzender").val();
    transactie.opmerking = $("#opmerking").val();
    transactie.pincode = $("#pincode").val();
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function (){
        if(xml.readyState === 4 && xml.status === 200){
            console.log(this.responseText);
        }
    };
    
    var transactiedata = JSON.stringify(transactie);
    xml.open("POST", "newtransactie.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send("transactie="+transactiedata);
    alert("Nieuwe transactie aangemaakt");
    document.location="index.php";
}

function hide(){
    $(".SignUpDiv").attr("hidden",true);  
}