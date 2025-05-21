<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@funkynutmeg - Linktree Clone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

  <style>
  
    @import url('https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

    
    body {
      background-color: #888888; /* Matches the gray tone */
      color: white;
      text-align: center;
      font-family: 'Karla', sans-serif;
      font-weight: bold;
    }
    .profile-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin: 20px auto 10px;
    }
    .username {
      font-weight: 700;
      font-size: 20px;
      line-height: 30px; 
    }
    .bio {
      font-size: 1rem;
      margin-bottom: 30px;
    }
    .link-box {
    background-color: rgba(255, 255, 255, 0.05); /* Box abu-abu tipis awal */
    border: 2px solid white;
    border-radius: 10px;
    padding: 10px;
    margin: 15px auto;
    width: 100%;
    max-width: 580px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: all 0.3s ease, color 0.3s ease;
    color: #888888;
    }

    .link-box:hover {
    background-color: white ; /* More visible on hover */
    color: #888888; /* Reveal text on hover */
    }

    .link-img {
    width: 45px;
    height: 45px;
    object-fit: cover;
    border-radius: 4px;
    margin-right: 15px;
    flex-shrink: 0;
    }

    .link-text {
    width: 100%;
    font-weight: 500;         /* ini yang mengubah ketebalan font */
    font-size: 16px;
    line-height: 24px;        /* sesuai gambar */
    transition: color 0.3s ease;
    }


    /* Optional: keep it invisible until hover */
    .link-box .link-text {
    color: transparent;
    }

    .link-box:hover .link-text {
    color: #888888;
    }
    
    .link-box.expanded {
    max-width: 580px; /* Box melebar ketika diklik */
    }
    
    .footer-note {
      margin-top: 40px;
      font-size: 0.9rem;
    }

    .yt-embed {
      width: 100%;
      height: 100%;
      max-width: 580px;
      border: none;
      border-radius: 10px;
      display: none; /* Disembunyikan saat awal */
      transition: all 0.3s ease;
    }

    .video-container {
      width: 100%;
      max-width: 580px;
      position: relative;
      opacity: 0;
      height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
      margin: 0 auto; /* Center the video container */
    }

    .link-box.expanded .video-container {
      opacity: 1;
      height: calc(580px * 9/16); /* 16:9 aspect ratio based on 580px width */
    }

    /* Hide thumbnail and text when expanded */
    .link-box.expanded .link-img,
    .link-box.expanded .link-text {
      display: none;
    }

    .link-box.expanded .yt-embed {
      display: block;
    }

    .close-btn {
      display: none;
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(0, 0, 0, 0.7);
      color: white;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      font-size: 20px;
      cursor: pointer;
      z-index: 10;
    }

    .link-box.expanded .close-btn {
      display: block;
    }

    .close-btn:hover {
      background: rgba(255, 0, 0, 0.7);
    }

  </style>
</head>
<body>

  <!-- Profile -->

  <div class="container">
    <img src="funkynnutmeg_profil.webp" alt="Profile" class="profile-img" style="width: 96px; height: 96px;"
    role="presentation"
    data-testid="ProfileImage"
    crossorigin="anonymous">
    <div class="username">@funkynutmeg</div>
    <div class="bio">你好 ~ 我是白欣</div>

    <!-- Links -->
       
    <a href="#" class="link-box text-decoration-none" onclick="toggleVideo(event)">
      <img src="menu1.webp" alt="Link 1" class="link-img">
      <div class="link-text">pale limbs [mv]</div>
      <div class="video-container">
        <iframe
          class="yt-embed"
          src=""
          allow="autoplay; encrypted-media"
          allowfullscreen
        ></iframe>
        <button class="close-btn" onclick="closeVideo(event)">×</button>
      </div>
    </a>
    

      <a href="https://www.youtube.com/watch?si=sJFp_S3YLnTufZjH&v=yQOtheS8Xg8&feature=youtu.be" target="blank" class="link-box text-decoration-none">
        <img src="menu4.webp" alt="Link 1" class="link-img">
        <div class="link-text">ceramic cat [official mv]</div>
      </a>

      <a href="https://www.twitch.tv/clairbai" target="blank" class="link-box text-decoration-none">
        <img src="menu6.webp" alt= "link 2" class="link-img">
        <div class="link-text">twitch ˚₊·—̳͟͞͞♡</div>
      </a>

      <a href="https://soundcloud.com/clairbai" target="blank" class="link-box text-decoration-none">
        <img src="menu7.webp" alt="#Link 3" class="link-img">
        <div class="link-text">✰⁎ soundcloud ⁎✰</div>
      </a>

      <a href="https://www.youtube.com/watch?v=jtRt6nAtWSY" target="blank" class="link-box text-decoration-none">
        <img src="menu8.webp" alt= "Link 4" class="link-img">
        <div class="link-text">CLAIR - Clairway [official mv]</div>
      </a>

      <a href="#" class="link-box text-decoration-none">
        <img src="menu9.webp" alt="Link 1" class="link-img">
        <div class="link-text">NTS RADIO 🎧 Eastern Margins w/ CLAIR</div>
      </a>

      <a href="https://clairbai.bandcamp.com/album/movie" target="blank" class="link-box text-decoration-none">
        <img src="menu12.webp" alt="Link 5" class="link-img">
        <div class="link-text">╬ bandcamp ╬</div>
      </a>

      <a href="https://www.tiktok.com/@clairbai" target="blank" class="link-box text-decoration-none">
        <img src="menu12.webp" alt= "Link 6" class="link-img">
        <div class="link-text">*⃝̣◌◦°tiktokˋॢ°◦*⃝̣</div>
      </a>

    <!-- Footer -->
    <div class="footer-note">
      <i class="fas fa-link"></i> linktr.ee/you
    </div>
  </div>

  <script>
    function toggleVideo(event) {
      event.preventDefault();
      const linkBox = event.currentTarget;
      const iframe = linkBox.querySelector('.yt-embed');
    
      if (!linkBox.classList.contains('expanded')) {
        linkBox.classList.add('expanded');
        iframe.src = "https://www.youtube.com/embed/YWws9SPJrak?autoplay=1&mute=1&playsinline=1&modestbranding=1";
      } else {
        iframe.src = "";
        linkBox.classList.remove('expanded');
      }
    }

    function toggleVideo(event) {
      event.preventDefault();
      const linkBox = event.currentTarget;
      const iframe = linkBox.querySelector('.yt-embed');

      if (!linkBox.classList.contains('expanded')) {
        linkBox.classList.add('expanded');
        iframe.src = "https://www.youtube.com/embed/YWws9SPJrak?autoplay=1&mute=1&playsinline=1&modestbranding=1";
      }
    }

    function closeVideo(event) {
      event.stopPropagation();
      const linkBox = event.currentTarget.closest('.link-box');
      const iframe = linkBox.querySelector('.yt-embed');
      
      iframe.src = "";
      linkBox.classList.remove('expanded');
    }
    </script>
    
  

</body>
</html>
