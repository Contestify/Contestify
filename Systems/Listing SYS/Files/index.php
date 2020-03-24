<?php
$servername = "remotemysql.com";
$username = "vraamdICzQ";
$password = "NlhwDivwPE";
$dbname = "vraamdICzQ";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Contests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $contest[] = $row;
    }
} else {
    echo "0 results";
}
for ($i=0; $i < $result->num_rows; $i++) {
	$rank = $contest[$i]["contest_Difficulty"];
  $title = $contest[$i]["contest_Title"];
  $charID = $contest[$i]["contest_charID"];
  if(file_exists ( "./pages/contest".$i.".php")) {

  }
  else{
  $file = fopen("./pages/contest".$i.".php", "x");
  fwrite($file, "<!DOCTYPE html>
	<html lang='en' dir='ltr'>
	  <head>
	    <meta charset='utf-8'>
	    <title></title>
	    <style media='screen'>
	      .headline {
	        display: flex;
	        position: relative;
	        top: 7vh;
	        left: 4vw;
	        align-items: center;
	        opacity: 1;
	      }
	      .Ranking {
	        margin-right: 4%;
	      }
	      .cID {
	        margin-right: 1.7%;
	      }
	      .line {
	        margin-right: 1%;
	      }
	      .Btn {
	        position: relative;
	        left: 75vw;
	        top: 0.5vw;
	        cursor: pointer;
	      }
	    </style>
	  </head>
	  <body>

	    <div class='headline'>

	      <div class='Ranking'>

					<svg xmlns='http://www.w3.org/2000/svg' width='60.001' height='60' viewBox='0 0 60.001 60'>
						<g id='Group_8' data-name='Group 8' transform='translate(-47 -66)'>
							<ellipse id='Ellipse_4' data-name='Ellipse 4' cx='28.5' cy='28.5' rx='28.5' ry='28.5' transform='translate(48.5 67.5)' fill='#fff' stroke='#8b8686' stroke-width='3'/>
							<text id='R2' transform='translate(57.188 106.604)' fill='#8b8686' font-size='30' font-family='Montserrat-Bold, Montserrat' font-weight='700'><tspan x='0' y='0'>$rank</tspan></text>
						</g>
					</svg>
	      </div>

	      <div class='cID'>

	        <svg xmlns='http://www.w3.org/2000/svg' width='150 ' height='37' viewBox='0 0 78 37'>
	          <text id='_CN1' data-name='#CN1' transform='translate(0 29)' fill='#7a7a7a' font-size='30' font-family='Montserrat-Regular, Montserrat'><tspan x='0' y='0'>$charID</tspan></text>
	        </svg>
	    </div>


	      <div class='line'>

	        <svg xmlns='http://www.w3.org/2000/svg' width='1.5' height='48' viewBox='0 0 1.5 48'>
	          <line id='Line_3' data-name='Line 3' y2='48' transform='translate(0.75)' fill='none' stroke='#707070' stroke-width='1.5'/>
	        </svg>
	      </div>

	      <div class='Cotest Title'>

	        <svg xmlns='http://www.w3.org/2000/svg' width='596' height='49' viewBox='0 0 596 49'>
	          <text id='Web_Develpopment_Contest' data-name='Web Develpopment Contest' transform='translate(0 39)' fill='#686868' font-size='40' font-family='Montserrat-Bold, Montserrat' font-weight='700'><tspan x='0' y='0'>$title</tspan></text>
	        </svg>
	      </div>

	    </div>

	    <div class='Btn'>

	      <svg xmlns='http://www.w3.org/2000/svg' width='219.5' height='47.5' viewBox='0 0 219.5 47.5'>
	        <path id='Subtraction_1' data-name='Subtraction 1' d='M-5200,65h-186a15.9,15.9,0,0,1-11.313-4.686A15.893,15.893,0,0,1-5402,49V35a15.892,15.892,0,0,1,4.687-11.313A15.9,15.9,0,0,1-5386,19h186a15.9,15.9,0,0,1,11.313,4.686A15.892,15.892,0,0,1-5184,35V49a15.893,15.893,0,0,1-4.687,11.314A15.9,15.9,0,0,1-5200,65Zm-50.01-28.381c-4.752,0-8.071,3.417-8.071,8.311s3.319,8.311,8.071,8.311a6.2,6.2,0,0,0,5.039-2.1V53h4.471V30.74h-4.68V38.57A6.222,6.222,0,0,0-5250.01,36.619Zm-39.361,0c-4.988,0-8.609,3.5-8.609,8.311,0,4.893,3.787,8.311,9.209,8.311a8.423,8.423,0,0,0,6.661-2.611l-2.491-2.7a5.484,5.484,0,0,1-4.049,1.559c-2.439,0-4.167-1.211-4.62-3.239h12.209c.005-.075.013-.155.02-.237l.011-.128c.027-.3.058-.634.058-.9A8.023,8.023,0,0,0-5289.371,36.619Zm-21.869.6v3.6h2.49V47.45c0,3.734,2.141,5.79,6.029,5.79a6.708,6.708,0,0,0,3.811-1.021l-1.261-3.3a3.157,3.157,0,0,1-1.89.6,1.886,1.886,0,0,1-2.009-2.13V40.819h4.02v-3.6h-4.02V33.29h-4.68v3.93Zm-12.691,0v3.6h2.49V47.45c0,3.734,2.142,5.79,6.03,5.79a6.7,6.7,0,0,0,3.81-1.021l-1.259-3.3a3.158,3.158,0,0,1-1.89.6,1.886,1.886,0,0,1-2.01-2.13V40.819h4.02v-3.6h-4.02V33.29h-4.68v3.93Zm54.631,3.45a3.077,3.077,0,0,1,2.411.926,4.236,4.236,0,0,1,.859,2.883V53h4.679V43.76c0-4.471-2.5-7.141-6.689-7.141a7.081,7.081,0,0,0-5.341,2.131V36.859h-4.47V53h4.68V45.02C-5273.17,42.256-5271.759,40.67-5269.3,40.67Zm-71.13,7.829h9.75l1.86,4.5h5.1l-9.39-21h-4.8l-9.36,21h4.979l1.86-4.5Zm91.229.9a4.038,4.038,0,0,1-2.947-1.189,4.6,4.6,0,0,1-1.192-3.281,4.6,4.6,0,0,1,1.192-3.281,4.038,4.038,0,0,1,2.947-1.189,4,4,0,0,1,2.921,1.189,4.614,4.614,0,0,1,1.189,3.281,4.614,4.614,0,0,1-1.189,3.281A4,4,0,0,1-5249.2,49.4Zm-83.009-4.59h-6.66l3.33-8.039,3.33,8.038Zm46.831-1.289h-7.951a3.82,3.82,0,0,1,3.991-3.359,4,4,0,0,1,2.643.915,3.985,3.985,0,0,1,1.317,2.444Z' transform='translate(5402.75 -18.25)' fill='#3e3939' stroke='#4ea529' stroke-width='1.5' stroke-dasharray='100' opacity='0.71'/>
	      </svg>
	    </div>


	  </body>
	</html>
	");
  fclose($file);
}
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,900;1,300;1,500&display=swap" rel="stylesheet">
    <style media="screen">
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
      #card{
         position: relative;
         text-align: center;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          border-radius: 5px; /* 5px rounded corners */
          max-width: 30%;
          margin-bottom: 5%;
          margin: 6% auto 4% auto;
          overflow: hidden;
          background: white;

      }
      #card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }
      .contests {
        align-items: center;
      }
      .viewDetails {
        background: white;
        border: none;
        position: relative;
        outline: none;
        width: 10vw;
        height: 5vh;
        border-radius: 10%;
        font-size: 0.9em;
        font-weight: bold;
        cursor: pointer;
        opacity: 0;
        transition: 1.5s;
        transition-timing-function: ease-out;
        z-index: 2;
      }
      #card::before {
        left: 0;
        width: 0%;
        height: 180%;
        content: "";
        position: absolute;
        background: #49FF2E;
        border-radius: 0 50% 50% 0;
        transition: 0.8s;
        transition-timing-function: ease-out;
        top: 0;
        z-index: 2;
        overflow: hidden;
      }
      #card:hover::before {
        width: 190%;
        height: 180%;
        opacity: 1;
      }
      .card0 {
        margin-top: 4%;
      }
    </style>
  </head>
  <body>
    <div class="contests">


    </div>
    <script type="text/javascript">

    today=new Date();
    var one_day=1000*60*60*24;

    var i = 0;

    times = <?php echo json_encode($result->num_rows); ?>;

    var data = <?php echo json_encode($contest); ?>;

    var parent = document.querySelector('.contests');

    function createEl(i) {

      var card = document.createElement("DIV");
      card.className = "card".concat(i);
      card.id = "card";
      document.querySelector('.contests').appendChild(card);


      //  Styles that apply to all cards go here
      card.style.padding = '20px';



      var title = document.createElement("H1");
      title.innerHTML = "Contest: "+data[i]["contest_ID"];
      document.querySelector(".card".concat(i)).appendChild(title);

      var knowledge = document.createElement("H3");
      knowledge.innerHTML = "Basic knowledge: "+data[i]["contest_Knowledge"];
      document.querySelector(".card".concat(i)).appendChild(knowledge);

      var rank = document.createElement("H3");
      rank.innerHTML = data[i]["contest_Difficulty"];
      document.querySelector(".card".concat(i)).appendChild(rank);

      rank.style.float = 'right';
      rank.style.position = 'relative';
      rank.style.top = '-6em';
      rank.style.zIndex = '1';

      var deadline = document.createElement("H3");
      deadline.innerHTML = Math.ceil((Date.parse(data[i]["contest_DeadLine"])-today.getTime())/(one_day)) + " days remaining !";
      document.querySelector(".card".concat(i) ).appendChild(deadline);

      var prize = document.createElement("H2");
      prize.innerHTML = "Prize: "+data[i]["contest_Prize"];
      document.querySelector(".card".concat(i) ).appendChild(prize);

      var btn = document.createElement("BUTTON");
      btn.innerHTML = "Want to participate ?";
      btn.className = 'viewDetails';
      btn.id = 'viewDetails'.concat(i);
      document.querySelector(".card".concat(i) ).appendChild(btn);
      btn.style.position = 'relative';
      btn.style.left = '-9vw';
      btn.style.bottom = '0vh';
      btn.style.float = 'right';
      btn.addEventListener("click", function() {
        window.location.href = "/pages/contest".concat(i).concat(".php");
      })

      document.querySelector(".card".concat(i)).addEventListener("mouseover", function () {
        document.querySelector('#viewDetails'.concat(i)).style.opacity = "1";
      });

      document.querySelector(".card".concat(i)).addEventListener("mouseout", function () {
        document.querySelector('#viewDetails'.concat(i)).style.opacity = "0";
      });
    }

    for (var i = 0; i < times; i++) {
      createEl(i);
    }



    </script>
  </body>
</html>
