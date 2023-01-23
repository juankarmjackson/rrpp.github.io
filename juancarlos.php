<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content= "width=device-width, user-scalable=no">
	<meta name="referrer" content="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik&family=Varela+Round&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/0a7198e186.js" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon2.png"/>
    <link rel="stylesheet" href="css/producto.css">
    <title>RRPP | JUAN CARLOS CRUZ</title>
    <style>
        body {
            font-family: "Varela Round";
            
        }

        details {
            margin: 10px;
        }

        details summary{
            background-color: blue;
            color: white;
            border-radius: 30px;
            font-size: 20px;
            padding: 10px;
            
        }

        .stories .storie img{
            background: rgb(255,201,0);
            background: linear-gradient(36deg, rgb(255,201,0) 13%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            border-radius: 50%;
            padding: 3px;
            margin: 2px;

        }

        .storie.empty img {
            background-color: #ccc;
        }

        .storie.active img{
            animation-duration: 1s;
            animation-name: story;
            animation-iteration-count: infinite;
        }

        @keyframes story{
            0%{
                background: linear-gradient(36deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            10%{
                background: linear-gradient(72deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            20%{
                background: linear-gradient(108deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            30%{
                background: linear-gradient(144deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            40%{
                background: linear-gradient(180deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            50%{
                background: linear-gradient(216deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            60%{
                background: linear-gradient(252deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            70%{
                background: linear-gradient(288deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            80%{
                background: linear-gradient(324deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            90%{
                background: linear-gradient(360deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }

            100%{
                background: linear-gradient(396deg, rgb(255,255,255) 0%,rgb(255,255,255) 25%, rgb(255,201,0) 28%, rgb(255,0,95) 73%, rgb(255,9,237) 100%);
            }


        }

        @media (max-width: 650px) {
            .discotecas {
                flex-direction: column!important;
            }
    }
    </style>
</head>
<body>
   <section>
       <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 90%; margin: auto; box-shadow: 0px 0px 10px 6px gainsboro; padding: 10px; text-align: center;">
            <img src="jc.jpg" style="width: 100px;">
            <span>JUAN CARLOS CRUZ - Promotor de Experiencias de Ocio Nocturno</span>
            <span style="font-size: 30px; display: flex; justify-content: center; align-items: center;"><img src="whatsapp.png" style="width: 50px;"><a href="https://wa.me/34611717571">611 71 75 71</a></span>
       </div>
   </section>
   <section style="width: 90%; max-width: 650px; margin: auto;">
        <details>
            <summary>Reservas VIP Discotecas 🎉🥳</summary>
            <a href="https://chat.whatsapp.com/IbRr4WZIuX0CjU1zfGWzV0">Acceder Ahora</a>
        </details>
        <details>
            <summary>Grupos Solteros de 18 - 25 años 👯‍♂️</summary>
            <a href="https://chat.whatsapp.com/IbRr4WZIuX0CjU1zfGWzV0">Acceder Ahora</a>
        </details>
        <details>
            <summary>Grupos Solteros de 25 - 30 años 👯‍♂️</summary>
            <a href="https://chat.whatsapp.com/IbRr4WZIuX0CjU1zfGWzV0">Acceder Ahora</a>
        </details>
   </section>
   <section class="stories" style="display: flex; justify-content: center; align-items: center;">
        <div class="storie" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <img src="samsara.jpg" style="width: 80px;">
            <span>Samsara</span>
        </div>
        <div class="storie" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <img src="fontana.jpg" style="width: 80px;">
            <span>Fontana</span>
        </div>
        <div class="storie" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <img src="cartuja.jpg" style="width: 80px;">
            <span>Cartuja</span>
        </div>
   </section>
   <section class="discotecas" style="display: flex; justify-content: center; align-items: center;">
        <div class="discoteca" style="box-shadow: 0px 0px 10px 6px gainsboro; max-width: 200px; border-radius: 30px; margin: 10px;">
            <img src="samsara.jpg" style="width: 200px; border-radius: 10px 10px 0 0;">
           <div style="max-width: 200px; padding: 10px;">
           <span>Samsara </span><br>
           <span>Precio Estimado: 15€ - 1 Copas</span><br>
           <span>Música: Electrónica / Comercial</span>
           </div>
           <span style="padding: 5px; display: flex; justify-content: center; align-items: center;"><img src="descarga.png" style="width: 30px;"> <a href="https://www.canva.com/design/DAFYg6Fg6mo/q6XWfwbSFa0K6N6t5wc65A/view?utm_content=DAFYg6Fg6mo&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">Descargar Entrada</a></span>
        </div>
        <div class="discoteca" style="box-shadow: 0px 0px 10px 6px gainsboro; max-width: 200px; border-radius: 30px; margin: 10px;">
            <img src="fontana.jpg" style="width: 200px; border-radius: 10px 10px 0 0;">
           <div style="max-width: 200px; padding: 10px;">
           <span>Fontana de Oro 🍻</span><br>
           <span>Precio Estimado: 15€ - 1 Copa</span><br>
           <span>Música: Electrónica / Comercial / Bachata / Salsa / R&B</span>
           </div>
           <span style="padding: 5px; display: flex; justify-content: center; align-items: center;"><img src="descarga.png" style="width: 30px;"> <a href="https://www.canva.com/design/DAFYg6Fg6mo/q6XWfwbSFa0K6N6t5wc65A/view?utm_content=DAFYg6Fg6mo&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">Descargar Entrada</a></span>
        </div>
        <div class="discoteca" style="box-shadow: 0px 0px 10px 6px gainsboro; max-width: 200px; border-radius: 30px; margin: 10px;">
            <img src="cartuja.jpg" style="width: 200px; border-radius: 10px 10px 0 0;">
           <div style="max-width: 200px; padding: 10px;">
           <span>La Cartuja 🌹</span><br>
           <span>Precio Estimado: 15€ - 1 Copas + Chupito de Invitación</span><br>
           <span>Música: Electrónica / Comercial</span>
           </div>
           <span style="padding: 5px; display: flex; justify-content: center; align-items: center;"><img src="descarga.png" style="width: 30px;"> <a href="https://www.canva.com/design/DAFYg6Fg6mo/q6XWfwbSFa0K6N6t5wc65A/view?utm_content=DAFYg6Fg6mo&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">Descargar Entrada</a></span>
        </div>
        
   </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init({
  	duraction: 1000,
  });

  const stories = document.querySelectorAll(".stories .storie");

stories.forEach(story =>{
	story.addEventListener('click', e =>{
	stories.forEach(s => {s.classList.remove('active')});
	if(story.classList.contains('empty')) return false;
	story.classList.add('active');
});
});

// PIXEL
(function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3320566,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

</script>
</body>
</html>
