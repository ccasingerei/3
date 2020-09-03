<!DOCTYPE html>
<html>    
    <head>
        <title> CCA Sîngerei </title>
          <meta charset="UTF8">
          <meta name="viewport" content="width=device-width, initial-scale=1" />
          <link rel="stylesheet" href="../css/style.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
          <link rel="icon" type="image/png" href="../image/logo.png" />
          <script src="../js/main.js"> </script>
          
    </head>
    <body>
     <header class="header">
         <img  class="header-logo" src="../image/logo.png" alt="Logo siteului"/>
         <div id="navbar" class="nav"  >
         <a href="../index.html"  >Star</a>
         <a href="descriere.html">Descriere</a>
         <a href="contacte.php" class="active">Înregistrare</a>
         <a href="rezultate.html">Rezultate</a> 
         <a class="hamburger-menu" onclick="mobileMenu()"><i class="fa fa-bars" ></i></a>
        </div>

     </header>
     <div class="container">
         <br />
         <div class="row">
             <div class="col-4">
                 
                <div class="form">
                    <h3 class="centered">Înregistrezate</h3>
                  <hr>
                <form    method="POST" action="contacte.php"  >
                    <label for="nume">Numele/Prenume elevului</label>
                    <input class="input-box" type="text" name="nume" id=nume required/><br/>
                   
                    <label for="institutia">Instutuția de învățământ</label>
                    <input class="input-box" type="text" name="institutia" id=institutia required/><br/>

                    <label for="clasa"><p>Clasa</label><br/> 
                    <input class="input-box"  type="text" name="clasa" id=clasa required/><br/>

                    <label for="email">Email </label><br/> 
                    <input class="input-box" type="email" name="email" id="email" required /><br/>

                    <label class="input-box" for="cercul">Cercul</label><br/> 

                    <select class="input-box" name="cercul" id="cercul"> 
                        <option>Dans sportiv</option>
                        <option>Anamblul vocal-instrumetal Alfabetul</option>
                        <option>Ansamblul vocal Stelute muzicale</option>
                        <option>Ansmblul folcloric Florile dalbe</option>
                        <option>Pirogravura</option>
                        <option>Arta lemnului</option>
                        <option>Arta plastica</option>
                        <option>Floristica textila</option>
                        <option>Qulling</option>
                        <option>Crosteta fermecata</option>
                        <option>Biser</option>
                        <option>Tainele infomaticii</option>
                        <option>Natura si ecologia</option>
                        <option>Cultura si civilizatia engleza</option>

                    </select><br/>

                    <input class="input-submit" type="submit" value="Transmite">


                </form>
                 <?php
                  $nume =$_POST['nume'];
                  $institutia =$_POST['institutia'];
                  $clasa =$_POST['clasa'];
                  $email =$_POST['email'];
                  $cercul =$_POST['cercul'];
                  $message=$_POST['message'].$nume.$institutia.$clasa
                 ?>
                 mail('pirat777_84@mail.ru', $cercul, $message, $headers);

                </div>
            </div>
            
             <div class="col-6 container-iframe">
                 <iframe width="100%" height="315" src="https://www.youtube.com/embed/A27wm_013ks" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            </div>
         </div>
         <hr/>
         <div class="row">
             <div  class="col-4"> 
                 <h4>Contate</h4>
                 <br>
                 <b>Telefon:</b> <br/> <span>026223762</span> <br/>
                 <b>Adresa: </b><br/> <span> str. Indepndentei 128</span> <br/>
                 <b>orele de lucru:</b><br/> <span>Luni-Vineri/11:00-16:00</span>
 
             </div>
             <div class="container-iframe">
                <div class="col-8 harta cedered"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.5892632962446!2d28.145401214973475!3d47.63411489407109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cb7a1be762e39b%3A0x9fe2179155085803!2sCasa%20de%20Creatie%20Singerei!5e0!3m2!1sru!2s!4v1598475230378!5m2!1sru!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
            </div>
              
         
         </div>

     </div>

     <footer>    
         <div class="centered footer-info">
           <span>Centrul de Creație și Agrement Sîngerei</span>
           <span>2020</span>
        </div>
         </footer>
    </body>
</html>