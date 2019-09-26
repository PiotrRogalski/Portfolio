/*
Based on Mirosław Zelent code.
Modified by author at 2019-09-26
Author Piotr Rogalski <piotr5rogalski@gmail.com>
 */

const PROVERBS = [
	'apetyt rośnie w miarę jedzenia',
	'baba z wozu koniom lżej',
	'baju baju będziesz w raju',
	'będzie z niego ksiądz jak z diabła kościelny',
	'bęben dlatego tak głośny bo próżny',
	'bez pracy nie ma kołaczy',
	'biednemu zawsze wiatr w oczy',
	'broda mędrcem nie czyni',
	'cel uświęca środki',
	'chlebem i solą ludzie ludzi niewolą',
	'ciągnie swój do swego',
	'cicha woda brzegi rwie',
	'ciekawość to pierwszy stopień do piekła',
	'co kraj to obyczaj',
	'co nagle to po diable',
	'co za dużo to niezdrowo',
	'człowiek strzela Pan Bóg kule nosi',
	'czym skorupka za młodu nasiąknie tym na starość trąci',
	'darowanemu koniowi w zęby się nie zagląda',
	'diabeł nie śpi',
	'diabeł tkwi w szczegółach',
	'dla chcącego nic trudnego',
	'do trzech razy sztuka',
	'dopóty dzban wodę nosi dopóki mu się ucho nie urwie',
	'dzieci i ryby głosu nie mają',
	'elektryka prąd nie tyka',
	'fortuna kołem się toczy'
];

resetProverbs();
function getProverb()
{
	if(proverbs.length < 1)
	{
		resetProverbs();
		numWins = 0;
	}

	let key = Math.floor(Math.random() * proverbs.length);
	let proverb = proverbs[key];
	proverbs.splice(key, 1);

	return proverb.toUpperCase();
}


function hidePassword(password)
{
	let hidden = '';
	for (i = 0; i < password.length; ++i)
	{
		let letter = ' ';
		if (password.charAt(i) !== ' ')
		{
			letter = "_";
		}
		hidden = hidden + letter;
	}
	return hidden
}

const FAIL_LIMIT = 9;
var numWins = 0;
var haslo = getProverb();
var numFails = 0;
var hiddenPassword = hidePassword(haslo);
var yes = new Audio("yes.wav");
var no = new Audio("no.wav");
var letters = 'aąbcćdeęfghijklłmnńoópqrsśtuvwxyzźż'.toUpperCase();
var messages = {
	'win': 'Tak jest! Podano prawidłowe hasło: ',
	'lose': 'Przegrana :( Prawidłowe hasło to: ',
	'try_again': '<br/><br/><span class="reset" onclick="restart()">JESZCZE RAZ?</span>',
};

window.onload = start;
function start()
{
	setStatus(numWins);
	var html = '';
	for(i = 0; i < letters.length; ++i){
		var letter = letters.charAt(i);
		html += '<div onclick="check('+i+')" class="letter" id="lit'+i+'">'
					+ letter +
				'</div>';
		if(isDivide(i + 1, 7))
		{
			html += '<div style="clear:both;"></div>';
		}
	}
	document.getElementById('alphabetID').innerHTML =  html;
	setPassword();
}


String.prototype.setChar = function(place, sign){
	if (place > this.length - 1)
	{
		return this.toString();
	}
	else
	{
		return this.substr(0, place) + sign + this.substr(place + 1);
	}
};


function check(number){
	var hit = false;
	for (i = 0; i < haslo.length; ++i){
		if (haslo.charAt(i) === letters.charAt(number))
		{
			hiddenPassword = hiddenPassword.setChar(i, letters.charAt(number));
			hit = true;
		}
	}

	if (hit === true)
	{
		checkSuccess(number);
	}
	else
	{
		checkFail(number);
	}

	let alfabetElem = document.getElementById('alphabetID');
	if (haslo === hiddenPassword)
	{
		alfabetElem.innerHTML = messages['win'] + haslo + messages['try_again'];
		setStatus(++numWins);
	}
	if (numFails >= FAIL_LIMIT)
	{
		alfabetElem.innerHTML = messages['lose'] + haslo + messages['try_again'];
	}
	setPassword();
}


function setPassword()
{
	document.getElementById('boardID').innerHTML = hiddenPassword;
}


function isDivide(number, divider)
{
	return number % divider === 0;
}


function setStatus(wins)
{
	let allProverbs = PROVERBS.length;
	document.getElementById('statusID').innerHTML = wins + '/' + allProverbs;
}


function restart()
{
	resetVariables();
	start();
}


function resetVariables()
{
	haslo = getProverb();
	numFails = 0;
	hiddenPassword = hidePassword(haslo);
}


function checkFail(number)
{
	var letterElem = document.getElementById('lit' + number);
	no.play();
	letterElem.style.background = '#330000';
	letterElem.style.color = '#C00000';
	letterElem.style.border = '3px solid #C00000';
	letterElem.style.cursor = 'default';
	letterElem.setAttribute('onclick',';');
	numFails++;
	var picture = 'img/s' + numFails + '.jpg';
	document.getElementById('gallowsID').innerHTML = '<img src="' + picture + '" alt=""/>';
}


function checkSuccess(number)
{
	var letterElem = document.getElementById('lit' + number);
	yes.play();
	letterElem.style.background = '#003300';
	letterElem.style.color = '#00c000';
	letterElem.style.border = '3px solid #00c000';
	letterElem.style.cursor = 'default';
	setPassword();
}


function resetProverbs()
{
	proverbs = [...PROVERBS];
}