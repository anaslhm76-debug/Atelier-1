<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - ANASS LAHMAR</title>

<style>
body{
  margin:0;
  font-family:system-ui, Arial, sans-serif;
  background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
  color:white;
  overflow-x:hidden;
}

/* NAV */
nav{
  display:flex;
  justify-content:center;
  align-items:center;
  padding:25px 40px;
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(15px);
}

.nav-center{
  text-align:center;
}

.nav-center h1{
  margin:0;
  font-size:30px;
  letter-spacing:2px;
  font-weight:600;
  text-transform:uppercase;
}

.nav-center span{
  display:block;
  margin-top:6px;
  font-size:12px;
  letter-spacing:4px;
  opacity:0.7;
  text-transform:uppercase;
}

/* GRID */
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px;
  padding:30px;
}

.atelier{
  background:rgba(255,255,255,0.08);
  padding:25px;
  border-radius:20px;
  text-align:center;
  cursor:pointer;
  backdrop-filter:blur(12px);
  transition:0.4s;
}

.atelier:hover{
  transform:translateY(-10px) scale(1.05);
  box-shadow:0 20px 40px rgba(0,0,0,0.5);
}

.exercice{
  background:rgba(255,255,255,0.08);
  margin:12px 0;
  padding:14px;
  border-radius:10px;
  cursor:pointer;
  transition:0.3s;
}

.exercice:hover{
  transform:translateX(8px);
  background:rgba(255,255,255,0.2);
}

/* MODAL */
#modal{
  display:none;
  position:fixed;
  top:0;left:0;
  width:100%;height:100%;
  background:rgba(0,0,0,0.8);
  backdrop-filter:blur(6px);
}

.modal-content{
  background:rgba(255,255,255,0.1);
  backdrop-filter:blur(20px);
  width:90%;
  max-width:500px;
  margin:100px auto;
  padding:25px;
  border-radius:15px;
}

input{
  width:100%;
  padding:10px;
  margin:10px 0;
  border:none;
  border-radius:8px;
}

button{
  padding:10px 15px;
  border:none;
  border-radius:8px;
  background:#00c6ff;
  color:white;
  cursor:pointer;
  transition:0.3s;
  margin:5px 3px;
}

button:hover{
  transform:scale(1.05);
  background:#0072ff;
}

/* ANIMATION */
.atelier, .exercice{
  opacity:0;
  transform:translateY(40px);
  transition:all 0.6s ease;
}

.show{
  opacity:1;
  transform:translateY(0);
}
</style>
</head>

<body>

<nav>
  <div class="nav-center">
    <h1>ANASS LAHMAR</h1>
    <span>Portfolio</span>
    <span>TPs et Rapports</span>
  </div>
</nav>

<div class="container">
  <div class="atelier" onclick="openAtelier('Atelier 1')">Atelier 1</div>
  <div class="atelier" onclick="openAtelier('Atelier 2')">Atelier 2</div>
  <div class="atelier" onclick="openAtelier('Atelier 3')">Atelier 3</div>
  <div class="atelier" onclick="openAtelier('Atelier 4')">Atelier 4</div>
  <div class="atelier" onclick="openAtelier('Atelier 5')">Atelier 5</div>
  <div class="atelier" onclick="openAtelier('Atelier 6')">Atelier 6</div>
  <div class="atelier" onclick="openAtelier('Atelier 7')">Atelier 7</div>
  <div class="atelier" onclick="openAtelier('Atelier 8')">Atelier 8</div>
  <div class="atelier" onclick="openAtelier('Atelier 9')">Atelier 9</div>
  <div class="atelier" onclick="openAtelier('Atelier 10')">Atelier 10</div>
  <div class="atelier" onclick="openAtelier('Atelier 11')">Atelier 11</div>
  <div class="atelier" onclick="openAtelier('Atelier 12')">Atelier 12</div>
</div>

<div id="exercices"></div>

<!-- MODAL -->
<div id="modal" onclick="outsideClick(event)">
  <div class="modal-content">

    <h3 id="title"></h3>

    <!-- TP -->
    <div>
      <h4>🔵 TP</h4>
      <input type="text" id="tpLink" placeholder="Lien TP">
      <button onclick="openLink('tp')">Ouvrir TP</button>
    </div>

    <!-- RAPPORT -->
    <div style="margin-top:15px;">
      <h4>🟢 Rapport</h4>
      <input type="text" id="rapportLink" placeholder="Lien Rapport">
      <button onclick="openLink('rapport')">Ouvrir Rapport</button>
    </div>

    <br>

    <button onclick="saveData()">💾 Sauvegarder</button>
    <button onclick="deleteData()">🗑 Supprimer</button>
    <button onclick="closeModal()">Fermer</button>

  </div>
</div>

<script>
const data = {
"Atelier 1":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 2":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 3":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 4":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 5":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 6":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 7":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 8":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 9":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 10":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 11":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
"Atelier 12":["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"]
};

let currentKey="";

function openAtelier(name){
let box=document.getElementById("exercices");
box.innerHTML="<h3>"+name+"</h3>";

data[name].forEach(ex=>{
let div=document.createElement("div");
div.className="exercice";
div.innerText=ex;
div.onclick=()=>openExercise(name,ex);
box.appendChild(div);
});

observeElements();
}

function openExercise(a,ex){
currentKey=a+"_"+ex;
document.getElementById("modal").style.display="block";
document.getElementById("title").innerText=currentKey;

document.getElementById("tpLink").value=localStorage.getItem(currentKey+"_tp")||"";
document.getElementById("rapportLink").value=localStorage.getItem(currentKey+"_rapport")||"";
}

function saveData(){
localStorage.setItem(currentKey+"_tp",document.getElementById("tpLink").value);
localStorage.setItem(currentKey+"_rapport",document.getElementById("rapportLink").value);
alert("Saved !");
}

function deleteData(){
localStorage.removeItem(currentKey+"_tp");
localStorage.removeItem(currentKey+"_rapport");
document.getElementById("tpLink").value="";
document.getElementById("rapportLink").value="";
}

function openLink(type){
let link=localStorage.getItem(currentKey+"_"+type);
if(link) window.open(link,"_blank");
else alert("No link");
}

function closeModal(){
document.getElementById("modal").style.display="none";
}

function outsideClick(e){
if(e.target.id==="modal") closeModal();
}

const observer=new IntersectionObserver((entries)=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.classList.add("show");
}
});
},{threshold:0.15});

function observeElements(){
document.querySelectorAll(".atelier, .exercice").forEach(el=>{
observer.observe(el);
});
}

window.addEventListener("load",observeElements);
</script>

</body>
</html>