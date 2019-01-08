var haslo = "Co masz zrobić jutro zrób dzisiaj";
haslo = haslo.toUpperCase();

var dlugosc = haslo.length;
var ile_skuch = 0;

var haslo1 = "";

for (i = 0;i < dlugosc; i++){
	if (haslo.charAt(i) == " ")haslo1 = haslo1 + " ";
	else haslo1 = haslo1 + "-";
}

var yes = new Audio("yes.wav");
var no = new Audio("no.wav");



function wypisz_haslo()
{

	document.getElementById("plansza").innerHTML = haslo1;
}

window.onload = start;

var litery = "aąbcćdeęfghijklłmnńoópqrsśtuvwxyzźż"
litery = litery.toUpperCase();

function start()
{
	var tresc_diva = "";


	for(i=0;i<35;i++){
		var litera = litery.charAt(i)
		tresc_diva = tresc_diva + '<div onclick="sprawdz('+i+')" class="litera" id="lit'+i+'">'+litera+'</div>';
		if ((i+1) % 7 == 0) tresc_diva = tresc_diva + '<div style="clear:both;"></div>';

		window.console.log(pojemnik);

	}

	document.getElementById("alfabet").innerHTML =  tresc_diva;

	wypisz_haslo();
}

String.prototype.ustawZnak = function(miejsce, znak){
	if (miejsce > this.length-1)return this.toString();
	else return this.substr(0, miejsce) + znak + this.substr(miejsce + 1);
}


function sprawdz(nr){

	var trafiona = false;

	for (i=0; i<dlugosc; i++){
		if (haslo.charAt(i) == litery.charAt(nr) ){
			haslo1 = haslo1.ustawZnak(i, litery.charAt(nr))
			trafiona = true;
		}
	}
	if (trafiona == true){
		yes.play();
		var element = "lit" + nr;
		document.getElementById(element).style.background = "#003300";
		document.getElementById(element).style.color = "#00c000";
		document.getElementById(element).style.border = "3px solid #00c000";
		document.getElementById(element).style.cursor = "default";
		wypisz_haslo();
	}
	else{
		no.play();
		var element = "lit" + nr;
		document.getElementById(element).style.background = "#330000";
		document.getElementById(element).style.color = "#C00000";
		document.getElementById(element).style.border = "3px solid #C00000";
		document.getElementById(element).style.cursor = "default";
		document.getElementById(element).setAttribute("onclick",";");

		//skucha
		ile_skuch++;
		var obraz = "img/s" + ile_skuch + ".jpg";
		document.getElementById("szubienica").innerHTML = '<img src="'+obraz+'"alt=""/>';
	}

	//wygrana
	if (haslo == haslo1){
		document.getElementById("alfabet").innerHTML = "Tak jest! Podano prawidłowe hasło: " + haslo + '<br/><br/><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
	}

	//przegrana
	if (ile_skuch >= 9){
		document.getElementById("alfabet").innerHTML = "Przegrana :( Prawidłowe hasło to: " + haslo + '<br/><br/><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
	}


	wypisz_haslo();
}
