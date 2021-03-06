<?php 
ob_start();
session_start();
error_reporting(1);
?> 
<!DOCTYPE html>
<html lang="tr">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <link rel="stylesheet" href="./css/w3.css">
   <link rel="stylesheet" href="./css/font-awesome.min.css">
   <link rel="stylesheet" href="./css/Theme.css">
   <link rel="stylesheet" href="./css/twilight.css">
   <link rel="stylesheet" href="./css/css2.css">
   <link rel="stylesheet" href="./css/style.css">
   <title>site</title>
</head>

<body>
   <div class="container">
      <label class="mode-control">
         <input type="checkbox" id="mode-btn">
         <span><i class="fas fa-moon"></i></span>
         <span><i class="fas fa-sun"></i></span>
      </label>
      <script src="./js/theme.js"></script>
      <div class="header">
         <div class="title" style="display: none;">
            www.sitename.com or cookie permission
         </div>
         <div class="headercont">
            <div class="logo">
               <img loading="lazy" src="./img/827-300x300-grayscale.jpg" alt="err">
            </div>
            <div class="menu">
               <li>
                  <a href="#">home</a>
               </li>
               <li>
                  <a href="#">home</a>
               </li>
               <li>
                  <a href="#">home</a>
               </li>
               <li>
                  <a href="#">home</a>
               </li>
               <li>
                  <a href="#">home</a>
               </li>
            </div>
         </div>
      </div>
      <div class="content">
         <div class="contentcont">
            <div class="left">&nbsp;left&nbsp;</div>
            <div class="center">
               <div class="textcont">

                  
                  <div class="textdiv ">
                     <div class="textquote">
                        <i class="fas quoteicon"></i>
                        <blockquote class="">Gençleri bozmanın en kestirme yolu farklı düşünenlere değil benzer
                           düşünenlere değer vermelerini öğretmektir.</blockquote>
                        <i class="quoteauthor">Friedrich Nietzsche</i>
                     </div>
                     <div class="texttitle">
                        <a href="#">ISTANBUL ONE HUNDRED YEARS AGO, 1920. ISTANBUL'S OCCUPATIONAL YEARS</a>
                     </div>
                     <div class="textinfo">
                        <span class="dateicon">
                           <i class="fas fa-calendar-alt" style="margin-right: 5px;"></i>
                        </span>
                        <span class="date">1920</span>
                        <div style="display: inline-block;">  </div>
                        <span class="authoricon">
                           <i class="fas fa-feather-alt" style="margin-right: 5px;"></i>
                        </span>
                        <span class="author">Ahmet Kaya</span>
                     </div>
                     <div class="textvideo">
                        <iframe src="https://www.youtube.com/embed/kD9r0_kQRTU" frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen></iframe>
                     </div>
                     <div class="textimg ">
                        <img loading="lazy" src="./img/istanbulayasofya.jpg" alt="ERR">
                     </div>
                     <div class="textp fletter shortp">
                        <p>
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia sequi
                           officiis dicta ab aliquid iste id itaque numquam, possimus qui? Explicabo cupiditate
                           tempora sit excepturi at et ex!
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate fugiat
                           voluptates illum aspernatur quos doloribus iste temporibus ex, quia asperiores
                           facere sint ut. Consectetur, omnis? Aut, veritatis est. Maiores, porro.
                        </p>
                     </div>
                     <!-- Markdown Monster Content -->
                     <div class="textcode">
                        <pre id="MainContent" class="MainContent" style="border: 2px solid #555; border-radius: 0;">
         <code class="language-js" id="maincode" style="background-color: rgba(12, 12, 12, 0.7); ">
const limit = 400;
window.onload = function setparagrahps() {
    var allparags = document.getElementsByClassName('shortp');
    for (var i = 0; i < allparags.length; i++) {
        var paragtext = allparags[i].textContent;
        paragtext = paragtext.trim();
        if (paragtext.length >= limit) {
            paragtext = paragtext.substring(0, limit);
            allparags[i].innerHTML = ("<p>" + paragtext + "<b>..</b></p>");
        }
    };
}
	</code> 
	</pre> <!-- End Markdown Monster Content -->
                     </div>


                     <div class="textp">
                        <p>
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia sequi
                           officiis dicta ab aliquid iste id itaque numquam, possimus qui? Explicabo cupiditate
                           tempora sit excepturi at et ex!

                        </p>
                     </div>
                     <button class="textbtn">
                        Read more
                     </button>
                  </div>
               </div>
               <div class="divhr"></div>



               <div class="textcont ">
                  <div class="textdiv">
                     <div class="texttitle">
                        <a href="#">2 'Almost' before we knew it, we had left the ground.</a>
                     </div>
                     <div class="textinfo">
                        <span class="dateicon">
                           <i class="fas fa-calendar-alt" style="margin-right: 5px;"></i>
                        </span>
                        <span class="date"></span>
                        <span class="authoricon">
                           <i class="fas fa-feather-alt" style="margin-right: 5px;"></i>
                        </span>
                        <span class="author"></span>
                     </div>
                     <div class="textvideo displayno">
                        <iframe src=""
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen></iframe>
                     </div>
                     <div class="textimg displayno">
                        <img loading="lazy" src="./img/istanbulkizkulesi.jpg" alt="ERR">
                     </div>
                     <div class="textp ">
                        <p>
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia sequi
                           officiis dicta ab aliquid iste id itaque numquam, possimus qui? Explicabo cupiditate
                           tempora sit excepturi at et ex!

                        </p>
                     </div>
                     <!-- Markdown Monster Content -->
                     <div class="textcode">
                        <pre id="MainContent" class="MainContent" style="border: 2px solid #555; border-radius: 0;">
         <code class="language-css" id="maincode" style="background-color: rgba(12, 12, 12, 0.7); ">

.divhr {
    border-top: 5px solid $black;
    width: 90%;
    display: block;
    height: 1px;
    transition: 300ms all;
    -webkit-transition: 300ms all;
    -moz-transition: 300ms all;
    -ms-transition: 300ms all;
    -o-transition: 300ms all;
    margin: 15px auto 30px auto;
}
body.dark .divhr {
    border-top-color: #f1f1f1;
}
	</code> 
	</pre> <!-- End Markdown Monster Content -->
                     </div>

                     <div class="textp ">
                        <p>
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia sequi
                           officiis dicta ab aliquid iste id itaque numquam, possimus qui? Explicabo cupiditate
                           tempora sit excepturi at et ex!
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id reiciendis voluptates
                           atque laudantium, omnis repudiandae qui eum minima. Officiis itaque enim asperiores
                           atque corporis. Cupiditate, voluptas? Aspernatur at deleniti aut.
                        </p>
                     </div>
                     <button class="textbtn">
                        Read more
                     </button>
                  </div>
               </div>

               <div class="textcont">
                  <div class="textdiv">
                     <div class="texttitle">
                        <a href="#">EN SEVDİKLERİM</a>
                     </div>
                     <div class="textinfo">
                        <span class="dateicon">
                           <i class="fas fa-calendar-alt" style="margin-right: 5px;"></i>
                        </span>
                        <span class="date"></span>
                        <span class="authoricon">
                           <i class="fas fa-feather-alt" style="margin-right: 5px;"></i>
                        </span>
                        <span class="author"></span>
                     </div>
                     <div class="textquote">
                        <i class="fas quoteicon"></i>
                        <blockquote class="pre">Sende başını alıp gitme ne olur. Ne olur tut ellerimi
Hayatta hiçbir şeyim az olmadı senin kadar
Hiçbir şeyi istemedim seni istediğim kadar
Sende başını alıp gitme ne olur. Ne olur tut ellerimi
Hayatta hiçbir şeyim az olmadı senin kadar

Hiçbir şeyi istemedim seni istediğim kadar
Sende başını alıp gitme ne olur. Ne olur tut ellerimi
Ne olur, ne olur..</blockquote>
                        <i class="quoteauthor">Cem Karaca</i>
                     </div>
                     <div class="textvideo">
                        <iframe src="https://www.youtube.com/embed/TXzO1FT6OVs" frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen></iframe>
                     </div>
                     <div class="textimg displayno">
                        <img loading="lazy" src="./img/istanbulkizkulesi.jpg" alt="ERR">
                     </div>
                     <div class="textp ">
                        <p>
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia sequi
                           officiis dicta ab aliquid iste id itaque numquam, possimus qui? Explicabo cupiditate
                           tempora sit excepturi at et ex!

                        </p>
                     </div>
                     <!-- Markdown Monster Content -->
                     <div class="textcode displayno">
                        <pre id="MainContent" class="MainContent" style="border: 2px solid #555; border-radius: 0;">
         <code class="language-css" id="maincode" style="background-color: rgba(12, 12, 12, 0.7); ">

.divhr {
    border-top: 5px solid $black;
    width: 90%;
    display: block;
    height: 1px;
    transition: 300ms all;
    -webkit-transition: 300ms all;
    -moz-transition: 300ms all;
    -ms-transition: 300ms all;
    -o-transition: 300ms all;
    margin: 15px auto 30px auto;
}
body.dark .divhr {
    border-top-color: #f1f1f1;
}
	</code> 
	</pre> <!-- End Markdown Monster Content -->
                     </div>

                     <div class="textp ">
                        <p>
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia sequi
                           officiis dicta ab aliquid iste id itaque numquam, possimus qui? Explicabo cupiditate
                           tempora sit excepturi at et ex!
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id reiciendis voluptates
                           atque laudantium, omnis repudiandae qui eum minima. Officiis itaque enim asperiores
                           atque corporis. Cupiditate, voluptas? Aspernatur at deleniti aut.
                        </p>
                     </div>
                     <button class="textbtn">
                        Read more
                     </button>
                  </div>
               </div>
            </div>

            <div class="right">

            </div>
         </div>
         <div class="footer displayno">footer</div>
      </div>
   </div>
   <i onclick="topFunction()" id="gotopbtn" title="Go to top" class="fas fa-arrow-up"></i>
   <script>
      let allcodetags = document.getElementsByTagName('code');
      for (var a = 0; a < allcodetags.length; a++)
         allcodetags[a].innerHTML = allcodetags[a].textContent.trim();

      let allblockquotes = document.getElementsByTagName('blockquote');
      for (var j = 0; j < allblockquotes.length; j++)
         allblockquotes[j].innerHTML = allblockquotes[j].textContent.trim();
   </script>
   <script src="./js/w3codecolor.js"></script>
   <script>w3CodeColor();</script>
   <script src="./js/index.js"></script>
   <script src="./js/jqueryslim.min.js"></script>
   <script src="./js/highlight.pack.js"></script>
   <script src="./js/preview.js"></script>
   <script src="./js/fontawesome.js"></script>
   <script>

   </script>
   <script>

   </script>
</body>

</html>