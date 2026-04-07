```html
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #eef2ff, #f5f5f5);
  text-align: center;
  margin: 0;
}

/* Title */
h1 {
  color: #1f2937;
  margin-top: 30px;
}

/* Buttons */
.buttons button {
  background: #2563eb;
  color: white;
  border: none;
  padding: 12px 25px;
  margin: 10px;
  border-radius: 10px;
  cursor: pointer;
  font-size: 16px;
  transition: 0.3s;
}

.buttons button:hover {
  background: #3b82f6;
  transform: scale(1.05);
}

/* Container */
.container {
  margin-top: 30px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

/* Cards */
.card {
  background: white;
  margin: 15px;
  padding: 25px;
  width: 220px;
  border-radius: 15px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.1);
  font-weight: 500;
  transition: 0.3s;
  cursor: pointer;
}

.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

/* Icon */
.icon {
  font-size: 30px;
  margin-bottom: 10px;
}

/* Fade animation */
.fade {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>

</head>
<body>

<h1>🎓 Mon Portfolio</h1>

<div class="buttons">
  <button onclick="showAtelier(1)">Atelier 1</button>
  <button onclick="showAtelier(2)">Atelier 2</button>
</div>

<div id="content" class="container"></div>

<script>
function showAtelier(num) {
  let content = document.getElementById("content");

  if (num === 1) {
    content.innerHTML = `
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 1
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 1
      </div>
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 2
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 2
      </div>
    `;
  } else {
    content.innerHTML = `
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 3
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 3
      </div>
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 4
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 4
      </div>
    `;
  }
}

/* Show Atelier 1 by default */
window.onload = () => showAtelier(1);
</script>

</body>
</html>
```
