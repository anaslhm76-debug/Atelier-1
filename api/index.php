<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - Anass Lahmar</title>

<style>
body{
  margin:0;
  font-family:Arial, sans-serif;
  background:linear-gradient(135deg,#0b3d91,#1e90ff,#00aaff);
  color:white;
}

/* NAVBAR */
nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:15px 30px;
  background:rgba(0,0,0,0.3);
  backdrop-filter:blur(10px);
}

nav h1{
  margin:0;
}

nav ul{
  list-style:none;
  display:flex;
  gap:20px;
}

nav ul li{
  cursor:pointer;
  transition:0.3s;
}

nav ul li:hover{
  color:#00e0ff;
}

/* HEADER */
header{
  text-align:center;
  padding:40px;
}

header h2{
  font-size:36px;
}

/* GRID */
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:20px;
  padding:20px;
}

.atelier{
  background:rgba(255,255,255,0.15);
  padding:20px;
  border-radius:12px;
  text-align:center;
  cursor:pointer;
  font-weight:bold;
  transition:0.3s;
  box-shadow:0 4px 20px rgba(0,0,0,0.2);
}

.atelier:hover{
  transform:translateY(-5px) scale(1.05);
  background:rgba(255,255,255,0.3);
}

/* EXERCICES */
#exercices{
  padding:20px;
}

.exercice{
  background:rgba(255,255,255,0.2);
  margin:10px 0;
  padding:12px;
  border-radius:8px;
  cursor:pointer;
  transition:0.3s;
}

.exercice:hover{
  background:rgba(255,255,255,0.35);
}

/* MODAL */
#modal{
  display:none;
  position:fixed;
  top:0;left:0;
  width:100%;height:100%;
  background:rgba(0,0,0,0.7);
}

.modal-content{
  background:#ffffff;
  color:black;
  width:90%;
  max-width:500px;
  margin:80px auto;
  padding:20px;
  border-radius:10px;
  animation:fadeIn 0.3s ease;
}

@keyframes fadeIn{
  from{opacity:0; transform:scale(0.9);}
  to{opacity:1; transform:scale(1);}
}

textarea{
  width:100%;
  height:120px;
  margin-top:10px;
  border-radius:5px;
  padding:8px;
}

button{
  margin-top:10px;
  padding:10px;
  border:none;
  background:#007bff;
  color:white;
  cursor:pointer;
  border-radius:5px;
  margin-right:5px;
}

button:hover{
  background:#0056b3;
}

/* FOOTER */
footer{
  text-align:center;
  padding:20px;
  background:rgba(0,0,0,0.3);
  margin-top:30px;
}
</style>
</head>

<body>

<nav>
  <h1>Anass Lahmar</h1>
  <ul>
    <li>Accueil</li>
    <li>Portfolio</li>
    <li>Contact</li>
  </ul>
</nav>

<header>
  <h2>Mon Portfolio</h2>
  <p>Travaux pratiques & rapports</p>
</header>

<div class="container">
  <div class="atelier" onclick="openAtelier('Atelier 1')">Atelier 1</div>
  <div class="atelier" onclick="openAtelier('Atelier 2')">Atelier 2</div>
  <div class="atelier" onclick="openAtelier('Atelier 3')">Atelier 3</div>
  <div class="atelier" onclick="openAtelier('Atelier 4')">Atelier 4</div>
</div>

<div id="exercices"></div>

<div id="modal" onclick="outsideClick(event)">
  <div class="modal-content">
    <h3 id="title"></h3>

    <label>Rapport</label>
    <textarea id="rapport"></textarea>

    <label>TP</label>
    <textarea id="tp"></textarea>

    <button onclick="saveData()">💾 Sauvegarder</button>
    <button onclick="deleteData()">🗑 Supprimer</button>
    <button onclick="closeModal()">Fermer</button>
  </div>
</div>

<footer>
  © 2026 - Anass Lahmar | Portfolio
</footer>

<script>
const data = {
  "Atelier 1": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
  "Atelier 2": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
  "Atelier 3": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
  "Atelier 4": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"]
};

let currentExercice = "";

function openAtelier(name){
  let box = document.getElementById("exercices");
  box.innerHTML = "<h3>"+name+"</h3>";

  data[name].forEach(ex=>{
    let div = document.createElement("div");
    div.className="exercice";
    div.innerText=ex;
    div.onclick=()=>openExercise(ex);
    box.appendChild(div);
  });
}

function openExercise(name){
  currentExercice = name;

  document.getElementById("modal").style.display="block";
  document.getElementById("title").innerText=name;

  document.getElementById("rapport").value =
    localStorage.getItem(name+"_rapport") || "";

  document.getElementById("tp").value =
    localStorage.getItem(name+"_tp") || "";
}

function saveData(){
  localStorage.setItem(currentExercice+"_rapport",
    document.getElementById("rapport").value);

  localStorage.setItem(currentExercice+"_tp",
    document.getElementById("tp").value);

  alert("Données sauvegardées !");
}

function deleteData(){
  localStorage.removeItem(currentExercice+"_rapport");
  localStorage.removeItem(currentExercice+"_tp");

  document.getElementById("rapport").value="";
  document.getElementById("tp").value="";
}

function closeModal(){
  document.getElementById("modal").style.display="none";
}

function outsideClick(e){
  if(e.target.id === "modal"){
    closeModal();
  }
}
</script>

</body>
</html>