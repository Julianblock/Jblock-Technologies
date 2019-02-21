<html>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Gsuite Ownership 
<meta name="google-site-verification" content="bNyN3yYcHC-MRdMs0ib3p4e5AlFhP8bpjLHPoWHfL6E" />
-->



<link rel="stylesheet" href="styles/animate.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

<link rel="stylesheet" href="styles/main.css" />

<link rel="stylesheet" href="styles/owner.css" />

</head>

<? include 'navbar.php'?>


<body>


<!-- Header -->
<center>
<div class="owners_headContainer">
	<div class="headerLayover">
	<img src="images/logo.png" class=" mainLogo animated fadeIn"/>
	<br/><br/>
	<a href="#owners" style="font-size: 24px; text-shadow: 1px 2px 11px #272727; color: #fff;"><button class="ownerHeaderButtons greenButton animated fadeIn" onclick="document.getElementById('owners').style.display='block'">Meet The Owners</button></a>
	</div>
</div>
</center>
<div class="whyuswrapper">
<div class="whyUsContent">
    <center>
            <h1 style="
    color: #245128;
    font-size: 31px;
    font-family: &quot;Montserrat&quot;,sans-serif;
    text-shadow: 1px 0px 2px #afafaf;
">Why Us:</h1>
<hr>
    </center>
    <br><br>
    <p>Jblock Technologies is the cheapest and most technical IT Staffing firm around. We only charge 5% of the first years salary up front, and an additional 5% charge only if the IT professional you've hired with us stays at your facility for over 6 months. Besides that, we give in depth technical screenings to all candidates before sending them to you, making sure they are both presentable and skilled enough to do the job. </p>
<br><br><br>
    <div style="width: 100%; background: #fff;">
        <center>
            <a href="contact.php" style="font-size: 24px; text-shadow: 1px 2px 11px #272727; color: #fff;"><button class="ownerHeaderButtons greenButton animated fadeIn">Contact Jblock Technologies</button></a>
    </center>
    </div>
    
  

</div> 
</div>
<div style="width: 100%; padding-left: 3%;padding-right: 3%;">

    
</div>







<? include 'footer.php' ?>



<script type="text/javascript" src="https://platform.linkedin.com/badges/js/badge.js" async defer></script>

</body>

<!-- Subscribe Modal -->
<div id="owners" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px;height: 100%;overflow-y: scroll;"><img src="images/logo.png" style="width: 27%;">
    
      <i onclick="document.getElementById('owners').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
    <center>
    <h1> Meet the owners</h1><hr style="
    WIDTH: 70%;
">
    <div>
   
    <img src="images/jblock.jpg" style="
    height: 222px;
    width: 222px;
">
    <div>
    <h1>Julian Block</h1>
    <p>Founder || CTO </p>
    Julian Block is the Chief Technical officer for Jblock Technologies. He is an experienced Software Engineer in the Government, Private Healthcare, Utility and Cloud Computing industries. Through the course of his career, he grew a passion for the recruiting industry and decided to mesh his technical skills obtained through his career to create the technical staffing firm Jblock Technologies. 
<hr>
</div>
    </div>
    
    <div>
   
    <img src="images/loka.jpg" style="
    height: 222px;
    width: 222px;
">
    <div>
    <h1>Logan Gist</h1>
    <p>Founder || CRO </p>
    Login Gist is the Chief Recruiting Officer for Jblock Technologies and has a true passion for recruiting in every industry. He is an efficient candidate sourcer and is always welcoming and kind to those around him. He is passionate about finding every person a job since he believes there's always a perfect job out there for everyone, no matter who you are. 
<hr>
</div>
    </div>
    
    
</center>
    </div>
</div>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>

</html>