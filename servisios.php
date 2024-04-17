<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laser graf</title>
    <link rel="stylesheet" href="Css/servicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,900;1,400;1,900&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

*{
margin: 0;
padding: 0;
text-decoration: none;
font-family: 'Times New Roman', Times, serif;
}
html{
font-size: 62.5%;
scroll-padding-top: 6rem;
overflow-x: hidden;
}


body {
font-family: 'Poppins', sans-serif;
}

/Menu/
header{
height: 70px;
margin: 0;
padding: 0;
background: #f8f8f8;
background-size: cover;
position: relative;

}

.inner-width{
max-width: 1000px;
padding: 0 10px;
margin: auto;
position: relative;
}
.logo{
float: left;
width: 20px;
height: 30px;
padding: 0px;
color: #fff;
}

.logo img{
height: 30px;
}

.navigation-menu{
float: right;
display: flex;
align-items: center;
min-height: 90px;
}

.navigation-menu a{
margin-left: 10px;
color: #000;;
text-transform: uppercase;
font-size: 14px;
padding: 12px 20px;
border-radius: 4px;
transition: .3s linear;
}
.navigation-menu a:hover{
background: #36ade5; /Boton del menu/
color: #020202;
transform: scale(1.1);
}

.navigation-menu i{
margin-right: 8px;
font-size: 20px;
}

.home{
color: #fff;
}
a.aj_btn {
background: #2b96d4;
color: #fff;
font-weight: 500;
letter-spacing:2px;
}
a.aj_btn:hover{
background: #ed8977; /Color de sombra del menu/
color: #ffffff;
font-weight: 500;
letter-spacing: 2px;
}
.menu-toggle-btn{
float: right;
height: 90px;
line-height: 90px !important;
color: #fff;
font-size: 26px;
display: none !important;
cursor: pointer;
}
@media screen and (max-width:900px) {
.menu-toggle-btn{
display: block !important;
}

.navigation-menu{
position: fixed;
width: 100%;
max-width: 400px;
background: #172b4d;
top: 90px;
right: 0;
display: none;
padding: 20px 40px;
box-sizing: border-box;
}
.navigation-menu::before{
content: "";
border-left: 10px solid transparent;
border-right: 10px solid transparent;
border-bottom: 10px solid #172b4d;
position: absolute;
top: -10px;
right: 10px;
}

.navigation-menu a{
display: block;
margin: 10px 0;
}

.navigation-menu.active{
display: block;
}
}
/*Final del menu*/

    
    .carousel {
      width: 100%;
      overflow-x: scroll;
      padding: 20px;
      padding-top: 0px; /*Este boton es por el espacio del medio donde están las cartas*/
      position: relative;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    
    .carousel__container {
      white-space: nowrap;
      margin: 50px 0px;
      padding-bottom: 10px;
      display: inline-block;
    }
    
    .categories__title {
     color: rgb(77, 55, 102);
      font-size: 28px;
      position: absolute;
      padding-left: 30px;
      text-align: center;
    }
    .carousel-item {
      width: 200px;
      height: 250px;
      border-radius: 20px;
      background-color: #95bcd6;
      overflow: hidden;
      margin-right: 10px;
      margin-top: 70px;
      display: inline-block;
      cursor: pointer;
      -webkit-transition: 1000ms all;
      transition: 1000ms all;
      -webkit-transform-origin: center left;
      transform-origin: center left;
      position: relative;
    }
    
    .carousel-item:hover ~ .carousel-item {
      -webkit-transform: translate3d(100px, 0, 0);
      transform: translate3d(100px, 0, 0); /*Esto es para cambiar que no se vea delante, si lo quito se ve por detrás*/
    }
    
    .carousel__container:hover .carousel-item:hover {
      -webkit-transform: scale(1.5);  /*Esta parte es para quitar que cuando se seleccione no sea grande*/
      transform: scale(1.5);
      opacity: 1;
    } /*Aquí se quita la forma de la imagen*/
    
    .carousel-item__img {
      width: 200px;
      height: 250px;
      -o-object-fit: cover;
      object-fit: cover;
    }
    
    .carousel-item__details {
      background: -webkit-gradient(
        linear,
        left bottom,
        left top,
        from(rgba(0, 0, 0, 0.9)),
        to(rgba(0, 0, 0, 0))
      ); /*Estos codigos son para mofiicar los botones*/

  
      font-size: 10px;
      opacity: 0;
      -webkit-transition: 450ms opacity;
      transition: 450ms opacity;
      padding: 10px;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    } /*Estos codigos son para mofiicar los botones y el pequeño texto que aparece arriba de la imagen*/

    .carousel-item__details:hover {
      opacity: 1;
    }
  

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.wrapper{
    font-family: 'poppins',sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #fafafa;
}
.wrapper h1{
    font-size: 3em;

    margin: 25px;
}
.content-box{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 1000px;
    margin-top: 30px;
}
.card{
    min-height: 220px;
    width: 320px;
    padding: 30px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #fff;
    margin: 10px 4px;
    box-shadow: 0px 15px 30px rgba(0,0,0,0.2);
}
.card i{
    margin: 20px;
    color: #581ed6;
}
.card h2{
    margin-bottom: 12px;
    font-weight: 400;
    text-align: center;
}
.card p{
    color: #6c757d;
    text-align: center;
}

@media(max-width:991px){
    .wrapper{
        padding: 25px;
    }
    .wrapper h1{
        font-size: 2.5em;
        font-weight: 600;
    }
    .content-box{
        flex-direction: column;
        width: 100%;
    }
    .card{
        min-width: 300px;
        margin: 10px auto;
    }
}

    </style>
   
    
</head>
<body>
<header>
  
    <div class="logo"></div>
    <div class="inner-width">
      <img src="https://i.ibb.co/m0K6W8d/zyro-image-18-Photoroom-png-Photoroom.png" alt="HOLA" width="240px" height="80">
      <i class="menu-toggle-btn fas fa-bars"></i>
      <nav class="navigation-menu">
        <a href="http://localhost/lasergraf/indexx.php" class="aj_btn"><i class="fas fa-home home" ></i> Inicio</a>
        <a href="#Nosotros" class="aj_btn"></i> Nosotros</a>
        <a href="http://localhost/hola/placas.php" class="aj_btn"></i> Productos</a>
        <a href="http://localhost/lasergraf/servisios.php" class="aj_btn"></i> Servicios</a>
        <a href="#" class="aj_btn">Registrate</a>
  
   </header>

<br>
<br>

   <div class="wrapper">
        <h1>Nuestros servicios</h1>
             <div class="content-box">
                <div class="card">
                    <i class="bx bx-bar-chart-alt bx-md"></i>
                    <h2>Letreros</h2>
                  <h2>luminosidad del neón y la elegancia del acrílico para producir letreros únicos y llamativos.</h2>

                </div>
                <div class="card">
                    <i class="bx bx-laptop bx-md"></i>
                    <h2>Artículos personalizados</h2>
                   <h2>Una amplia variedad de productos únicos, exclusivos, desde tazas, camisetas hasta llaveros y fundas para teléfonos. </h2>
                         
                </div>
                <div class="card">
                    <i class='bx bx-user bx-md'></i>

                    <h2>Rótulos</h2>
                <h2>Creamos rótulos que atraen la atención y comunican tu marca de manera memorable y profesional.</h2>
                         
                </div>
                <div class="card">
                    <i class="bx bx-mail-send bx-md"></i>
                    <h2>Reconocimientos</h2>
                    <h2>Nuestro servicio de reconocimientos en diseño gráfico ofrece una elegante y personalizada manera de honrar logros y reconocer contribuciones destacadas.</h2>
                         
                </div>
                <div class="card">
                    <i class="bx bx-bar-chart-alt bx-md"></i>
                    <h2>Cortes & grabados a láser</h2>
                    <h2>Proporcionamos una precisión excepcional para plasmar tus diseños en una amplia variedad de materiales, desde madera hasta acrílico y metal. </h2>
                         
                </div>
                <div class="card">
                    <i class="bx bx-paint bx-md"></i>
                    <h2>Impresiones
                    </h2>
                    <h2>Desde carteles y folletos hasta tarjetas de visita y lona que destacan tu mensaje de manera profesional y llamativa.</h2>   
                </div>
             </div>
    </div>
    <section class="carousel">
      <div class="carousel__container">
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://i.ibb.co/zbBxPjM/letrero1.png"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://i.ibb.co/8D2W3rt/neon7.png"
            alt="people"
            />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://i.ibb.co/n8S0rM9/placa7.png"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://i.ibb.co/m57FL7k/corazon.png"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://i.ibb.co/dpd1sbb/nails.png"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://i.ibb.co/hWQYMsd/pixelcut-export.png"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>

        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://i.ibb.co/mz4HKnj/placanueva3.png"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
      </div>
      </section>

</body>

</html>