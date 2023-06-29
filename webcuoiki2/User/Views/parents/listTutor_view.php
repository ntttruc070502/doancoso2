<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/ umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Document</title>
  <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
  #bangchuyen {
      background-color: rgb(68, 65, 65);
      height: 500px;
    
  }

.phancuoi {
height: auto;
background-color: rgb(224, 232, 238);
}

.signupbtn {

width: 20%; 
}

/* Add padding to container elements */
.container {
padding: 16px;
}

/* The Modal (background) */
.modal {
display: none; /* Ẩn theo mặc định */
position: fixed; /*luôn trên màn hình ngay tại vị trí chuẩn đó và đè lên trên các phần tử bên dưới. */
left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Cuộn nếu cần */
background-color: #474e5d;
padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
background-color: #fefefe;
margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
border: 1px solid #888;
width: 40%; /* Could be more or less, depending on screen size */

}

/* Style the horizontal ruler */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
position: absolute;
right: 35px;
top: 15px;
font-size: 40px;
font-weight: bold;
color: #f1f1f1;
}

.close:hover,
.close:focus {
color: #f44336;
cursor: pointer; /*Hiển thị con trỏ chuột khi trỏ vào*/
}

/* Clear floats */
.clearfix::after {
content: "";
clear: both;
display: table;
}

/* Thay đổi màn hình khi thu nhỏ */
@media screen and (max-width: 300px) {
.cancelbtn, .signupbtn {
width: 100%;
}
}

input[type=text], input[type=password] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}

/* Set a style for all buttons */
button {
background-color: #0b5c70;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}

button:hover {
opacity:1;
}



/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  text-align: center;
  float: right;
  padding: 10px;
}

/* Add padding to container elements */
.container {
padding: 16px;
width: 80%;
}

/* The Modal (background) */
.modal {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */

left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: #474e5d;
padding-top: 50px;

}

/* Modal Content/Box */
.modal-content {
background-color: #fefefe;
margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
border: 1px solid #888;
width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
position: absolute;
right: 35px;
top: 15px;
font-size: 40px;
font-weight: bold;
color: #f1f1f1;
}

.close:hover,
.close:focus {
color: #f44336;
cursor: pointer;
}



  .chua{
    padding: 20px;
  }


 .dk{
   float: right;
 }


  .column{
    border: 1px solid rgb(189, 218, 241);
    border-radius: 20px;
    background-color: rgb(218, 235, 240);
}

  .chua:after {
      content: "";
      display: table;
      clear: both;
      margin: 20px;
    }

  .column {
      float: left;
      width: 45%;
      padding: 20px;
      margin: 20px;
      height: 385px;

    }
  /* responsive */
    @media screen and (max-width: 900px) {
      .column  {
        width: 100%;
      }
    }
    .carousel-caption p{
      color:blueviolet
      font-size: 15px;
      width: 100%;
  }
  .carousel-caption h2{
      color: rgb(22, 72, 165);
    
  }
  .carousel-indicators {
    display: none;
  }
  .nav.navbar-nav.hihi:hover {
    transition: 0.4s;
    
   

  }
  
  </style>
</head> 
<body>
  
      <h3 class="display-3" style="text-align: center;">Danh sách gia sư </h3>
    
  <hr>

  <body>
   <div class="chua">
              <div class="column">

                <div class="col-sm-3">     
                </div>
               
                   
                    <div class="row">
                      <div class="col-sm-6" >
                        <img class="card-title anh" src="<?= $value['anh'] ?>" alt="Card image cap">
                      </div>
                      <div class="col-sm-6">
                        <p class="card-title ten"><?php echo $dataID['ten']; ?> </p>
                        <p class="card-text email"> <?php echo $dataID['ten']; ?> </p>
                       

                       
                      </div>
                <div >
                </div>              
                  <div class="dk" >          
                </div>     
                
                        
              </div> 

             
              </div>
            </div>
        
        </div>
      </body>
</html>