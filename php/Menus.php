<?php

    class Menu{

        public function Cabecera(){

            echo"
            <!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link
    rel='stylesheet'
    href='css/animate.min.css'
  />
    <style>
    
    footer{
        text-align: center;
        background: url(./img/bg.jpg);
        padding: 40px;
        
    }
    .copy{
        color: #ffffff;
        font-size: 13px;
        margin: 20px;
    }  
    </style>
    <title>Tramites Escolares</title>
  </head>
  <body>
            ";

        }

        public function Footers(){

            echo"


            <footer>
        
                <p class='copy'>&copy Copyright Vintes Tec - 2023</p>
    
            </footer>
            
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src='js/jquery-3.3.1.js'></script>
            <script src='js/popper.min.js'></script>
            <script src='js/bootstrap.js'></script>
          </body>
        </html>
            
            ";

        }

        public function Navegador(){

            echo"
     
            <nav class='navbar navbar-dark bg-dark'>
              <a class='navbar-brand animate__animated animate__fadeInLeft' href='#'>
                <img src='./img/escudo_escolar.jpeg' width='30' height='30' class='d-inline-block align-top' alt=''>
                Tramites
              </a>
            </nav>
            ";
        }



    }


?>