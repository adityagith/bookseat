<?php
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "bakery";
    // $server = "bjdybdnht2mursi0vang-mysql.services.clever-cloud.com";
    // $username = "u110oqym3yg4xiov";
    // $password = "tL0DWCFuVCEaTUMHU7uk";
    // $database = "bjdybdnht2mursi0vang";
    $server = "db4free.net";
    $username = "adidasjiit";
    $password = "mysql2020";
    $database = "adityajiit";
    $conn = mysqli_connect($server,$username,$password,$database);
   $s = "p";
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
       $name = $_POST["name"];
       $phone =$_POST["phone"];
       // in case user is not registered
       //$sql3 = "SELECT * FROM `baketable` WHERE phone='$phone'";
       $sql3 = "SELECT * FROM `baketable` WHERE name1='$name' AND phone='$phone'";
       $status = mysqli_query($conn,$sql3);
       $num = mysqli_num_rows($status);
       if($num==1)
       {
        $s = "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
            <title>Our Bakery</title>
            <style>
                body{
                    margin: 0px 0px;
                    color:white;
                }
                .contain
                {
                    display:flex;
                }
                /* div{
                    border:2px solid black;
                } */
                .box1,.box2{
                    height:760px;
                    width:50%;
                }
                .box1{
                    background-color: black;
                }
                .box2{
                    background:url('r.jpg');
                    background-repeat: no-repeat;
                    background-size:100% 760px;
                }
                h1{
                    color:white;
                }
                #head2
                {
                    float:right;
                }
                .img{
                    height:700px;
                    
                    background: url('https://drive.google.com/thumbnail?id=1c-FBvHTBY7R5tG80ADfiM-dEsC03hbpQ');
                    background-repeat: no-repeat;
                    background-size: 98% 700px;    
                }
                input{
                    border:2px solid wheat;
                    border-radius: 25px;
                    height:45px;
                    width: 450px;
                    font-size: 30px;
                    background:rgb(223, 207, 177);
                    color: black;
                }
                #btn{
                    margin-top: 10px;
                    border:2px solid wheat;
                    border-radius: 25px;
                    height:50px;
                    width: 100px;
                    font-size: 30px;
                }
                form{
                    margin-top: 200px;
                }
                h1{
                    margin-top: -20px;
                    margin:80px 80px;
                }
                .text{
                    font-size:40px;
                    position:relative;
                    margin-top:200px;
                    margin:200px 200px;
                }
                @media only screen and (min-width: 100px) and (max-width: 1000px)
                {
                    .box1,.box2{
                        height:760px;
                        width:100%;
                    }
                    .box2{
                        display:none;
                    }
                }
            </style>
        </head>
        <body>
        <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo01' aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
          <a class='navbar-brand' href='https://thedelhibakery.netlify.app/'>Home</a>
            <a class='navbar-brand' href='https://thedelhibakery.netlify.app/menuf.html'>Menu</a>
            <a class='navbar-brand' href='https://bookseat.herokuapp.com'>Book a Seat</a>
            <a class='navbar-brand' href='https://reviewonlinebakery.herokuapp.com'>Reviews</a>
            <a class='navbar-brand' href='https://thedelhibakery.netlify.app/timing.html'>Timings</a>
        </div>
      </nav>
            <div class='contain'>
                <div class='box1'>
                <div class='text'>
                Your table
                <br>has been already booked<br>
                </div>
                </div>
                <div class='box2'>      
                </div>
            </div>
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
            <script>
                let a = document.getElementById('name');
                let b = document.getElementById('phone');
                if(a.value==' ')
                {
                    let e = document.getElementById('name');
                    e.innerHTML = e.innerHTML + '<br id='name'>The phone number should contain 10 digits';    
                }
                if(a.value.length == 10)
                {
                    let c = document.getElementById('wphone');
                    c.removeChild(); 
                }
                if(b.value.length != 10)
                {
                    let d = document.getElementById('phone');
                    d.innerHTML = d.innerHTML + '<br id='wphone'>The phone number should contain 10 digits'; 
                }
            </script>
        </body>
        </html>";  
        echo $s;   
       }
       else
       {
        $sql1 = "INSERT INTO `baketable` (`serial`, `name1`, `phone`) VALUES (NULL, '$name', '$phone');";
        $status = mysqli_query($conn,$sql1);
        $s = "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
            <title>Our Bakery</title>
            <style>
                body{
                    margin: 0px 0px;
                    color:white;
                }
                .text{
                    font-size:40px;
                    position:relative;
                    margin-top:200px;
                    margin:200px 200px;
                }
                .contain
                {
                    display:flex;
                }
                /* div{
                    border:2px solid black;
                } */
                .box1,.box2{
                    height:760px;
                    width:50%;
                }
                .box1{
                    background-color: black;
                }
                .box2{
                    background:url('https://drive.google.com/thumbnail?id=1c-FBvHTBY7R5tG80ADfiM-dEsC03hbpQ');
                    background-repeat: no-repeat;
                    background-size:100% 760px;
                }
                h1{
                    color:white;
                }
                #head2
                {
                    float:right;
                }
                .img{
                    height:700px;
                    
                    background: url('https://drive.google.com/thumbnail?id=1c-FBvHTBY7R5tG80ADfiM-dEsC03hbpQ');
                    background-repeat: no-repeat;
                    background-size: 98% 700px;    
                }
                input{
                    border:2px solid wheat;
                    border-radius: 25px;
                    height:45px;
                    width: 450px;
                    font-size: 30px;
                    background:rgb(223, 207, 177);
                    color: black;
                }
                #btn{
                    margin-top: 10px;
                    border:2px solid wheat;
                    border-radius: 25px;
                    height:50px;
                    width: 100px;
                    font-size: 30px;
                }
                form{
                    margin-top: 200px;
                }
                h1{
                    margin-top: -20px;
                    margin:80px 80px;
                }
                @media only screen and (min-width: 100px) and (max-width: 1000px)
                {
                    .box1,.box2{
                        height:760px;
                        width:100%;
                    }
                    .box2{
                        display:none;
                    }
                }
            </style>
        </head>
        <body>
        <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo01' aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
          <a class='navbar-brand' href='https://thedelhibakery.netlify.app/'>Home</a>
            <a class='navbar-brand' href='https://thedelhibakery.netlify.app/menuf.html'>Menu</a>
            <a class='navbar-brand' href='https://bookseat.herokuapp.com'>Book a Seat</a>
            <a class='navbar-brand' href='https://reviewonlinebakery.herokuapp.com'>Reviews</a>
            <a class='navbar-brand' href='https://thedelhibakery.netlify.app/timing.html'>Timings</a>
        </div>
      </nav>
            <div class='contain'>
                <div class='box1'>
                  <div class='text'>
                    Thankyou you! 
                    Your table has been booked<br>
                    </div>
                </div>
                <div class='box2'>
                    
                </div>
            </div>
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
            <script>
                let a = document.getElementById('name');
                let b = document.getElementById('phone');
                if(a.value==' ')
                {
                    let e = document.getElementById('name');
                    e.innerHTML = e.innerHTML + '<br id='name'>The phone number should contain 10 digits';    
                }
                if(a.value.length == 10)
                {
                    let c = document.getElementById('wphone');
                    c.removeChild(); 
                }
                if(b.value.length != 10)
                {
                    let d = document.getElementById('phone');
                    d.innerHTML = d.innerHTML + '<br id='wphone'>The phone number should contain 10 digits'; 
                }
            </script>
        </body>
        </html>";
        echo $s;
       }
   }
   else
   {
       $s = "<!DOCTYPE html>
       <html lang='en'>
       <head>
           <meta charset='UTF-8'>
           <meta name='viewport' content='width=device-width, initial-scale=1.0'>
           <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
           <title>Our Bakery</title>
           <style>
               body{
                   margin: 0px 0px;
               }
               .contain
               {
                   display:flex;
               }
               /* div{
                   border:2px solid black;
               } */
               .box1,.box2{
                   height:760px;
                   width:50%;
               }
               .box1{
                   background-color: black;
               }
               .box2{
                background:url('r.jpg');
                background-repeat: no-repeat;
                background-size:100% 760px;
            }
               h1{
                   color:white;
               }
               #head2
               {
                   float:right;
               }
               .img{
                   height:700px;
                   
                   background: url('https://drive.google.com/thumbnail?id=1c-FBvHTBY7R5tG80ADfiM-dEsC03hbpQ');
                   background-repeat: no-repeat;
                   background-size: 98% 700px;    
               }
               input{
                   border:2px solid wheat;
                   border-radius: 25px;
                   height:45px;
                   width: 450px;
                   font-size: 30px;
                   background:rgb(223, 207, 177);
                   color: black;
               }
               #btn{
                   margin-top: 10px;
                   border:2px solid wheat;
                   border-radius: 25px;
                   height:50px;
                   width: 100px;
                   font-size: 30px;
               }
               form{
                   margin-top: 200px;
               }
               h1{
                   margin-top: -20px;
                   margin:80px 80px;
               }
               @media only screen and (min-width: 100px) and (max-width: 1000px)
                {
                    .box1,.box2{
                        height:760px;
                        width:100%;
                    }
                    .box2{
                        display:none;
                    }
                }
           </style>
       </head>
       <body>
       <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo01' aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
          <a class='navbar-brand' href='https://thedelhibakery.netlify.app/'>Home</a>
            <a class='navbar-brand' href='https://thedelhibakery.netlify.app/menuf.html'>Menu</a>
            <a class='navbar-brand' href='https://bookseat.herokuapp.com'>Book a Seat</a>
            <a class='navbar-brand' href='https://reviewonlinebakery.herokuapp.com'>Reviews</a>
            <a class='navbar-brand' href='https://thedelhibakery.netlify.app/timing.html'>Timings</a>
        </div>
      </nav>
           <div class='contain'>
               <div class='box1'>
                   <form method='POST' action='dbook.php' id='form'>
                       <center>
                           <center><h1>Why to wait? Book a table</h1></center>
                       <input type='text' name='name' id='name' placeholder='Enter your name'>
                       <br>
                       <br>
                       <input type='text' name='phone' id='phone' placeholder='Mobile Number'>
                       <br>
                       <br>
                       <button id='btn' onclick='submit'>Book</button>
                   </center>
                   </form>
               </div>
               <div class='box2'>
                   
               </div>
           </div>
           <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
           <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
           <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
           <script>
               let a = document.getElementById('name');
               let b = document.getElementById('phone');
               if(a.value==' ')
               {
                   let e = document.getElementById('name');
                   e.innerHTML = e.innerHTML + '<br id='name'>The phone number should contain 10 digits';    
               }
               if(a.value.length == 10)
               {
                   let c = document.getElementById('wphone');
                   c.removeChild(); 
               }
               if(b.value.length != 10)
               {
                   let d = document.getElementById('phone');
                   d.innerHTML = d.innerHTML + '<br id='wphone'>The phone number should contain 10 digits'; 
               }
           </script>
       </body>
       </html>";
       echo $s;
   }
?>
