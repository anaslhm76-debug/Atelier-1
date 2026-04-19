<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>ANASS LAHMAR | Portfolio Professionnel</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --bg: #060b14;
  --bg2: #0a1628;
  --bg3: #0d1f3c;
  --accent: #00c6ff;
  --accent2: #0072ff;
  --accent3: #7b2fff;
  --text: #ffffff;
  --muted: rgba(255, 255, 255, 0.6);
}

html {
  scroll-behavior: smooth;
}

::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}

::-webkit-scrollbar-track {
  background: rgba(10, 22, 40, 0.8);
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(135deg, var(--accent), var(--accent2), var(--accent3));
  border-radius: 10px;
  transition: all 0.3s;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(135deg, var(--accent3), var(--accent2), var(--accent));
}

#scrollProgress {
  position: fixed;
  top: 0;
  left: 0;
  height: 3px;
  width: 0%;
  background: linear-gradient(90deg, var(--accent3), var(--accent), var(--accent2));
  z-index: 9997;
  box-shadow: 0 0 12px rgba(0, 198, 255, 0.6);
  transition: width 0.08s linear;
}

#bgCanvas {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 0;
  opacity: 0.45;
}

body {
  font-family: 'Inter', sans-serif;
  background: var(--bg);
  color: var(--text);
  overflow-x: hidden;
}

/* WELCOME OVERLAY */
#welcomeOverlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle at center, #060b14 0%, #020408 100%);
  backdrop-filter: blur(8px);
  z-index: 10000;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  transition: opacity 0.9s cubic-bezier(0.23, 1, 0.32, 1), visibility 0.9s ease;
  visibility: visible;
  opacity: 1;
  pointer-events: none;
}

#welcomeOverlay.hide {
  opacity: 0;
  visibility: hidden;
}

.welcome-line-top {
  font-family: 'Syne', sans-serif;
  font-size: clamp(32px, 8vw, 80px);
  font-weight: 800;
  letter-spacing: -0.02em;
  background: linear-gradient(135deg, #ffffff, var(--accent), var(--accent3), var(--accent2));
  background-size: 300% auto;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  animation: glowMove 3s ease infinite, floatDown 0.8s 0.3s forwards;
  opacity: 0;
  transform: translateY(-30px);
}

.welcome-line-bottom {
  font-family: 'Syne', sans-serif;
  font-size: clamp(28px, 7vw, 70px);
  font-weight: 800;
  letter-spacing: -0.02em;
  background: linear-gradient(135deg, var(--accent2), var(--accent3), #ffffff, var(--accent));
  background-size: 300% auto;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  animation: glowMove 3s ease infinite reverse, floatUp 0.8s 0.5s forwards;
  opacity: 0;
  transform: translateY(30px);
  margin-top: 10px;
}

@keyframes floatDown { to { opacity: 1; transform: translateY(0); } }
@keyframes floatUp { to { opacity: 1; transform: translateY(0); } }
@keyframes glowMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

/* Navigation */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 22px 60px;
  background: rgba(6, 11, 20, 0);
  backdrop-filter: blur(0px);
  border-bottom: 1px solid transparent;
  position: sticky;
  top: 0;
  z-index: 100;
  transition: all 0.4s ease;
}

nav.scrolled {
  padding: 14px 60px;
  background: rgba(6, 11, 20, 0.92);
  backdrop-filter: blur(20px);
  border-bottom-color: rgba(0, 198, 255, 0.15);
  box-shadow: 0 8px 40px rgba(0, 0, 0, 0.4);
}

.nav-logo {
  font-family: 'Syne', sans-serif;
  font-weight: 800;
  font-size: 20px;
  letter-spacing: 2px;
  text-transform: uppercase;
  cursor: pointer;
  background: linear-gradient(90deg, #fff 0%, var(--accent) 50%, #fff 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  transition: background-position 0.5s ease;
}

.nav-logo:hover { background-position: right center; }

.nav-links { display: flex; gap: 32px; list-style: none; }
.nav-links a {
  color: var(--muted);
  text-decoration: none;
  font-size: 13px;
  letter-spacing: 0.5px;
  transition: color 0.2s;
  cursor: pointer;
  position: relative;
  padding-bottom: 4px;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--accent), var(--accent3));
  transition: width 0.3s ease;
}

.nav-links a:hover { color: var(--text); }
.nav-links a:hover::after { width: 100%; }

/* Hero Section */
.hero {
  display: grid;
  align-items: center;
  min-height: calc(100vh - 73px);
  padding: 0 60px;
  max-width: 700px;
  position: relative;
  z-index: 2;
}

.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(0, 198, 255, 0.08);
  border: 1px solid rgba(0, 198, 255, 0.2);
  border-radius: 100px;
  padding: 6px 14px;
  font-size: 12px;
  color: var(--accent);
  letter-spacing: 1px;
  text-transform: uppercase;
  margin-bottom: 28px;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeUp 0.6s 0.1s forwards;
}

.hero-tag::before {
  content: '';
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--accent);
  animation: pulse 2s infinite;
}

.hero-name {
  font-family: 'Syne', sans-serif;
  font-size: clamp(34px, 4vw, 54px);
  font-weight: 800;
  line-height: 1.05;
  letter-spacing: -1px;
  margin-bottom: 16px;
}

.greeting-wrap { display: inline-flex; flex-wrap: wrap; gap: 0 0.28em; margin-bottom: 6px; }
.g-word { display: inline-flex; }
.g-char {
  display: inline-block;
  font-family: 'Syne', sans-serif;
  font-size: clamp(34px, 4vw, 54px);
  font-weight: 800;
  color: var(--text);
  transition: transform 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
  opacity: 0;
}
.g-char.visible { opacity: 1; }
.greeting-wrap:hover .g-char { color: rgba(255,255,255,0.35); }
.greeting-wrap .g-char:hover { color: #fff !important; transform: translateY(-8px) scale(1.1); }

.name-main {
  display: inline-block;
  position: relative;
  padding-bottom: 6px;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeUp 0.7s 1.2s forwards;
}
.name-main-inner {
  background: linear-gradient(90deg, var(--accent3), var(--accent), var(--accent2));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  font-family: 'Syne', sans-serif;
  font-size: clamp(34px, 4vw, 54px);
  font-weight: 800;
}
.name-main::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 40%;
  height: 3px;
  background: linear-gradient(90deg, var(--accent3), var(--accent));
  border-radius: 3px;
  transition: width 0.45s;
  opacity: 0.5;
}
.name-main:hover::before { width: 100%; opacity: 1; }

.hero-desc {
  font-size: 14px;
  color: var(--muted);
  line-height: 1.7;
  max-width: 420px;
  margin-bottom: 30px;
  font-weight: 300;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeUp 0.6s 1.5s forwards;
}

.hero-cta {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeUp 0.6s 1.7s forwards;
}
.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, var(--accent3), var(--accent), var(--accent2));
  background-size: 200% 200%;
  color: #fff;
  border: none;
  padding: 12px 24px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  text-decoration: none;
  transition: transform 0.2s, box-shadow 0.2s;
  animation: gradientShift 4s ease infinite;
}
@keyframes gradientShift {
  0%, 100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}
.btn-primary:hover { transform: translateY(-3px); box-shadow: 0 12px 40px rgba(0, 114, 255, 0.5); }

.btn-outline {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent;
  color: var(--text);
  border: 1px solid rgba(255, 255, 255, 0.15);
  padding: 11px 24px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 400;
  cursor: pointer;
  text-decoration: none;
  transition: all 0.2s;
}
.btn-outline:hover { border-color: rgba(0, 198, 255, 0.5); background: rgba(0, 198, 255, 0.08); transform: translateY(-2px); }

.hero-stats {
  display: flex;
  gap: 32px;
  margin-top: 36px;
  padding-top: 28px;
  border-top: 1px solid rgba(255, 255, 255, 0.07);
  opacity: 0;
  transform: translateY(20px);
  animation: fadeUp 0.6s 1.9s forwards;
}
.stat-item span:first-child {
  display: block;
  font-family: 'Syne', sans-serif;
  font-size: 28px;
  font-weight: 700;
  background: linear-gradient(90deg, var(--accent3), var(--accent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.stat-item span:last-child { font-size: 11px; color: var(--muted); letter-spacing: 0.5px; }

/* About Section */
.about-section { padding: 80px 60px; position: relative; z-index: 2; }
.about-container { max-width: 1000px; margin: 0 auto; }
.about-title {
  font-family: 'Syne', sans-serif;
  font-size: 38px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 50px;
  background: linear-gradient(135deg, #fff, var(--accent), var(--accent3));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.7s;
}
.about-title.in-view { opacity: 1; transform: translateY(0); }
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
.about-left { opacity: 0; transform: translateX(-30px); transition: all 0.7s; }
.about-left.in-view { opacity: 1; transform: translateX(0); }
.about-text { font-size: 15px; line-height: 1.8; color: var(--muted); }
.about-right { opacity: 0; transform: translateX(30px); transition: all 0.7s 0.1s; }
.about-right.in-view { opacity: 1; transform: translateX(0); }
.skills-title { font-family: 'Syne', sans-serif; font-size: 22px; font-weight: 600; margin-bottom: 20px; color: var(--accent); }
.skills-container { display: flex; flex-wrap: wrap; gap: 12px; }
.skill-tag {
  background: rgba(0, 198, 255, 0.08);
  border: 1px solid rgba(0, 198, 255, 0.15);
  border-radius: 50px;
  padding: 8px 18px;
  font-size: 13px;
  font-weight: 500;
  transition: all 0.3s;
}
.skill-tag:hover {
  background: rgba(0, 198, 255, 0.2);
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 5px 15px rgba(0, 198, 255, 0.2);
  border-color: var(--accent);
}

/* Ateliers Section */
.ateliers-section { padding: 80px 60px; position: relative; z-index: 2; }
.section-title {
  font-family: 'Syne', sans-serif;
  font-size: clamp(24px, 3vw, 38px);
  font-weight: 700;
  text-align: center;
  margin-bottom: 40px;
  opacity: 0;
  position: relative;
  display: inline-block;
  left: 50%;
  transform: translateX(-50%) translateY(30px);
  transition: all 0.7s;
}
.section-title.in-view { opacity: 1; transform: translateX(-50%) translateY(0); }
.section-title::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 50%;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--accent3), var(--accent), var(--accent2));
  transform: translateX(-50%);
  transition: width 0.6s;
}
.section-title.in-view::after { width: 60px; }

.container { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px; }
.atelier {
  background: rgba(255, 255, 255, 0.03);
  padding: 24px 20px;
  border-radius: 20px;
  text-align: center;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.06);
  transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  font-family: 'Syne', sans-serif;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.5px;
  opacity: 0;
  transform: translateY(30px);
  position: relative;
  overflow: hidden;
}
.atelier::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at var(--mx,50%) var(--my,50%), rgba(0, 198, 255, 0.12) 0%, transparent 70%);
  opacity: 0;
  transition: opacity 0.4s;
}
.atelier:hover::before { opacity: 1; }
.atelier:hover {
  transform: translateY(-8px) scale(1.03);
  background: rgba(0, 198, 255, 0.08);
  border-color: rgba(0, 198, 255, 0.35);
  box-shadow: 0 25px 40px -12px rgba(0, 0, 0, 0.5);
}
.atelier.show { opacity: 1; transform: translateY(0); }

.ripple {
  position: absolute;
  border-radius: 50%;
  background: rgba(0, 198, 255, 0.3);
  transform: scale(0);
  animation: rippleAnim 0.7s ease-out;
  pointer-events: none;
}
@keyframes rippleAnim { to { transform: scale(4); opacity: 0; } }

#exercices { padding: 0 60px 60px; position: relative; z-index: 2; }
#exercices h3 { font-family: 'Syne', sans-serif; font-size: 24px; font-weight: 700; margin-bottom: 20px; color: var(--accent); }

.exercice-card {
  background: rgba(255, 255, 255, 0.03);
  margin: 10px 0;
  padding: 16px 20px;
  border-radius: 14px;
  border: 1px solid rgba(255, 255, 255, 0.05);
  opacity: 0;
  transform: translateX(-20px);
  transition: all 0.4s;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
}
.exercice-card.show { opacity: 1; transform: translateX(0); }
.exercice-card:hover {
  background: rgba(0, 198, 255, 0.08);
  border-color: rgba(0, 198, 255, 0.3);
  transform: translateX(6px);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
}
.exercice-label { display: flex; align-items: center; gap: 10px; font-size: 14px; font-weight: 500; flex: 1; }
.exercice-label::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--accent); animation: pulse 2s infinite; }

.link-btn {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 500;
  text-decoration: none;
  border: 1px solid;
  transition: all 0.2s;
}
.link-tp { color: var(--accent); border-color: rgba(0, 198, 255, 0.3); background: rgba(0, 198, 255, 0.07); }
.link-tp:hover { background: rgba(0, 198, 255, 0.2); transform: translateY(-2px); border-color: var(--accent); }
.link-rapport { color: #a78bfa; border-color: rgba(167, 139, 250, 0.3); background: rgba(167, 139, 250, 0.07); }
.link-rapport:hover { background: rgba(167, 139, 250, 0.2); transform: translateY(-2px); border-color: #a78bfa; }

/* Contact Modal avec étoile et hovers pro */
#contactModal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(16px);
  z-index: 500;
  align-items: center;
  justify-content: center;
}
#contactModal.open { display: flex; }
.cmodal {
  background: linear-gradient(145deg, rgba(13, 31, 60, 0.98), rgba(6, 11, 20, 0.98));
  border: 1px solid rgba(0, 198, 255, 0.2);
  border-radius: 24px;
  padding: 40px 36px;
  width: 92%;
  max-width: 460px;
  position: relative;
  animation: fadeUp 0.35s both;
}
.cmodal-close {
  position: absolute;
  top: 14px;
  right: 14px;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.08);
  color: var(--muted);
  cursor: pointer;
  transition: all 0.2s;
}
.cmodal-close:hover { background: rgba(0, 198, 255, 0.2); color: #fff; transform: rotate(90deg); }
.cmodal h3 { font-family: 'Syne', sans-serif; font-size: 22px; font-weight: 800; margin-bottom: 6px; }
.cmodal h3 span { background: linear-gradient(90deg, var(--accent3), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
.cmodal-subtitle { font-size: 13px; color: var(--muted); margin-bottom: 28px; }
.cinfo-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 24px; }
.cinfo-tile {
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.07);
  border-radius: 14px;
  padding: 14px 16px;
  display: flex;
  align-items: center;
  gap: 12px;
  text-decoration: none;
  color: var(--text);
  transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
}
.cinfo-tile:hover {
  background: rgba(0, 198, 255, 0.12);
  border-color: var(--accent);
  transform: translateY(-4px) scale(1.02);
  box-shadow: 0 10px 25px rgba(0, 198, 255, 0.2);
}
.cinfo-tile.full { grid-column: 1/-1; }
.cinfo-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  flex-shrink: 0;
  background: rgba(0, 198, 255, 0.1);
  border: 1px solid rgba(0, 198, 255, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s;
}
.cinfo-tile:hover .cinfo-icon {
  background: var(--accent);
  border-color: var(--accent);
  transform: scale(1.05);
}
.cinfo-tile:hover .cinfo-icon svg { color: #fff; }
.cinfo-icon svg { width: 18px; height: 18px; color: var(--accent); transition: color 0.3s; }
.cinfo-label { font-size: 11px; color: var(--muted); letter-spacing: 0.4px; display: block; margin-bottom: 2px; }
.cinfo-value { font-size: 14px; font-weight: 600; letter-spacing: 0.5px; }

/* Étoile pour le numéro de téléphone */
.star-phone {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}
.star-phone::before {
  content: '★';
  color: var(--accent3);
  font-size: 14px;
  animation: starPulse 1.5s ease infinite;
}
@keyframes starPulse {
  0%, 100% { opacity: 0.6; transform: scale(1); }
  50% { opacity: 1; transform: scale(1.2); text-shadow: 0 0 5px var(--accent3); }
}

/* Modal TP/Rapport */
#modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(10px);
  z-index: 1000;
}
.modal-content {
  background: linear-gradient(145deg, rgba(13, 31, 60, 0.97), rgba(6, 11, 20, 0.97));
  width: 90%;
  max-width: 460px;
  margin: 80px auto;
  padding: 32px;
  border-radius: 20px;
  border: 1px solid rgba(0, 198, 255, 0.2);
}
.modal-content h3 { font-family: 'Syne', sans-serif; font-size: 18px; font-weight: 700; margin-bottom: 24px; color: var(--accent); }
.input-row { display: flex; gap: 8px; }
input {
  flex: 1;
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 10px 14px;
  color: #fff;
  font-size: 13px;
  outline: none;
  transition: all 0.2s;
}
input:focus { border-color: var(--accent); box-shadow: 0 0 0 3px rgba(0, 198, 255, 0.1); }
.btn-small { padding: 10px 14px; background: linear-gradient(135deg, var(--accent), var(--accent2)); border: none; border-radius: 10px; color: #fff; cursor: pointer; transition: all 0.2s; }
.btn-small:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0, 114, 255, 0.4); }
.modal-actions { display: flex; gap: 8px; margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.07); }
.btn-save { flex: 1; padding: 11px; background: linear-gradient(135deg, var(--accent3), var(--accent), var(--accent2)); border: none; border-radius: 10px; color: #fff; cursor: pointer; transition: all 0.2s; }
.btn-save:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0, 114, 255, 0.4); }
.btn-del { padding: 11px 16px; background: rgba(255, 80, 80, 0.1); border: 1px solid rgba(255, 80, 80, 0.18); border-radius: 10px; color: #ff6060; cursor: pointer; transition: all 0.2s; }
.btn-del:hover { background: rgba(255, 80, 80, 0.2); transform: translateY(-2px); }
.btn-close { padding: 11px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 10px; color: var(--muted); cursor: pointer; transition: all 0.2s; }
.btn-close:hover { background: rgba(255, 255, 255, 0.1); transform: translateY(-2px); }

#scrollTop {
  position: fixed;
  bottom: 32px;
  right: 32px;
  width: 46px;
  height: 46px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--accent3), var(--accent), var(--accent2));
  border: none;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  z-index: 200;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.3s;
  box-shadow: 0 4px 20px rgba(0, 114, 255, 0.4);
}
#scrollTop.visible { opacity: 1; transform: translateY(0); }
#scrollTop:hover { transform: translateY(-4px) scale(1.1); box-shadow: 0 8px 28px rgba(0, 114, 255, 0.6); }

@keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
@keyframes pulse { 0%,100% { opacity: 1; } 50% { opacity: 0.4; } }

.reveal { opacity: 0; transform: translateY(40px); transition: all 0.7s; }
.reveal.reveal-left { transform: translateX(-40px); }
.reveal.reveal-right { transform: translateX(40px); }
.reveal.in-view { opacity: 1; transform: none; }

@media (max-width: 768px) {
  nav { padding: 16px 20px; }
  nav.scrolled { padding: 12px 20px; }
  .hero { padding: 40px 20px; text-align: center; min-height: auto; }
  .hero-desc { max-width: 100%; }
  .hero-cta { justify-content: center; }
  .ateliers-section { padding: 50px 20px; }
  #exercices { padding: 0 20px 40px; }
  .about-section { padding: 50px 20px; }
  .about-grid { grid-template-columns: 1fr; gap: 30px; }
  .exercice-card { flex-direction: column; align-items: flex-start; gap: 12px; }
  .greeting-wrap { justify-content: center; }
}
</style>
</head>
<body>

<div id="welcomeOverlay">
  <div class="welcome-line-top">WELCOME TO</div>
  <div class="welcome-line-bottom">MY PORTFOLIO</div>
</div>

<div id="mainContent">
  <div id="scrollProgress"></div>
  <canvas id="bgCanvas"></canvas>
  <button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

  <nav id="mainNav">
    <div class="nav-logo">ANASS LAHMAR</div>
    <ul class="nav-links">
      <li><a href="#about">À propos</a></li>
      <li><a href="#ateliers">Projets</a></li>
    </ul>
  </nav>

  <section class="hero">
    <div class="hero-left">
      <div class="hero-tag">Disponible pour missions</div>
      <h1 class="hero-name">
        <div class="greeting-wrap" id="greetingWrap"></div>
        <div style="margin-top:4px;">
          <span class="name-main"><span class="name-main-inner">Anass.</span></span>
        </div>
      </h1>
      <p class="hero-desc">Curieux et motivé, je développe des projets web et j'apprends chaque jour de nouvelles technologies pour améliorer mes compétences et réaliser des solutions concrètes.</p>
      <div class="hero-cta">
        <a href="#ateliers" class="btn-primary">Mes Projets →</a>
        <a href="#" class="btn-outline" onclick="event.preventDefault();openContactModal()">Me contacter</a>
      </div>
      <div class="hero-stats">
        <div class="stat-item"><span class="counter" data-target="20">0</span><span>Ateliers</span></div>
        <div class="stat-item"><span class="counter" data-target="160">0</span><span>Exercices</span></div>
        <div class="stat-item"><span>OFPPT</span><span>Tanger</span></div>
      </div>
    </div>
  </section>

  <section class="about-section" id="about">
    <div class="about-container">
      <h2 class="about-title reveal">À propos</h2>
      <div class="about-grid">
        <div class="about-left reveal reveal-left">
          <p class="about-text">Développeur web junior passionné par les technologies modernes. Actuellement en formation à l'OFPPT Tanger, je crée des expériences web immersives et performantes. Chaque ligne de code est une opportunité d'apprendre et de repousser mes limites.</p>
        </div>
        <div class="about-right reveal reveal-right">
          <h3 class="skills-title">Compétences techniques</h3>
          <div class="skills-container">
            <span class="skill-tag">HTML / CSS</span>
            <span class="skill-tag">Bootstrap</span>
            <span class="skill-tag">Git / GitHub</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">PHP (en cours)</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ateliers-section" id="ateliers">
    <h2 class="section-title">TPs & Rapports</h2>
    <div class="container" id="atelierGrid"></div>
  </section>

  <div id="exercices"></div>

  <!-- Contact Modal avec étoile sur le téléphone -->
  <div id="contactModal" onclick="contactOverlayClick(event)">
    <div class="cmodal">
      <button class="cmodal-close" onclick="closeContactModal()">✕</button>
      <h3>Me <span>contacter</span></h3>
      <p class="cmodal-subtitle">Disponible pour missions et collaborations.</p>
      <div class="cinfo-grid">
        <a class="cinfo-tile" href="mailto:Anaslhm76@gmail.com">
          <div class="cinfo-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg></div>
          <div><span class="cinfo-label">Email</span><span class="cinfo-value">Anaslhm76@gmail.com</span></div>
        </a>
        <a class="cinfo-tile" href="tel:0777852536">
          <div class="cinfo-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.9v2.02z"/></svg></div>
          <div><span class="cinfo-label">Téléphone</span><span class="cinfo-value star-phone">0777 852 536</span></div>
        </a>
        <div class="cinfo-tile full" style="cursor:default;">
          <div class="cinfo-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div><span class="cinfo-label">Localisation</span><span class="cinfo-value">Tanger, Maroc</span></div>
        </div>
      </div>
    </div>
  </div>

  <div id="modal" onclick="outsideClick(event)">
    <div class="modal-content">
      <h3 id="modalTitle"></h3>
      <div class="modal-section"><h4>Lien TP</h4><div class="input-row"><input type="text" id="tpLink" placeholder="https://..."><button class="btn-small" onclick="openModalLink('tp')">Ouvrir</button></div></div>
      <div class="modal-section"><h4>Lien Rapport</h4><div class="input-row"><input type="text" id="rapportLink" placeholder="https://..."><button class="btn-small" onclick="openModalLink('rapport')">Ouvrir</button></div></div>
      <div class="modal-actions"><button class="btn-save" onclick="saveData()">Sauvegarder</button><button class="btn-del" onclick="deleteData()">Supprimer</button><button class="btn-close" onclick="closeModal()">Fermer</button></div>
    </div>
  </div>
</div>

<script>
// ==================== WELCOME OVERLAY - DISPARAÎT AU SCROLL ====================
let welcomeRevealed = false;
const welcomeOverlay = document.getElementById('welcomeOverlay');
function hideWelcome() { if (!welcomeRevealed) { welcomeRevealed = true; welcomeOverlay.classList.add('hide'); } }
window.addEventListener('scroll', function onFirstScroll() { if (!welcomeRevealed) { hideWelcome(); window.removeEventListener('scroll', onFirstScroll); } }, { passive: true, once: true });

// ==================== ANIMATION 3D - DESIGN SOMBRE LUXUEUX ====================
(function() {
  const canvas = document.getElementById('bgCanvas');
  const ctx = canvas.getContext('2d');
  let W, H, centerX, centerY;
  let scrollY = 0, targetScrollY = 0;
  let time = 0;
  const mouse = { x: 0, y: 0, active: false };
  
  function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; centerX = W / 2; centerY = H / 2; }
  resize();
  window.addEventListener('resize', resize);
  document.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; mouse.active = true; });
  document.addEventListener('mouseleave', () => { mouse.active = false; });
  window.addEventListener('scroll', () => { targetScrollY = window.scrollY; });
  
  // Anneaux lumineux
  const rings = [
    { r: 60, w: 3.5, a: 0.55, speed: 0.006, color: '#c084fc' },
    { r: 110, w: 2.5, a: 0.4, speed: -0.0045, color: '#a855f7' },
    { r: 170, w: 2, a: 0.3, speed: 0.0035, color: '#818cf8' },
    { r: 240, w: 1.5, a: 0.22, speed: -0.0025, color: '#60a5fa' },
    { r: 320, w: 1, a: 0.12, speed: 0.0015, color: '#7c3aed' }
  ];
  const ringAngles = rings.map(() => Math.random() * Math.PI * 2);
  
  // Particules
  const particles = [];
  for (let i = 0; i < 120; i++) {
    particles.push({
      x: (Math.random() - 0.5) * 800,
      y: (Math.random() - 0.5) * 500,
      z: Math.random() * 350,
      size: 1 + Math.random() * 2.5,
      alpha: 0.2 + Math.random() * 0.5,
      speedX: (Math.random() - 0.5) * 0.2,
      speedY: (Math.random() - 0.5) * 0.15
    });
  }
  
  // Étoiles
  const stars = [];
  for (let i = 0; i < 250; i++) {
    stars.push({
      x: (Math.random() - 0.5) * 1000,
      y: (Math.random() - 0.5) * 700,
      r: 0.5 + Math.random() * 1.5,
      alpha: 0.3 + Math.random() * 0.6,
      twinkle: Math.random() * Math.PI * 2,
      twinkleSpeed: 0.003 + Math.random() * 0.012
    });
  }
  
  function drawRings(x, y) {
    rings.forEach((ring, i) => {
      ringAngles[i] += ring.speed;
      ctx.save();
      ctx.translate(x, y);
      ctx.rotate(ringAngles[i]);
      ctx.scale(1, 0.35 + i * 0.03);
      ctx.beginPath();
      ctx.arc(0, 0, ring.r, 0, Math.PI * 2);
      ctx.strokeStyle = ring.color + Math.round(ring.a * 200).toString(16).padStart(2, '0');
      ctx.lineWidth = ring.w;
      ctx.shadowBlur = ring.w * 3;
      ctx.shadowColor = ring.color;
      ctx.stroke();
      ctx.restore();
    });
  }
  
  function drawParticles(x, y) {
    particles.forEach(p => {
      p.x += p.speedX;
      p.y += p.speedY;
      if (p.x > 500) p.x = -500;
      if (p.x < -500) p.x = 500;
      if (p.y > 350) p.y = -350;
      if (p.y < -350) p.y = 350;
      
      const perspective = 380 / (380 + p.z);
      const px = (p.x + Math.sin(time * 0.002) * 15) * perspective + x;
      const py = (p.y + Math.cos(time * 0.003) * 10) * perspective + y - scrollY * 0.06;
      
      ctx.beginPath();
      ctx.arc(px, py, p.size * perspective * 0.8, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(100, 150, 255, ${p.alpha * 0.5})`;
      ctx.fill();
    });
  }
  
  function drawStars() {
    stars.forEach(s => {
      const twinkle = 0.5 + Math.sin(time * s.twinkleSpeed + s.twinkle) * 0.3;
      const x = ((s.x + W * 2) % (W + 500)) - 250;
      const y = ((s.y + H * 2) % (H + 500)) - 250;
      ctx.beginPath();
      ctx.arc(x, y, s.r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(200, 220, 255, ${s.alpha * twinkle * 0.6})`;
      ctx.fill();
    });
  }
  
  function draw() {
    time++;
    scrollY += (targetScrollY - scrollY) * 0.1;
    ctx.clearRect(0, 0, W, H);
    
    const grad = ctx.createLinearGradient(0, 0, 0, H);
    grad.addColorStop(0, '#04020e');
    grad.addColorStop(0.5, '#060b18');
    grad.addColorStop(1, '#030610');
    ctx.fillStyle = grad;
    ctx.fillRect(0, 0, W, H);
    
    drawStars();
    
    let centerXPos = centerX;
    let centerYPos = centerY - scrollY * 0.08;
    if (mouse.active) {
      centerXPos += (mouse.x - centerX) * 0.08;
      centerYPos += (mouse.y - centerY) * 0.06;
    }
    
    drawRings(centerXPos, centerYPos);
    drawParticles(centerXPos, centerYPos);
    
    requestAnimationFrame(draw);
  }
  draw();
})();

// Interactions souris sur cartes
document.addEventListener('mousemove', e => {
  document.querySelectorAll('.atelier').forEach(el => {
    const rect = el.getBoundingClientRect();
    el.style.setProperty('--mx', ((e.clientX - rect.left) / rect.width * 100) + '%');
    el.style.setProperty('--my', ((e.clientY - rect.top) / rect.height * 100) + '%');
  });
});

// Scroll Progress & Nav
const prog = document.getElementById('scrollProgress');
const navEl = document.getElementById('mainNav');
const scrollTopBtn = document.getElementById('scrollTop');
window.addEventListener('scroll', () => {
  const total = document.body.scrollHeight - window.innerHeight;
  prog.style.width = (window.scrollY / total * 100) + '%';
  navEl.classList.toggle('scrolled', window.scrollY > 60);
  scrollTopBtn.classList.toggle('visible', window.scrollY > 300);
});

// Greeting Animation
const GREETING = 'Bonjour, je suis';
const gwEl = document.getElementById('greetingWrap');
const allChars = [];
GREETING.split(' ').forEach(word => {
  const wDiv = document.createElement('span'); wDiv.className = 'g-word';
  word.split('').forEach(ch => { const s = document.createElement('span'); s.className = 'g-char'; s.textContent = ch; wDiv.appendChild(s); allChars.push(s); });
  gwEl.appendChild(wDiv); gwEl.appendChild(document.createTextNode(' '));
});
allChars.forEach((c, i) => { setTimeout(() => { c.classList.add('visible'); c.style.transform = 'translateY(-6px)'; setTimeout(() => c.style.transform = '', 150); }, 400 + i * 55); });
gwEl.addEventListener('mouseover', e => { if (e.target.classList.contains('g-char')) { const idx = allChars.indexOf(e.target); allChars.forEach((c, i) => { const d = Math.abs(i - idx); if (d <= 2) setTimeout(() => { c.style.transform = `translateY(${-6 + d*2}px) scale(${1.1 - d*0.03})`; setTimeout(() => c.style.transform = '', 300); }, d * 40); }); } });

// Counters
function animateCounter(el) { const target = +el.dataset.target; let current = 0; const inc = target / 80; const timer = setInterval(() => { current += inc; if (current >= target) { current = target; clearInterval(timer); } el.textContent = Math.floor(current) + (target === 160 ? '+' : ''); }, 16); }
const counterObs = new IntersectionObserver(entries => { entries.forEach(e => { if (e.isIntersecting) { animateCounter(e.target); counterObs.unobserve(e.target); } }); }, { threshold: 0.5 });
document.querySelectorAll('.counter').forEach(c => counterObs.observe(c));

// Reveal animations
const revealObs = new IntersectionObserver(entries => { entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in-view'); revealObs.unobserve(e.target); } }); }, { threshold: 0.15 });
document.querySelectorAll('.reveal, .about-title, .about-left, .about-right, .section-title').forEach(el => revealObs.observe(el));

// Contact modal
function openContactModal() { document.getElementById('contactModal').classList.add('open'); }
function closeContactModal() { document.getElementById('contactModal').classList.remove('open'); }
function contactOverlayClick(e) { if (e.target.id === 'contactModal') closeContactModal(); }

// Ateliers et exercices
const ATELIERS = 20, EXERCICES_PAR_ATELIER = 8;
let currentKey = '';
const extIcon = `<svg viewBox="0 0 12 12" fill="none" width="10" height="10"><path d="M7 1h4v4M11 1L5.5 6.5M5 2H2a1 1 0 00-1 1v7a1 1 0 001 1h7a1 1 0 001-1V8" stroke="currentColor" stroke-width="1.4"/></svg>`;
const gridContainer = document.getElementById('atelierGrid');
for (let i = 1; i <= ATELIERS; i++) { const name = 'Atelier ' + i; const d = document.createElement('div'); d.className = 'atelier'; d.textContent = name; d.onclick = e => { const rect = d.getBoundingClientRect(); const rip = document.createElement('span'); rip.className = 'ripple'; const size = Math.max(d.offsetWidth, d.offsetHeight) * 2; rip.style.cssText = `width:${size}px;height:${size}px;left:${e.clientX - rect.left - size/2}px;top:${e.clientY - rect.top - size/2}px;`; d.appendChild(rip); setTimeout(() => rip.remove(), 700); openAtelier(name); }; gridContainer.appendChild(d); }
function openAtelier(name) { const box = document.getElementById('exercices'); box.innerHTML = '<h3>' + name + '</h3>'; for (let j = 1; j <= EXERCICES_PAR_ATELIER; j++) { const exName = 'Exercice ' + j; const key = name + '_' + exName; const tpLink = localStorage.getItem(key + '_tp') || ''; const rapportLink = localStorage.getItem(key + '_rapport') || ''; const card = document.createElement('div'); card.className = 'exercice-card'; card.dataset.key = key; card.innerHTML = `<div class="exercice-label">${exName}</div><div class="exercice-links"><a class="link-btn link-tp" ${tpLink ? 'href="' + tpLink + '" target="_blank"' : 'href="#"'} onclick="handleLinkClick(event,'${key}','tp')">${extIcon} TP</a><a class="link-btn link-rapport" ${rapportLink ? 'href="' + rapportLink + '" target="_blank"' : 'href="#"'} onclick="handleLinkClick(event,'${key}','rapport')">${extIcon} Rapport</a></div>`; box.appendChild(card); setTimeout(() => card.classList.add('show'), j * 50); } box.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
function handleLinkClick(e, key, type) { const link = localStorage.getItem(key + '_' + type); if (!link) { e.preventDefault(); openModal(key); } }
function openModal(key) { currentKey = key; const parts = key.split('_'); document.getElementById('modalTitle').textContent = parts[0] + ' ' + parts[1]; document.getElementById('modal').style.display = 'block'; document.getElementById('tpLink').value = localStorage.getItem(key + '_tp') || ''; document.getElementById('rapportLink').value = localStorage.getItem(key + '_rapport') || ''; }
function saveData() { const tp = document.getElementById('tpLink').value.trim(); const rapport = document.getElementById('rapportLink').value.trim(); if (tp) localStorage.setItem(currentKey + '_tp', tp); else localStorage.removeItem(currentKey + '_tp'); if (rapport) localStorage.setItem(currentKey + '_rapport', rapport); else localStorage.removeItem(currentKey + '_rapport'); const card = document.querySelector('[data-key="' + currentKey + '"]'); if (card) { const links = card.querySelectorAll('.link-btn'); if (tp) { links[0].href = tp; links[0].target = '_blank'; links[0].onclick = null; } else { links[0].href = '#'; links[0].onclick = e => handleLinkClick(e, currentKey, 'tp'); } if (rapport) { links[1].href = rapport; links[1].target = '_blank'; links[1].onclick = null; } else { links[1].href = '#'; links[1].onclick = e => handleLinkClick(e, currentKey, 'rapport'); } } closeModal(); }
function deleteData() { localStorage.removeItem(currentKey + '_tp'); localStorage.removeItem(currentKey + '_rapport'); document.getElementById('tpLink').value = ''; document.getElementById('rapportLink').value = ''; }
function openModalLink(type) { const link = localStorage.getItem(currentKey + '_' + type); if (link) window.open(link, '_blank'); }
function closeModal() { document.getElementById('modal').style.display = 'none'; }
function outsideClick(e) { if (e.target.id === 'modal') closeModal(); }
const atelierObserver = new IntersectionObserver(entries => { entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('show'); atelierObserver.unobserve(e.target); } }); }, { threshold: 0.05 });
document.querySelectorAll('.atelier').forEach(el => atelierObserver.observe(el));
</script>
</body>
</html>