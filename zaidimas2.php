<style>
  table {
    border: 2px solid #000;
    border-collapse: collapse;
    width: 820px;
    height: 600px;
    margin: auto;
	background-color:white;
	width: 60%; 
	margin: 0 auto;
  }
  td {
    border: 3px solid #000;
    text-align:left;
    font-size: 64px;
    padding: 3px;
	width: 820px;
    height: 130px;
  }
  img{
 	width: 40px;
    height: 40px;
  }
  #myButton, #myButton2, #myButton3, #t2, #t3, #t4 {
    position: fixed;
    left: 20px;
    transform: translateY(-50%);
	color: #black;
	border-radius: 20px 20px 20px 20px  ;
	font-size: 100%;
  }
  #myButton:hover, #myButton2:hover, #myButton3:hover{
	font-size: 20px;
	width: 120px;
	height: 70px;
	border-radius: 30px 30px 30px 30px  ;
  }
  #myButton {
    top: 50%;
	width: 100px;
	height: 50px;
	background-color: blue;
  }
  #myButton2 {
    top: 64%;
		width: 100px;
	height: 50px;
		background-color: green;
  }
  #myButton3 {
    top: 79%;
		width: 100px;
	height: 50px;
		background-color: #008080;
  }
  #t2 {
    top: 44%;
  }
  #t3 {
    top: 57%;
  }
  #t4 {
    top: 72%;
  }
  a {
    color:gold;
    text-decoration: none;
    position: fixed;
	text-align: center;
	font-size:20px;
    left: 15px;
    top: 15%;
	border:3px solid Black;
	border-radius: 20px 20px 20px 20px;
	width: 140px;
	height: 50px;
	background-image: url('uz1.jpg');
  }
  a:hover{
	font-size:30px; 
	width: 160px;
	height: 70px;
  }
  .fullscreen-text {
  display: flex; /* nustato vaizdo elementą lanksčiu */
  justify-content: center; /* centruoja vaizdo elementą horizontaliai */
  align-items: center; /* centruoja vaizdo elementą vertikaliai */
  height: 100vh; /* nustato vaizdo elemento aukštį pagal visą ekrano aukštį */
  display: none;
  text-decoration: blink;
}

h1 {
  font-size: 10vw; /* nustato teksto dydį 10 procentų nuo viso ekrano pločio */
  text-align: center; /* centruoja tekstą horizontaliai */
}
h2{
	font-size:70px;
}
#desine{
  position:absolute;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  right:10px;
  top:180px;
  height:560px;
  width:180px;
  background-image:url(desine.png);
  font-size:70px;
  border-radius: 20px 20px 20px 20px;
  border:2px solid Black;
}
#melina{
  color:blue;
  position:absolute;
  left:1px;
  background-color:lightblue;
  border-radius: 20px 20px 20px 20px;
   border:2px solid Black;
}
#zalia{
  color:green;
  position:absolute;
  left:75px;
  background-color:lightgreen;
  border-radius: 20px 20px 20px 20px;
   border:2px solid Black;
}
#raudona{
  color:#00FFFF;
  position:absolute;
  right:1px;
  background-color:#008080;
  border-radius: 20px 20px 20px 20px;
   border:2px solid Black;
}
  #kaire {
	position:absolute;
    top: 230px;
	width: 260px;
	height: 100px;
	background-image:url(uz1.jpg);
	text-align: center;
	border-radius: 20px 20px 20px 20px;
	border:2px solid Black;
	color:gold;
	font-size:25px;
  }
    #z1:hover, #z2:hover, #z3:hover{
	font-size: 20px;
	width: 70px;
	height: 60px;
	border-radius: 30px 30px 30px 30px  ;
  }
     #z1, #z2, #z3{
	font-size: 20px;
	width: 60px;
	height: 50px;
	border-radius: 30px 30px 30px 30px  ;
	background-image:url(uz.png);
  }
    #numeriai {
	text-align: center;
	z-index: 0;
  }
  #grotuvas{
	position:absolute;
    top: 20px;
	right:30px;
	text-align: center;
	border-radius: 20px 20px 20px 20px;
	font-size:55px;
  }
  #m1{
	text-align: center;
	border-radius: 50px 50px 50px 50px;
	font-size:55px;
	color:black;
	background-color:#008080;
	width:50px;
  }

</style>

<body style="background-image:url(uz.png);"  >
<div id="Win" class="fullscreen-text">
  <h1><div id="Win2">
  <td>1. Žaidėjas</td>
  </div>
  </h1> 
</div>
<div id="desine"><div id="melina">M</div><div id="zalia">Ž</div><div id="raudona">T</div>
</div>
<h2><?php include_once("laikas.php"); ?></h2>
<div id="t2"><td>1. Žaidėjas</td></div>
<button id="myButton">1 Žaidėjas </button>
<div id="t3"><td>2. Žaidėjas</td></div>
<button id="myButton2">2 Žaidėjas </button>
<div id="t4"><td>3. Žaidėjas</td></div>
<button id="myButton3">3 Žaidėjas </button>
<a id= "grotivel" href="#">Pradėti nuo pradžių</a>
<div id="kaire">
Kiek žaidėjų žais max 3<br>
<button id="z1" onclick="aa1()" value="1">1</button>
<button id="z2" onclick="aa1()" value="2">2</button>
<button id="z3" onclick="aa1()" value="3">3</button>
</div>
<div id="grotuvas">
<audio id="my-audio" volume="0.01" src="https://ice2.powerhitradio.lt/PHR_AAC" controls></audio>
<button id="m1" onclick="document.getElementById('my-audio').volume += 0.05;">+</button>
<button id="m1" onclick="document.getElementById('my-audio').volume -= 0.05;">-</button>
</div>
<table>
	<tr>
    <td><div id="numeriai">48</div><img id="img48" src="img0.png"><img id="imgz48" src="img0.png"><img id="imgr48" src="img0.png"></td>
    <td><div id="numeriai">47</div><img id="img47" src="img0.png"><img id="imgz47" src="img0.png"><img id="imgr47" src="img0.png"></td>
    <td  style="background-image: url('zemy.png');">46<img id="img46" src="img0.png"><img id="imgz46" src="img0.png"><img id="imgr46" src="img0.png"></td>
    <td><div id="numeriai">45</div><img id="img45" src="img0.png"><img id="imgz45" src="img0.png"><img id="imgr45" src="img0.png"></td>
    <td><div id="numeriai">44</div><img id="img44" src="img0.png"><img id="imgz44" src="img0.png"><img id="imgr44" src="img0.png"></td>
    <td><div id="numeriai">43</div><img id="img43" src="img0.png"><img id="imgz43" src="img0.png"><img id="imgr43" src="img0.png"></td>
    <td><div id="numeriai">42</div><img id="img42" src="img0.png"><img id="imgz42" src="img0.png"><img id="imgr42" src="img0.png"></td>
    <td><div id="numeriai">41</div><img id="img41" src="img0.png"><img id="imgz41" src="img0.png"><img id="imgr41" src="img0.png"></td>
  </tr>
  <tr>
    <td><div id="numeriai">33</div><img id="img33" src="img0.png"><img id="imgz33" src="img0.png"><img id="imgr33" src="img0.png"></td>
    <td><div id="numeriai">34</div><img id="img34" src="img0.png"><img id="imgz34" src="img0.png"><img id="imgr34" src="img0.png"></td>
    <td><div id="numeriai">35</div><img id="img35" src="img0.png"><img id="imgz35" src="img0.png"><img id="imgr35" src="img0.png"></td>
    <td><div id="numeriai">36</div><img id="img36" src="img0.png"><img id="imgz36" src="img0.png"><img id="imgr36" src="img0.png"></td>
    <td><div id="numeriai">37</div><img id="img37" src="img0.png"><img id="imgz37" src="img0.png"><img id="imgr37" src="img0.png"></td>
    <td style="background-image: url('zemy.png');">38<img id="img38" src="img0.png"><img id="imgz38" src="img0.png"><img id="imgr38" src="img0.png"></td>
    <td><div id="numeriai">39</div><img id="img39" src="img0.png"><img id="imgz39" src="img0.png"><img id="imgr39" src="img0.png"></td>
    <td><div id="numeriai">40</div><img id="img40" src="img0.png"><img id="imgz40" src="img0.png"><img id="imgr40" src="img0.png"></td>
  </tr>
  <tr>
    <td style="background-image: url('zemy.png');">32<img id="img32" src="img0.png"><img id="imgz32" src="img0.png"><img id="imgr32" src="img0.png"></td>
    <td><div id="numeriai">31</div><img id="img31" src="img0.png"><img id="imgz31" src="img0.png"><img id="imgr31" src="img0.png"></td>
	<td style="background-image: url('ivirsu2.png');">30<img id="img30" src="img0.png"><img id="imgz30" src="img0.png"><img id="imgr30" src="img0.png"></td>
    <td><div id="numeriai">29</div><img id="img29" src="img0.png"><img id="imgz29" src="img0.png"><img id="imgr29" src="img0.png"></td>
    <td><div id="numeriai">28</div><img id="img28" src="img0.png"><img id="imgz28" src="img0.png"><img id="imgr28" src="img0.png"></td>
    <td><div id="numeriai">27</div><img id="img27" src="img0.png"><img id="imgz27" src="img0.png"><img id="imgr27" src="img0.png"></td>
    <td><div id="numeriai">26</div><img id="img26" src="img0.png"><img id="imgz26" src="img0.png"><img id="imgr26" src="img0.png"></td>
    <td><div id="numeriai">25</div><img id="img25" src="img0.png"><img id="imgz25" src="img0.png"><img id="imgr25" src="img0.png"></td>
  </tr>
  <tr>
    <td><div id="numeriai">17</div><img id="img17" src="img0.png"><img id="imgz17" src="img0.png"><img id="imgr17" src="img0.png"></td>
    <td style="background-image: url('l2.png'); color:gold;">18</div><img id="img18" src="img0.png"><img id="imgz18" src="img0.png"><img id="imgr18" src="img0.png"></td>
    <td><div id="numeriai">19</div><img id="img19" src="img0.png"><img id="imgz19" src="img0.png"><img id="imgr19" src="img0.png"></td>
    <td><div id="numeriai">20</div><img id="img20" src="img0.png"><img id="imgz20" src="img0.png"><img id="imgr20" src="img0.png"></td>
    <td style="background-image: url('zemy.png');">21<img id="img21" src="img0.png"><img id="imgz21" src="img0.png"><img id="imgr21" src="img0.png"></td>
    <td style="background-image: url('l1.png'); color:gold;">22<img id="img22" src="img0.png"><img id="imgz22" src="img0.png"><img id="imgr22" src="img0.png"></td>
    <td style="background-image: url('ivirsu2.png');">23<img id="img23" src="img0.png"><img id="imgz23" src="img0.png"><img id="imgr23" src="img0.png"></td>
    <td><div id="numeriai">24</div><img id="img24" src="img0.png"><img id="imgz24" src="img0.png"><img id="imgr24" src="img0.png"></td>
  </tr>
  <tr>
    <td><div id="numeriai">16</div><img id="img16" src="img0.png"><img id="imgz16" src="img0.png"><img id="imgr16" src="img0.png"></td>
    <td><div id="numeriai">15</div><img id="img15" src="img0.png"><img id="imgz15" src="img0.png"><img id="imgr15" src="img0.png"></td>
    <td><div id="numeriai">14</div><img id="img14" src="img0.png"><img id="imgz14" src="img0.png"><img id="imgr14" src="img0.png"></td>
    <td style="background-image: url('ivirsu2.png');">13<img id="img13" src="img0.png"><img id="imgz13" src="img0.png"><img id="imgr13" src="img0.png"></td>
    <td style="background-image: url('zemy.png');">12<img id="img12" src="img0.png"><img id="imgz12" src="img0.png"><img id="imgr12" src="img0.png"></td>
    <td><div id="numeriai">11</div><img id="img11" src="img0.png"><img id="imgz11" src="img0.png"><img id="imgr11" src="img0.png"></td>
    <td><div id="numeriai">10</div><img id="img10" src="img0.png"><img id="imgz10" src="img0.png"><img id="imgr10" src="img0.png"></td>
    <td><div id="numeriai">9</div><img id="img9" src="img0.png"><img id="imgz9" src="img0.png"><img id="imgr9" src="img0.png"></td>
  </tr>
  <tr>
    <td><div id="numeriai">1</div><img id="img1" src="img0.png"><img id="imgz1" src="img0.png"><img id="imgr1" src="img0.png"></td>
    <td><div id="numeriai">2</div></div><img id="img2" src="img0.png"><img id="imgz2" src="img0.png"><img id="imgr2" src="img0.png"></td>
    <td><div id="numeriai">3</div><img id="img3" src="img0.png"><img id="imgz3" src="img0.png"><img id="imgr3" src="img0.png"></td>
    <td><div id="numeriai">4</div><img id="img4" src="img0.png"><img id="imgz4" src="img0.png"><img id="imgr4" src="img0.png"></td>
    <td><div id="numeriai">5</div><img id="img5" src="img0.png"><img id="imgz5" src="img0.png"><img id="imgr5" src="img0.png"></td>
    <td><div id="numeriai">6</div><img id="img6" src="img0.png"><img id="imgz6" src="img0.png"><img id="imgr6" src="img0.png"></td>
    <td><div id="numeriai">7</div><img id="img7" src="img0.png"><img id="imgz7" src="img0.png"><img id="imgr7" src="img0.png"></td>
    <td><div id="numeriai">8</div><img id="img8" src="img0.png"><img id="imgz8" src="img0.png"><img id="imgr8" src="img0.png"></td>
  </tr>
</table>
 </body>
<script>
	document.getElementById("grotivel").addEventListener("click", function() {
        location.reload();
    });
  // Nustatome, kiek laiko laukti, kol pakeisime paveikslėlio src
  const delay = 400; // 1 sekundė
  const velgroti = document.getElementById('grotivel');
  const audio = document.getElementById("my-audio");
	velgroti.addEventListener('click', isnaujo);
  const images = [];
  const images2 = [];
  const images3 = [];
  const nr = [5,6,2,3,4,5,4,5];
  var tt=0;
  const myButton = document.getElementById("myButton");
  const myButton2 = document.getElementById("myButton2");
  const myButton3 = document.getElementById("myButton3");
  const myAudio1 = new Audio("1.m4a");
  const myAudio2 = new Audio("2n.m4a");
  const myAudio3 = new Audio("3.m4a");
  const myAudio4 = new Audio("4.m4a");
  const myAudio5 = new Audio("5.m4a");
  const myAudio6 = new Audio("6.m4a");
  const myAudio7 = new Audio("tak.m4a");
  const myAudio8 = new Audio("zemyn.wav");  
  const myAudio9 = new Audio("up.wav"); 
  const myAudio10 = new Audio("win.wav"); 
  const myAudio11 = new Audio("zvaigzde.wav");  
  const myAudio12 = new Audio("k8.m4a");  
  var kiekz=3;
  var yra1 = 0;
  var i1 = 0;
  var yra2 = 0;
  var i2 = 0;
  var yra3 = 0;
  var i3 = 0;
	myButton2.style.display = "none";
	myButton3.style.display = "none";
for (var ii = 1; ii <= 49; ii++) {
  const id = "img" + ii;
  const id2 = "imgz" + ii;
  const id3 = "imgr" + ii;
  const imag = document.getElementById(id);
  const imag2 = document.getElementById(id2);
  const imag3 = document.getElementById(id3);
  images.push(imag);
  images2.push(imag2);
  images3.push(imag3);
}
function isnaujo() {
	audio.play();
	audio.volume = 0.1;
}
  function aa1() {
	 isnaujo();
    const mygtukas = event.target; // Gauname paspausto mygtuko nuorodą
    const mygtukoID = mygtukas.id; // Gauname paspausto mygtuko ID
    const mygtukoReiksme = mygtukas.value; // Gauname paspausto mygtuko reikšmę
    if (mygtukoID === "z1") { 
	kiekz = mygtukoReiksme;
	myAudio1.play();
  }else if (mygtukoID === "z2") { 
	kiekz = mygtukoReiksme;
	myAudio2.play();
  }else if (mygtukoID === "z3") { 
    myAudio3.play();
	kiekz = mygtukoReiksme;
  }
  }

	function trumpinys1() {	
	images[i1-1].src = "img0.png"; 
	if (kiekz==1){myButton.style.display = "block";}
	else if (kiekz>=2){myButton2.style.display = "block";}
	}
	function trumpinys2() {	
	images2[i2-1].src = "img0.png"; 
	if (kiekz==2){myButton.style.display = "block";}
	else if (kiekz==3){myButton3.style.display = "block";}}
	
myButton.addEventListener("click", function() { 
myButton.disabled = true;
myButton.style.display = "none";
   var k1 = Math.floor(Math.random() * 6) + 1; 
		if (k1==1){myAudio1.play();}
   else if (k1==2){myAudio2.play();}
   else if (k1==3){myAudio3.play();}
   else if (k1==4){myAudio4.play();}
   else if (k1==5){myAudio5.play();}
   else if (k1==6){myAudio6.play();}
   document.getElementById("t2").innerHTML = "1. Žaidėjas " + k1;
  function changeImage() {  
	  if (k1+yra1>i1){  
    setTimeout(changeImage, delay / 2);
    if (images[i1].src.includes("img0.png")) {
		myAudio7.play();
      images[i1].src = "pav1.png";
	  images[i1-1].src = "img0.png";
    } else 
	i1++;
if(i1>=48){
		myAudio10.play();
document.getElementById("Win").style.display = "block";
		document.getElementById("Win2").innerHTML = "Nugalėjo Žaidėjas 1";
	}	
}else if (i1==18){
	  trumpinys1();
	  myAudio8.play();
	  i1-=k1+1;
	  images[i1].src = "pav1.png";
	  yra1=i1+1;
}else if (i1==22){
	  myAudio11.play();
	  yra1=22;
	  myButton.style.display = "block";
}else if (i1==46){
	  trumpinys1();
	  myAudio8.play();
	  i1=34;
	  images[i1].src = "pav1.png";
	  yra1=35;
}else if (i1==38){
		myAudio8.play();
	  trumpinys1();
	  i1=26;
	  images[i1].src = "pav1.png";
	  yra1=27;
}else if (i1==32){
	  myAudio8.play();
	  trumpinys1();
	  i1=16;
	  images[i1].src = "pav1.png";
	  yra1=17;
}else if (i1==30){
		myAudio9.play();
	  trumpinys1();
	  i1=34;
	  images[i1].src = "pav1.png";
	  yra1=35;
}else if (i1==23){
		myAudio9.play();
	  trumpinys1();
	  i1=25;
	  images[i1].src = "pav1.png";
	  yra1=26;
}else if (i1==21){
		myAudio8.play();
	  trumpinys1();
	  i1=11;
	  images[i1].src = "pav1.png";
	  yra1=12;
}else if (i1==12){
		myAudio8.play();
	  trumpinys1();
	  i1=4;
	  images[i1].src = "pav1.png";
	  yra1=5;
}else if (i1==13){
		myAudio9.play();
	  trumpinys1();
	  i1=19;
	  images[i1].src = "pav1.png";
	  yra1=20;  
    }else {yra1+=k1;
	if (kiekz==1){myButton.style.display = "block";}
	else if (kiekz>=2){myButton2.style.display = "block";}}
var elementas = document.getElementById("melina");
  elementas.style.bottom = i1*10+"px";
  myButton.disabled = false;
  
}	
  setTimeout(changeImage, delay / 2);
  }
  );
  myButton2.addEventListener("click", function() { 
  myButton2.disabled = true;
  myButton2.style.display = "none";
   var k2 = Math.floor(Math.random() * 6) + 1; 
   if (k2==1){myAudio1.play();}
   else if (k2==2){myAudio2.play();}
   else if (k2==3){myAudio3.play();}
   else if (k2==4){myAudio4.play();}
   else if (k2==5){myAudio5.play();}
   else if (k2==6){myAudio6.play();}
   document.getElementById("t3").innerHTML = "2. Žaidėjas " + k2;
  function changeImage2() {
	  if (k2+yra2>i2){
    setTimeout(changeImage2, delay);
    if (images2[i2].src.includes("img0.png")) {
		myAudio7.play();
      images2[i2].src = "pav2.png";
	  images2[i2-1].src = "img0.png";
    } 
	i2++;
	if(i2>=48){
		myAudio10.play();
		document.getElementById("Win").style.display = "block";
		document.getElementById("Win2").innerHTML = "Nugalėjo Žaidėjas 2";
	}
}else if (i2==18){
	  trumpinys2();
	  myAudio8.play();
	  i2-=k2+1;
	  images2[i2].src = "pav2.png";
	  yra2=i2+1;
}else if (i2==22){
	  myAudio11.play();
	  yra2=22;
	  myButton2.style.display = "block";
}else if (i2==46){
	  myAudio8.play();	
	  trumpinys2();
	  i2=34;
	  images2[i2].src = "pav2.png";
	  yra2=35;
}else if (i2==38){
	myAudio8.play();	
	  trumpinys2();
	  i2=26;
	  images2[i2].src = "pav2.png";
	  yra2=27;
}else if (i2==32){
	  myAudio8.play();	
	  trumpinys2();
	  i2=16;
	  images2[i2].src = "pav2.png";
	  yra2=17;
}else if (i2==30){
	myAudio9.play();
	  trumpinys2();
	  i2=34;
	  images2[i2].src = "pav2.png";
	  yra2=35;
}else if (i2==23){
	myAudio9.play();
	  trumpinys2();
	  i2=25;
	  images2[i2].src = "pav2.png";
	  yra2=26;
}else if (i2==21){
	myAudio8.play();	
	  trumpinys2();
	  i2=11;
	  images2[i2].src = "pav2.png";
	  yra2=12;
}else if (i2==12){
	myAudio8.play();	
	  trumpinys2();
	  i2=4;
	  images2[i2].src = "pav2.png";
	  yra2=5;
}else if (i2==13){
	myAudio9.play();
	  trumpinys2();
	  i2=19;
	  images2[i2].src = "pav2.png";
	  yra2=20;  
    } else {yra2+=k2; if (kiekz==2){myButton.style.display = "block";}
	else if (kiekz==3){myButton3.style.display = "block";}}	
	var elementas = document.getElementById("zalia");
	elementas.style.bottom = i2*10+"px";
	 myButton2.disabled = false;
	  
}	
  setTimeout(changeImage2, delay / 2);
  }
  );
  myButton3.addEventListener("click", function() { 
  myButton3.disabled = true;
  myButton3.style.display = "none";
   var k3 = Math.floor(Math.random() * 6) + 1; 
   if (k3==1){myAudio1.play();}
   else if (k3==2){myAudio2.play();}
   else if (k3==3){myAudio3.play();}
   else if (k3==4){myAudio4.play();}
   else if (k3==5){myAudio5.play();}
   else if (k3==6){myAudio6.play();}
   document.getElementById("t4").innerHTML = "3. Žaidėjas " + k3;
  function changeImage3() {
	  if (k3+yra3>i3){
    setTimeout(changeImage3, delay);
    if (images3[i3].src.includes("img0.png")) {
		myAudio7.play();
      images3[i3].src = "pav3.png";
	  images3[i3-1].src = "img0.png";
    } 
	i3++;
	if(i3>=48){
		audio.pause();
		myAudio10.play();
		document.getElementById("Win").style.display = "block";
		document.getElementById("Win2").innerHTML = "Nugalėjo Žaidėjas 3";
	}
}else if (i3==18){
	  myButton.style.display = "block";
	  myAudio8.play();
	  images3[i3-1].src = "img0.png";
	  i3-=k3+1;
	  images3[i3].src = "pav3.png";
	  yra3=i3+1;
}else if (i3==22){
	  myAudio11.play();
	  yra3=22;
	  myButton3.style.display = "block";
}else if (i3==46){
	  myAudio8.play();	
	  images3[i3-1].src = "img0.png";
	  i3=34;
	  images3[i3].src = "pav3.png";
	  yra3=35;
	  myButton.style.display = "block";
}else if (i3==38){
	myAudio8.play();	
	  images3[i3-1].src = "img0.png";
	  i3=26;
	  images3[i3].src = "pav3.png";
	  yra3=27;
	  myButton.style.display = "block";
}else if (i3==32){
	  myAudio8.play();	
	  images3[i3-1].src = "img0.png";
	  i3=16;
	  images3[i3].src = "pav3.png";
	  yra3=17;
	  myButton.style.display = "block";
}else if (i3==30){
	myAudio9.play();
	  images3[i3-1].src = "img0.png";
	  i3=34;
	  images3[i3].src = "pav3.png";
	  yra3=35;
	  myButton.style.display = "block";
}else if (i3==23){
	myAudio9.play();
	  images3[i3-1].src = "img0.png";
	  i3=25;
	  images3[i3].src = "pav3.png";
	  yra3=26;
	  myButton.style.display = "block";
}else if (i3==21){
	myAudio8.play();	
	  images3[i3-1].src = "img0.png";
	  i3=11;
	  images3[i3].src = "pav3.png";
	  yra3=12;
	  myButton.style.display = "block";
}else if (i3==12){
	myAudio8.play();	
	  images3[i3-1].src = "img0.png";
	  i3=4;
	  images3[i3].src = "pav3.png";
	  yra3=5;
	  myButton.style.display = "block";
}else if (i3==13){
	myAudio9.play();
	  images3[i3-1].src = "img0.png";
	  i3=19;
	  images3[i3].src = "pav3.png";
	  yra3=20; 
myButton.style.display = "block";	  
    } else {yra3+=k3; myButton.style.display = "block"; 	myButton3.disabled= false;}
	var elementas = document.getElementById("raudona");
	elementas.style.bottom = i3*10+"px";
	myButton3.disabled= false;
}	
   
  setTimeout(changeImage3, delay / 2);
  }
  );
 
</script>
