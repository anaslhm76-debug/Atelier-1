<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - ANASS LAHMAR</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;}

:root{
  --bg:#0f2027;
  --bg2:#203a43;
  --bg3:#2c5364;
  --accent:#00c6ff;
  --accent2:#0072ff;
  --text:#fff;
  --muted:rgba(255,255,255,0.6);
}

body{
  font-family:'Inter',sans-serif;
  background:linear-gradient(135deg,var(--bg),var(--bg2),var(--bg3));
  color:var(--text);
  min-height:100vh;
  overflow-x:hidden;
}

/* NAV */
nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:22px 60px;
  background:rgba(255,255,255,0.04);
  backdrop-filter:blur(20px);
  border-bottom:1px solid rgba(255,255,255,0.07);
  position:sticky;top:0;z-index:100;
}

.nav-logo{
  font-family:'Syne',sans-serif;
  font-weight:800;
  font-size:20px;
  letter-spacing:2px;
  text-transform:uppercase;
  cursor:pointer;
  transition:all 0.3s ease;
  position:relative;
}

/* hover pro */
.nav-logo:hover{
  transform:scale(1.05);
  text-shadow:0 0 12px rgba(0,198,255,0.6),
              0 0 24px rgba(0,114,255,0.4);
}

.nav-logo::after{
  content:'';
  position:absolute;
  bottom:-4px;
  left:0;
  width:0;
  height:2px;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  transition:width 0.3s;
}

.nav-logo:hover::after{
  width:100%;
}

.nav-links{
  display:flex;
  gap:32px;
  list-style:none;
}

.nav-links a{
  color:var(--muted);
  text-decoration:none;
  font-size:13px;
}

.nav-links a:hover{color:#fff;}

/* HERO */
.hero{
  padding:80px 60px;
  max-width:700px;
}

.hero-name{
  font-family:'Syne';
  font-size:50px;
  margin-bottom:10px;
}

.hero-name span{
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}

.hero-desc{
  color:var(--muted);
  margin-bottom:20px;
}

/* BUTTON */
.btn-primary{
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  padding:12px 24px;
  border-radius:50px;
  color:#fff;
  text-decoration:none;
  display:inline-block;
}

/* SECTION */
.ateliers-section{
  padding:60px;
}

.section-title{
  text-align:center;
  font-size:30px;
  margin-bottom:30px;
  font-family:'Syne';
}

/* GRID */
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:15px;
}

.atelier{
  background:rgba(255,255,255,0.05);
  padding:20px;
  text-align:center;
  border-radius:12px;
  cursor:pointer;
  transition:0.3s;
}

.atelier:hover{
  background:rgba(0,198,255,0.1);
  transform:translateY(-5px);
}

/* MOBILE */
@media(max-width:768px){

  nav{padding:14px 16px;}

  .nav-logo{font-size:16px;}

  .hero{
    padding:30px 16px;
    text-align:center;
  }

  .hero-name{font-size:28px;}

  .btn-primary{
    width:100%;
    text-align:center;
  }

  .container{
    grid-template-columns:repeat(2,1fr);
  }

  .ateliers-section{
    padding:30px 16px;
  }
}
</style>
</head>

<body>

<nav>
  <div class="nav-logo">ANASS LAHMAR</div>
  <ul class="nav-links">
    <li><a href="#ateliers">Projets</a></li>
    <li><a href="#ateliers">Ateliers</a></li>
  </ul>
</nav>

<section class="hero">
  <h1 class="hero-name">Bonjour, je suis <span>Anass</span></h1>
  <p class="hero-desc">
    Développeur web en formation, passionné par la création de projets modernes et performants.
  </p>
  <a href="#ateliers" class="btn-primary">Voir mes projets</a>
</section>

<section class="ateliers-section" id="ateliers">
  <h2 class="section-title">TPs & Rapports</h2>
  <div class="container" id="atelierGrid"></div>
</section>

<script>
const grid = document.getElementById('atelierGrid');

for(let i=1;i<=12;i++){
  let div=document.createElement('div');
  div.className='atelier';
  div.innerText='Atelier '+i;
  grid.appendChild(div);
}
</script>

</body>
</html>