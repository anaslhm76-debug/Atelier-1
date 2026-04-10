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

nav{
  text-align:center;
  padding:20px;
  background:rgba(0,0,0,0.2);
}

nav h1{
  font-size:26px;
  font-weight:bold;
}

header{
  text-align:center;
  padding:30px;
}

header h2{
  font-size:32px;
  font-weight:bold;
}

.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:15px;
  padding:20px;
}

.atelier{
  background:rgba(255,255,255,0.15);
  padding:15px;
  border-radius:10px;
  text-align:center;
  cursor:pointer;
  font-weight:bold;
}

.atelier:hover{
  background:rgba(255,255,255,0.3);
}

#exercices{
  padding:20px;
}

.exercice{
  background:rgba(255,255,255,0.2);
  margin:10px 0;
  padding:10px;
  border-radius:8px;
  cursor:pointer;
}

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
  width:500px;
  margin:80px auto;
  padding:20px;
  border-radius:10px;
}

textarea{
  width:100%;
  height:120px;
  margin-top:10px;
}

button{
  margin-top:10px;
  padding:10px;
  border:none;
  background:#007bff;
  color:white;
  cursor:pointer;
  border-radius:5px;
}
</style>
</head>

<body>

<nav>
  <h1>Anass Lahmar</h1>
</nav>

<header>
  <h2>Portfolio</h2>
</header>

<div class="container">
  <div class="atelier" onclick="openAtelier('Atelier 1')">Atelier 1</div>
  <div class="atelier" onclick="openAtelier('Atelier 2')">Atelier 2</div>
  <div class="atelier" onclick="openAtelier('Atelier 3')">Atelier 3</div>
  <div class="atelier" onclick="openAtelier('Atelier 4')">Atelier 4</div>
</div>

<div id="exercices"></div>

<div id="modal">
  <div class="modal-content">
    <h3 id="title"></h3>
    <label>Rapport</label>
    <textarea id="rapport"></textarea>
    <label>TP</label>
    <textarea id="tp"></textarea>
    <button onclick="closeModal()">Fermer</button>
  </div>
</div>

<script>
const data = {
  "Atelier 1": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
  "Atelier 2": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
  "Atelier 3": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
  "Atelier 4": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"]
};

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
  document.getElementById("modal").style.display="block";
  document.getElementById("title").innerText=name;
  document.getElementById("rapport").value="";
  document.getElementById("tp").value="";
}

function closeModal(){
  document.getElementById("modal").style.display="none";
}
</script>

</body>
</html>
