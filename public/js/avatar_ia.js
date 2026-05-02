// public/js/avatar_ia.js

(function () {

  const MOODS = [
    {
      greeting   : 'Bonjour ! Comment puis-je t\'aider ?',
      headFill   : '#534AB7',
      faceFill   : '#7F77DD',
      eyeRx      : 5,
      eyeRy      : 5.5,
      mouth      : 'M229 200 Q240 210 251 200',
      dot        : '#FAC775',
    },
    {
      greeting   : 'Super de te voir aujourd\'hui !',
      headFill   : '#0F6E56',
      faceFill   : '#1D9E75',
      eyeRx      : 5.5,
      eyeRy      : 6,
      mouth      : 'M226 198 Q240 214 254 198',
      dot        : '#FAC775',
    },
    {
      greeting   : 'Hmm, quelle est ta question ?',
      headFill   : '#993C1D',
      faceFill   : '#D85A30',
      eyeRx      : 4,
      eyeRy      : 4.5,
      mouth      : 'M231 203 Q240 200 249 203',
      dot        : '#EEEDFE',
    },
    {
      greeting   : 'Je suis prêt à tout résoudre !',
      headFill   : '#185FA5',
      faceFill   : '#378ADD',
      eyeRx      : 5,
      eyeRy      : 3.5,
      mouth      : 'M228 201 Q240 212 252 201',
      dot        : '#FAC775',
    },
    {
      greeting   : 'Une nouvelle idée brillante ?',
      headFill   : '#993556',
      faceFill   : '#D4537E',
      eyeRx      : 5.5,
      eyeRy      : 6.2,
      mouth      : 'M227 199 Q240 213 253 199',
      dot        : '#FAC775',
    },
  ];

  const GREETINGS_IDLE = [
    'Bonjour ! Comment puis-je t\'aider ?',
    'Salut ! Pose-moi ta question.',
    'Prêt à t\'accompagner !',
    'Hello depuis le monde de l\'IA !',
    'Que puis-je faire pour toi ?',
  ];

  let moodIdx   = 0;
  let greetIdx  = 0;

  function applyMood(m) {
    const bubble = document.getElementById('avatar-bubble');
    if (!bubble) return;

    bubble.textContent = m.greeting;
    bubble.style.animation = 'none';
    void bubble.offsetWidth;
    bubble.style.animation = 'avatarPopIn 0.4s ease forwards';

    document.getElementById('av-head').setAttribute('fill', m.headFill);
    document.getElementById('av-face').setAttribute('fill', m.faceFill);
    document.getElementById('av-eyl-shape').setAttribute('rx', m.eyeRx);
    document.getElementById('av-eyl-shape').setAttribute('ry', m.eyeRy);
    document.getElementById('av-eyr-shape').setAttribute('rx', m.eyeRx);
    document.getElementById('av-eyr-shape').setAttribute('ry', m.eyeRy);
    document.getElementById('av-mouth').setAttribute('d', m.mouth);
    document.getElementById('av-dot').setAttribute('fill', m.dot);
  }

  window.avatarCycleMode = function () {
    moodIdx = (moodIdx + 1) % MOODS.length;
    applyMood(MOODS[moodIdx]);
  };

  // Idle greeting rotation (only while on mood 0)
  setInterval(function () {
    if (moodIdx !== 0) return;
    greetIdx = (greetIdx + 1) % GREETINGS_IDLE.length;
    const bubble = document.getElementById('avatar-bubble');
    if (!bubble) return;
    bubble.textContent = GREETINGS_IDLE[greetIdx];
    bubble.style.animation = 'none';
    void bubble.offsetWidth;
    bubble.style.animation = 'avatarPopIn 0.4s ease forwards';
  }, 4000);

})();