<style>
#ats,#ats2 {
	width:65px;
	font-size: 50px;
	background-color:lightgrey;
}
#b1 {
	font-size: 50px;
	background-color:lightgrey;
	border-radius: 20px 20px 20px 20px;
}
#b2 {
	position:absolute;
    top: 20px;
	right:30px;
}
#l1{
	font-size: 50px;
	background-color:lightgrey;
}
#b1:hover, #l1:hover, #l2:hover, #l3:hover, #l4:hover {
	font-size: 51px;
	background-color:white;
}
table {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 90vh;	
  }
  td {
    text-align:center;
    font-size: 80px;
    padding: 3px;
  }
#kaire{
	position:absolute;
    top: 20px;
	left:30px;
	font-size: 30px;

}
#img1{
	
	width:65px;
	hight:60px;
}
  
</style>
<body style="background-image:url(uz.png);") >
<table>
<tr>
<td><div id="t1">0</div>
<td>+</td>
<td><div id="t2">0</div>
<td>=</td>
<td><button id="b1" onclick="aa1(event)" value="1">1</button></td>
<td><button id="b1" onclick="aa1(event)" value="2">2</button></td>
<td><button id="b1" onclick="aa1(event)" value="3">3</button></td>
<td><button id="b1" onclick="aa1(event)" value="4">4</button></td>
<td><button id="b1" onclick="aa1(event)" value="5">5</button></td>
<td><button id="b1" onclick="aa1(event)" value="6">6</button></td>
<td><button id="b1" onclick="aa1(event)" value="7">7</button></td>
<td><button id="b1" onclick="aa1(event)" value="8">8</button></td>
<td><button id="b1" onclick="aa1(event)" value="9">9</button></td>
<td><button id="b1" onclick="aa1(event)" value="10">10</button></td>
<td><button id="b1" onclick="aa1(event)" value="11">11</button></td>
<td><button id="b1" onclick="aa1(event)" value="12">12</button></td>
<td><button id="b1" onclick="aa1(event)" value="13">13</button></td>
<td><button id="b1" onclick="aa1(event)" value="14">14</button></td>
<td><button id="b1" onclick="aa1(event)" value="15">15</button></td>
<td><button id="b1" onclick="aa1(event)" value="16">16</button></td>
</tr>
<tr>
<td><div id="t3">0</div>
<td>-</td>
<td><div id="t4">0</div>
<td>=</td>
<td><button id="b1" onclick="ab1(event)" value="0">0</button></td>
<td><button id="b1" onclick="ab1(event)" value="1">1</button></td>
<td><button id="b1" onclick="ab1(event)" value="2">2</button></td>
<td><button id="b1" onclick="ab1(event)" value="3">3</button></td>
<td><button id="b1" onclick="ab1(event)" value="4">4</button></td>
<td><button id="b1" onclick="ab1(event)" value="5">5</button></td>
<td><button id="b1" onclick="ab1(event)" value="6">6</button></td>
<td><button id="b1" onclick="ab1(event)" value="7">7</button></td>
<td><button id="b1" onclick="ab1(event)" value="8">8</button></td>
<td><button id="b1" onclick="ab1(event)" value="9">9</button></td>
<td><button id="b1" onclick="ab1(event)" value="10">10</button></td>
<td><button id="b1" onclick="ab1(event)" value="11">11</button></td>
<td><button id="b1" onclick="ab1(event)" value="12">12</button></td>
<td><button id="b1" onclick="ab1(event)" value="13">13</button></td>
<td><button id="b1" onclick="ab1(event)" value="14">14</button></td>
<td><button id="b1" onclick="ab1(event)" value="15">15</button></td>
<td><button id="b1" onclick="ab1(event)" value="16">16</button></td>
</tr>
</table>
<div id="b2">
<button id="l1" onclick="lg(event)" value="1">1 lygis</button>
<button id="l1" onclick="lg(event)" value="2">2 lygis</button>
<button id="l1" onclick="lg(event)" value="3">3 lygis</button>
<button id="l1" onclick="lg(event)" value="4">4 lygis</button>
</div>
<div id="kaire">
 <div id="taip">0</div><img id="img1" src="teisingi.png">
 <div id="ne">0</div><img id="img1" src="neteisingai.png">
</div>
</body>
<script>
const myAudio8 = new Audio("zemyn.wav");  
const myAudio9 = new Audio("up.wav"); 
var sk1=0;
var sk2=0;
var lygis=1;
var teisingi=0;
var neteisingi=0;
var atssudetis=0;
var atsatimtis=0;
var kuris=0;
var kuris2=0;

function lg(event){
	lygis= event.target.value;
	skaiciai();
}
function generuoti(){
	 sk1 = Math.floor(Math.random() * (lygis*2)) + 1; 
	 sk2 = Math.floor(Math.random() * (lygis*2)) + 1; 
	while (sk1+sk2>(lygis*4)){
		sk1 = Math.floor(Math.random() * (lygis*2)) + 1; 
		sk2 = Math.floor(Math.random() * (lygis*2)) + 1; 	
	} 
}
function skaiciai(){
	 generuoti(); 
		document.getElementById("t1").innerHTML = sk1;
		document.getElementById("t2").innerHTML = sk2;
		atssudetis= sk1+sk2;
	generuoti();
	while (sk1-sk2<0){
		generuoti();
	}
		document.getElementById("t3").innerHTML = sk1;
		document.getElementById("t4").innerHTML = sk2;
		atsatimtis= sk1-sk2;
}
function teigiama(){
	myAudio9.play();
	teisingi+=lygis*1;
	document.getElementById("taip").innerHTML = teisingi;
	skaiciai();
}
function aa1(event){
	kuris = event.target.value;
	aa2();
}
function ab1(event){
	kuris2 = event.target.value;
	aa2();
}
function aa2(){
	if (atssudetis == kuris || atsatimtis == kuris2){
		teigiama();
	} else {
		myAudio8.play();
		neteisingi+=lygis*1;
		document.getElementById("ne").innerHTML = neteisingi;
		skaiciai();
	}
}
</script>
