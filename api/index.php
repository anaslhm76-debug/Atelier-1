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

/* ✅ HOVER PRO */
.nav-logo{
  font-family:'Syne',sans-serif;
  font-weight:800;font-size:20px;
  letter-spacing:2px;text-transform:uppercase;
  position:relative;
  cursor:pointer;
  transition:all 0.3s ease;
}
.nav-logo:hover{
  transform:scale(1.05);
  text-shadow:0 0 12px rgba(0,198,255,0.6),
              0 0 24px rgba(0,114,255,0.4);
}
.nav-logo::after{
  content:'';position:absolute;bottom:-4px;left:0;
  width:30px;height:2px;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  border-radius:2px;
  transition:width 0.3s;
}
.nav-logo:hover::after{
  width:100%;
}

.nav-links{display:flex;gap:32px;list-style:none;}
.nav-links a{
  color:var(--muted);text-decoration:none;
  font-size:13px;letter-spacing:0.5px;
  transition:color 0.2s;
}
.nav-links a:hover{color:var(--text);}

.hero{
  display:grid;
  grid-template-columns:1fr;
  align-items:center;
  min-height:calc(100vh - 73px);
  padding:0 60px;gap:60px;
  max-width:700px;
}
.hero-left{animation:fadeUp 0.8s ease both;}
.hero-tag{
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(0,198,255,0.1);
  border:1px solid rgba(0,198,255,0.25);
  border-radius:100px;padding:6px 14px;
  font-size:12px;color:var(--accent);
  letter-spacing:1px;text-transform:uppercase;
  margin-bottom:28px;
}
.hero-tag::before{
  content:'';width:6px;height:6px;border-radius:50%;
  background:var(--accent);animation:pulse 2s infinite;
}
h1.hero-name{
  font-family:'Syne',sans-serif;
  font-size:clamp(34px,4vw,54px);
  font-weight:800;line-height:1.05;
  letter-spacing:-1px;margin-bottom:16px;
}
h1.hero-name span{
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.hero-desc{
  font-size:14px;color:var(--muted);line-height:1.7;
  max-width:420px;margin-bottom:30px;font-weight:300;
}
.hero-cta{display:flex;gap:14px;align-items:center;flex-wrap:wrap;}
.btn-primary{
  display:inline-flex;align-items:center;gap:8px;
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  color:#fff;border:none;padding:12px 24px;
  border-radius:50px;font-size:13px;font-weight:500;
  cursor:pointer;text-decoration:none;
  transition:transform 0.2s,box-shadow 0.2s;letter-spacing:0.3px;
}
.btn-primary:hover{
  transform:translateY(-2px);
  box-shadow:0 12px 30px rgba(0,114,255,0.4);
}

.hero-stats{
  display:flex;gap:32px;margin-top:36px;
  padding-top:28px;
  border-top:1px solid rgba(255,255,255,0.08);
}
.stat-item span:first-child{
  display:block;font-family:'Syne',sans-serif;
  font-size:24px;font-weight:700;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.stat-item span:last-child{font-size:11px;color:var(--muted);letter-spacing:0.5px;}

.section-title{
  font-family:'Syne',sans-serif;
  font-size:clamp(24px,3vw,38px);font-weight:700;
  text-align:center;margin-bottom:40px;
}
.ateliers-section{padding:80px 60px;}
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:16px;
}
.atelier{
  background:rgba(255,255,255,0.05);
  padding:24px 20px;border-radius:16px;
  text-align:center;cursor:pointer;
  border:1px solid rgba(255,255,255,0.06);
  transition:all 0.35s ease;
  font-family:'Syne',sans-serif;font-size:14px;
  font-weight:600;letter-spacing:0.5px;
  opacity:0;transform:translateY(30px);
}
.atelier.show{opacity:1;transform:translateY(0);}
.atelier:hover{
  transform:translateY(-8px);
  background:rgba(0,198,255,0.1);
  border-color:rgba(0,198,255,0.3);
  box-shadow:0 16px 40px rgba(0,114,255,0.2);
}

#exercices{padding:0 60px 60px;}
#exercices h3{
  font-family:'Syne',sans-serif;
  font-size:22px;font-weight:700;
  margin-bottom:20px;color:var(--accent);
}

/* باقي الكود كامل كما هو (modal + script...) */

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
  <div class="hero-left">
    <div class="hero-tag">Disponible pour missions</div>
    <h1 class="hero-name">Bonjour, je suis<br><span>Anass.</span></h1>
    <p class="hero-desc">Curieux et motivé...</p>
    <div class="hero-cta">
      <a href="#ateliers" class="btn-primary">Mes Projets →</a>
    </div>
    <div class="hero-stats">
      <div class="stat-item"><span>12</span><span>Ateliers</span></div>
      <div class="stat-item"><span>96+</span><span>Exercices</span></div>
      <div class="stat-item"><span>OFPPT</span><span>Tanger</span></div>
    </div>
  </div>
</section>

<section class="ateliers-section" id="ateliers">
  <h2 class="section-title">TPs & Rapports</h2>
  <div class="container" id="atelierGrid"></div>
</section>

<div id="exercices"></div>

<script>
const ATELIERS = 12;
const grid = document.getElementById('atelierGrid');

for (let i = 1; i <= ATELIERS; i++) {
  const d = document.createElement('div');
  d.className = 'atelier';
  d.textContent = 'Atelier ' + i;
  grid.appendChild(d);
}
</script>

</body>
</html>