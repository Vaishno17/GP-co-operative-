 <head>
        <!-- <link rel="stylesheet" href="navi.css"> -->
        <link rel="stylesheet" href="css\all.min.css">
        <link rel="stylesheet" href="css\fontawesome.min.css">
  

        <title></title>
    
        <style>
            *{
         /* margin: 0;*/
        padding: 0;   
        box-sizing: border-box;
        font-family: sans-serif;
    }
   
    body{
    
        overflow: hidden;
    }
    .container_nav{
        height: 100%;
        width: 250px;
        position: absolute;
        background: #9f9da7;
        z-index: 1;
        transition: 0.5s ease;
        transform: translateX(-260px);
    }
    .container_nav .head{
        color: #000;
        font-size: 30px;
        font-weight: bold;
        padding: 30px;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 3px;
        background: linear-gradient(30deg,#329dd5,#a5c0ce);
    }
    ol{
        width: 100%;
        list-style: none;
    }
    ol li{
        display: block;
        width: 100%;
    }
    ol li a{
        color: #000;
        padding: 15px 10px;
        text-decoration: none;
        display: block;
        font-size: 20px;
        letter-spacing: 1px;
        position: relative;
        transition: 0.3s;
        overflow: hidden;
        text-transform: capitalize;
    }
    ol li a i{
        width: 70px;
        font-size: 25px;
        text-align: center;
        padding-left: 30px;
    }
    ol li:hover a{
        background:#030303 ;
        color:#00eaff;
        letter-spacing: 5px;
    }
    input{
       
        visibility: hidden;
        display: none;
    }
    span{
        position: absolute;
        right: -40px;
        top: 5px;
        font-size: 25px;
        border-radius: 3px;
        color: #fff;
        padding: 3px 8px;
        cursor: pointer;
        background: #329dd5;
    
    }
    #bars{
        background: #329dd5;
    }
    #check:checked ~ .container_nav{
        transform: translateX(0);
    }
    #check:checked ~ .container_nav #bars{
        display: none;
    }
 
        </style>
    </head>
    <body>
    
        
            <input type="checkbox" name="" id="check">
        <div class ="container_nav">

                <label for="check">
                    <span class="fas fa-times" id="times"></span>
                    <span class="fas fa-bars" id="bars"></span>
                </label>
                <div class="head">menu</div>
                <ol>
            <li><a href="#"><i class="fa-solid fa-pen"></i>edit profile</a></li>
            <!-- id="download" for download functionality -->
            <li><a href="#"><i class="fa-solid fa-download" id="download"></i>save pdf</a></li>
            <li><a href="#"><i class="fa-solid fa-address-card"></i>about us</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>log out</a></li>
        </ol>
    </div>
    </body>
