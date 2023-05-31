<!DOCTYPE html>
<html>
    <head>
        <title>REPORT</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles/Docmain.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
<style>

body {
 background-image: url("images/img.jpg");
 background-repeat:no-repeat;

}

img{
	max-width :100%;
}
    			.container{
	width : 700px;
	background-color:rgb(0,0,0,0.8);
	margin: auto;
	color: #FFFFFF;
	padding: 0.5px 0px 0.5px 0px;
	text-align: center;
	border-radius: 10px 10px 0px 0px;
}
			
.container{
	background-color:#e5e9e6;
	width : 800px;
	height :500px;
	padding:50px 50px 50px 50px;
	margin: auto ;
	border-radius: 20px 20px 20px 20px;
}
</style>
</head>
<body>
        <div class="topnav">
            <div class="logo">
            <p> <strong> e Service </strong> </p>
            </div>
            
            <img class = "image" src="images/logo.jpg" width="121px" height="100px">
            
            <div class = "navbar">
                <a href="#">Home</a>
                <a href="#" >About Us</a>
                <a href="#" >Contact us</a>
                <a href="#">Terms & Conditions</a>
                <a href="#" class="login">Login</a>
            </div>
            <br>
        </div>
    </head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<center>
    <div class = "container" >
        <center>
<canvas id="myChart" style="width:100%;max-width:400px"></canvas>

<script>
var xValues = ["Nuerology", "Cardiology", "Peadiatrics", "Dermatology", "Allergy and immunology"];
var yValues = [20, 30, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Most consulted specialization in a month"
    }
  }
});





</script>
</center>
</div>
</center>
<!---footer--!>
	<!----------------------footer-------------------------------------------->
    <footer>
        <img class = "image1" src="images/qr2.PNG" width="121px" height="100px">
       
       <p>+94 712 571 22</p>
       <p>eservice@gmail.com</p>
       <p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
   
       <br><hr class = "hr1">
       <p class="para4"> @2022 All Rights Reserved </p><br>
       
       <div class="socialmedia">
           <ul>
               <li><a href="#" class="fa fa-facebook"></a></li>
               <li><a href="#" class="fa fa-twitter"></a></li>
               <li><a href="#" class="fa fa-instagram"></a></li>
           </ul>
       </div>
       
       <br>
   </footer>
</body>
</html>
