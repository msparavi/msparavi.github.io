
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mostak Shahariya Paravi</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

    <style>

        /* --- BASE STYLES --- */

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {

            font-family: 'Poppins', sans-serif;

            background: #0f172a;

            color: #ffffff;

            min-height: 100vh;

            display: flex;

            justify-content: center;

            padding: 20px;

            overflow-x: hidden;

        }
        ::plceholder {
    color: #94a3b8;
    opacity: 1;
       }

        /* --- BACKGROUND --- */

        .bg-shape { position: fixed; border-radius: 50%; filter: blur(80px); z-index: -1; opacity: 0.3; }

        .shape-1 { width: 300px; height: 300px; background: #6366f1; top: -50px; left: -50px; }

        .shape-2 { width: 250px; height: 250px; background: #ec4899; bottom: -50px; right: -50px; }

        /* --- CONTAINER --- */

        .container {

            width: 100%;

            max-width: 500px;

            background: rgba(255, 255, 255, 0.03);

            backdrop-filter: blur(15px);

            border: 1px solid rgba(255, 255, 255, 0.1);

            border-radius: 25px;

            padding: 30px 20px;

            box-shadow: 0 20px 40px rgba(0,0,0,0.4);

            animation: slideUp 0.8s ease-out;

        }

        header { text-align: center; margin-bottom: 30px; }

        .profile-img {

            width: 110px; height: 110px; border-radius: 50%;

            border: 3px solid #0088cc;

            padding: 4px; margin-bottom: 15px;

            box-shadow: 0 0 15px rgba(0, 136, 204, 0.4);

        }

        h1 { font-size: 1.8rem; font-weight: 700; margin-bottom: 5px; }

        .typing-text { font-size: 1rem; color: #a5b4fc; min-height: 1.5em; }

        .typing-text::after { content: "|"; animation: blink 0.7s infinite; }

        .section-title {

            font-size: 1.3rem; margin: 30px 0 15px; font-weight: 700;

            color: #e2e8f0; border-left: 4px solid #0088cc; padding-left: 12px;

        }

        .card {

            background: rgba(255, 255, 255, 0.05);

            border: 1px solid rgba(255, 255, 255, 0.1);

            padding: 20px; border-radius: 18px; margin-bottom: 15px;

        }

        .card h3 { font-size: 1.1rem; margin-bottom: 8px; }

        .card p { font-size: 0.85rem; color: #94a3b8; }

        .skill-tag {

            display: inline-block; background: rgba(0, 136, 204, 0.15);

            color: #7dd3fc; padding: 4px 10px; border-radius: 20px;

            font-size: 0.75rem; margin: 5px 3px 0 0; font-weight: 600;

        }

        .telegram-float {

            display: flex; align-items: center; justify-content: center;

            background: #0088cc; color: white; text-decoration: none;

            padding: 12px; border-radius: 15px; font-weight: 700;

            margin-bottom: 30px; gap: 10px;

        }

        .contact-box { background: rgba(255, 255, 255, 0.02); border-radius: 15px; padding: 20px; }

        .input-group { margin-bottom: 15px; }

        label { font-size: 0.8rem; color: #0088cc; font-weight: 600; margin-bottom: 5px; display:block; }

        input, textarea {

            width: 100%; background: rgba(255, 255, 255, 0.05);

            border: 1px solid rgba(255, 255, 255, 0.1);

            border-radius: 10px; padding: 12px; color: #fff;

        }

        .send-btn {

            width: 100%; background: linear-gradient(90deg, #0088cc, #00c6ff);

            color: #fff; border: none; padding: 15px; border-radius: 12px;

            font-weight: 700; cursor: pointer; display: flex;

            align-items: center; justify-content: center; gap: 10px;

        }

        @keyframes blink { 50% { opacity: 0; } }

        @keyframes slideUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

        .rocket-launch { animation: launch 0.8s forwards; }

        @keyframes launch { 100% { transform: translateX(400px) translateY(-100px); opacity: 0; } }
                                                     ::placeholder {
    color: #94a3b8;
    opacity: 1;
     }

    </style>

</head>

<body>

<div class="bg-shape shape-1"></div>

<div class="bg-shape shape-2"></div>

<div class="container">

<header>

    <img src="https://iili.io/f8OePun.jpg" class="profile-img">

    <h1>Mostak Shahariya Paravi</h1>

    <div class="typing-text" id="typewriter"></div>

</header>

<a href="https://t.me/MsParavi" target="_blank" class="telegram-float">

    <i class="fab fa-telegram-plane"></i> Message on Telegram

</a>

<h2 class="section-title">Who Am I?</h2>

<div class="card">

    <p>I am a passionate student who loves learning modern web technologies. I enjoy building clean, smooth and interactive websites while exploring Bot development and API integration.</p>

</div>

<h2 class="section-title">My Arsenal</h2>

<div id="skillsContainer"></div>

<h2 class="section-title">Contact Me</h2>

<div class="contact-box">

    <div class="input-group">

        <label>Subject</label>

        <input type="text" id="subj" placeholder="Enter Subject" >

    </div>

    <div class="input-group">

        <label>Message</label>

        <textarea id="msg" rows="3"  placeholder="Enter Message"></textarea>

    </div>

    <button class="send-btn" id="sBtn" onclick="sendMail()">

        <span id="stxt">Send Rocket Message</span>

        <i class="fas fa-paper-plane"></i>

    </button>

</div>

</div>

<script>

/* ================= CONFIG ================= */

const BOT_TOKEN = "8502652096:AAF3hRc8cRpf00T7Twouut4n56or86LhXds";

const CHAT_ID  = "6536476875";

const config = {

    tags: ["Web Maker", "Student Developer", "Bot Enthusiast", "API Learner"],

    skills: [

        { title: "Web Making", desc: "Building responsive websites with clean UI.", tags: ["HTML5", "CSS3", "JS"] },

        { title: "Bot Dev", desc: "Automating tasks via Telegram bots.", tags: ["Telegram", "Logic"] },

        { title: "API Learner", desc: "Fetching and managing data efficiently.", tags: ["JSON", "REST"] }

    ]

};

/* ================= VISIT NOTIFICATION ================= */

fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, {

    method: "POST",

    headers: { "Content-Type": "application/json" },

    body: JSON.stringify({

        chat_id: CHAT_ID,

        text: "👀 New user visited on your website"

    })

});

/* ================= TYPING EFFECT ================= */

const tw = document.getElementById('typewriter');

let tIdx = 0, cIdx = 0, del = false;

function type() {

    const tag = config.tags[tIdx];

    tw.textContent = del ? tag.substring(0, cIdx--) : tag.substring(0, cIdx++);

    if (!del && cIdx > tag.length) { del = true; setTimeout(type, 1500); }

    else if (del && cIdx === 0) { del = false; tIdx = (tIdx + 1) % config.tags.length; setTimeout(type, 500); }

    else { setTimeout(type, del ? 50 : 100); }

}

type();

/* ================= SKILLS ================= */

const sc = document.getElementById('skillsContainer');

config.skills.forEach(s => {

    sc.innerHTML += `

    <div class="card" data-tilt>

        <h3>${s.title}</h3>

        <p>${s.desc}</p>

        <div>${s.tags.map(t=>`<span class="skill-tag">${t}</span>`).join('')}</div>

    </div>`;

});

VanillaTilt.init(document.querySelectorAll("[data-tilt]"), { max: 10, speed: 400 });

/* ================= SEND MESSAGE (TELEGRAM) ================= */

function sendMail() {

    const s = subj.value.trim();

    const m = msg.value.trim();

    const b = sBtn;

    if(!s || !m) return alert("Fill all fields!");

    stxt.innerText = "Launching...";

    b.classList.add('rocket-launch');

    fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, {

        method: "POST",

        headers: { "Content-Type": "application/json" },

        body: JSON.stringify({

            chat_id: CHAT_ID,

            text: `🚀 New Contact Message\n\n📌 Subject: ${s}\n💬 Message: ${m}`

        })

    }).then(() => {

        alert("✅ Message sent to Telegram");

        subj.value = msg.value = "";

        stxt.innerText = "Send Rocket Message";

        b.classList.remove('rocket-launch');

    });

}

</script>

</body>

</html>
