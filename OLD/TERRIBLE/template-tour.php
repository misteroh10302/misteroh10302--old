<?php
/*
Template Name: TOUR Template
*/
?>
<style>



.general_box h3 {
      font-family: gt_light;

}
.modal #mc_embed_signup .mc-field-group {
    clear: left;
    position: relative;
    width: 70%!important;
    margin: 0 auto;
    padding-bottom: 0;
    border-bottom: 2px solid white;
    height: 42px !important;
    min-height: 20px !important;
}
.modal #mc_embed_signup .mc-field-group input {
      margin: 0 auto;
    width: 100% !important;
    font-size: 2rem;
    padding: 1rem;
    height: auto;
}
.modal div.mc-field-group ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white;
}
.modal ::-moz-placeholder { /* Firefox 19+ */
  color: white;
}
.modal  :-ms-input-placeholder { /* IE 10+ */
  color: white;
}
.modal  :-moz-placeholder { /* Firefox 18- */
  color: white;
}

.modal input#mc-embedded-subscribe input {
  color:white;
}

.nothing {
  border-bottom: 0px;
}

.nothing {
  text-align: center;
}

.nothing:hover {
  background-color: white;
  color:black;
}

.nothing:hover {
  cursor: default !important;
}

h2 {
      position: absolute;
    margin-top: -5.5rem;
    background-color: white;
    padding: 0rem 1rem;
        text-transform: uppercase;
            font-family: DIN_BOLD;
            font-size: 1.25em;

}

.upcomingevents h2 {
  color: black !important;
}
.general_box h2 {
      color: #5bff5b;
}
.modal li a:hover {
   color:#5BFF5B !important;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 133px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        z-index: 10000000;
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: black;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 70%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    border-radius: 0px;
}
.modal-header {
    padding: 15px;
    border-bottom: 0px solid #e5e5e5;
    min-height: 16.42857143px;
    background-color: white;
    color:black;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
    display: none;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:0px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:0px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    color: white;
    display: none;
}

.modal-body {padding: 4rem}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
.col-2:first-child {
      border-right: 2px solid white;
}
.col-2:nth-child(2) {
      padding-left: 4rem;
}

.modal a {
     color: white !important;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 100;
       font-family: DIN_REG;
}

.modal ul {
  list-style: none;
}

.modal li a {
      font-size: 2.25rem;
}
#myBtn {
     max-width: 150px;
    position: fixed;
    right: 130px;
    background-color: transparent;
    top: 70px;
    border: 0px;
    z-index: 900000000007;
}

#myBtn img {
  max-width: 150px;

}

.cog {
  top:24px;
  transition: 0.00025s;

}

	.wrap.container {
		margin-top: 4em;
	}

	.artists_main {
		max-width: 80%;
		margin: 0 auto;
	}

	.header-text {
		text-align:center;
		font-family: DIN_BOLD;
	}

	.header-text h2 {
		    font-family: DIN_BOLD;
	    text-transform: uppercase;
	    color: black;

	}

	img {
		max-width: 150px;
		margin: 0 auto;
	}


p {
  margin: 0;
  padding-bottom: 4px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.col {
  width: 25%; display:inline-block; text-align: left; vertical-align: top;
}

.artists_main a {
  margin: 0px;
  text-align: right;

     text-transform: capitalize;
     font-weight: 500;
    letter-spacing: .75px;
     font-size: .9em;
     float:none;

     text-decoration: none;

}

.date {
  width: 12%;
  padding-left: 1%;

}

.venue {
 width: 46%;
     padding-left: 8%;
}

.location {
   width: 27%;
}

.tickets {

      width: 14%;
    text-align: right;
     padding-right: 1%;
}


/*#theLoc {
	    margin-left: 10rem;
}*/
ul.events {
  margin: 0;
  padding: 32px;
  background: white;
  border:;
}
ul.events li {
  list-style-type: none;
  padding: 0 0 24px;
  overflow: hidden;
}
ul.events .date {
  float: left;
  width: 48px;
  margin-right: 16px;
  padding: 10px 4px;
  background: #ccc;
  text-align: center;
  color: #555;
}
ul.events .date .month {
  display: block;
  text-transform: uppercase;
}
ul.events .date .day {
  font-size: 1.25rem;
}

.events2 {
    max-width: 100%;
    margin: 0 auto;
    color:black ;
    font-family:DIN_BOLD;

    font-size: 1.5rem;
    padding: 4rem;
    margin: 2rem auto;
    border: 4px solid #5BFF5B;

}


.upcomingevents {
    max-width: 100%;
    margin: 0 auto;
    color:black ;
    font-family:DIN_BOLD;

    font-size: 1.5rem;
    padding: 4rem;
    margin: 2rem auto;
    border: 4px solid #5bff5b !important;

}

.upcomingevents article:hover{
      background-color: #5bff5b;
    color: black;
    cursor: pointer;
}

.upcomingevents article:hover > a {
    color: black !important;
}
.events3 {
    max-width: 100%;
    margin: 0 auto;
    color:black ;
    font-family:DIN_BOLD;

    font-size: 1.5rem;
    padding: 4rem;
    margin: 2rem auto;
    border: 4px solid #5BFF5B;

}

.events {
    max-width: 100%;
    margin: 0 auto;
    color:black ;
    font-family:DIN_BOLD;
    font-size: 1.5rem;
    padding: 4rem;
    margin: 2rem auto;
    border: 4px solid #5BFF5B;

}


.general_box {
    max-width: 100%;
    margin: 0 auto;
    color:black ;
        font-family: gt_Light;
    font-size: 1.5rem;
    padding: 4rem;
    margin: 6rem auto;
    border: 4px solid black;

}


.acrylics {
    max-width: 100%;
    margin: 0 auto;
    color:black ;

    font-size: 1.5rem;
    padding: 4rem;
    margin: 2rem auto;
    border: 4px solid black;

}

article {
    margin: 0rem 0rem;
    border-bottom: 2px solid black ;
    padding: 0rem;
}

article:hover {
   background-color: black;
  color: #5bff5b;
  cursor: pointer;
}
article:hover > a{
  color: #5bff5b !important;
}
article a {

    color:black;
    padding: .15rem .7rem;
    margin: 0rem .5rem;
    text-decoration: none;
    float:right;
    display: block;
    padding: 1rem 0rem;
}

.theshows h2 + h3 {
	text-transform: uppercase;
}

.col-2 {
  width: 49.5%;
  float:left;
}


.warp .container {
width:100%;}

.artists_main {
  max-width: 862px;
}

.artist {
        width: 16.9%;
    font-family: DIN_MED,DIN_BOLD;
    font-weight: bold;
    text-align: left !important;
        padding-left: 1%;
  }

.up-date {
  width: 12%;
}

.up-venue {
  width: 30%;
      width: 34%;
    padding: 0em 1rem;
}

.up-location {
  width: 23%;
}

.upcomingTickets {
  width: 13%;
  text-align: right;
    padding-right: 1%;
}


article:after{
     visibility: hidden;
     display: block;
     font-size: 0;
     content: " ";
     clear: both;
     height: 0;
     }
article { display: inline-block; }

article { display: block; }
/* close commented backslash hack */
@media screen and (max-width: 992px) {

  .col-2 li {
        text-align: center;
  }
  .wrap.container {
    margin-top: 0em;
}
.general_box h2 {
        color: #5bff5b;
    text-align: center;
    width: 60%;
    padding: 0em;
    position: initial;
    margin: auto;
    margin-bottom: 2em;
    margin-top: -2.25em;
    /* margin: auto; */
    font-size: 2rem;
}
  #myBtn img {
  max-width: 124px;

}
.location {
    width: 50%;
    padding-left: 2rem;
    text-align: center;
}

.date {
    width: 22%;
}
.tickets {
    width: 26%;
    text-align: right;
}
  .artist {
        width: 100%;
    padding-bottom: 1em;
  }
  .up-date {
    width: 24%;
    float: left;
}

.up-venue , .venue {
    display: none;
}


.up-location {
  float:left;
    width: 50%;
}

.upcomingTickets {
    width: 24%;
}
  .cog {
      background-color: transparent;
      border: 0px;
      position: fixed;

      top: inherit;
      z-index: 9000000;
          right: 1rem !important;
  }
  .artists_main {
      max-width: 100%;
      margin: 0 auto;
  }
  .general_box {
    max-width: 100%;
    margin: 0 auto;
    color: black;
    font-size: 1.25rem;
    padding: 3rem 1rem;
    margin: 6rem auto;

}

.col-2 {
    width: 100%;
    float: left;
}

.col-2:first-child {
    border-right: 0px solid white;
}
.col-2:nth-child(2) {
    padding-left: 0rem;
}

.modal {
    display: none;
    position: fixed;

    padding-top: 2rem;

}

.modal-body {
    padding: 2rem;
}

.modal-content {
  width: 90%;
}
}

</style>

<div class="artists_main">

<!-- 	<div class="header-text">
		<h2>Terrible</h2>

			<img src="http://terriblerecords.com/wp-content/uploads/2016/09/Screen-Shot-2016-08-31-at-9.37.15-PM.png" alt="globe">
		<h2>Shows</h2>
	</div> -->

	<div class="theshows">
		<div class="upcomingevents general_box">
			<h2>Upcoming Shows</h2>
		</div>

    <div class="acrylics general_box">
      <a name="acrylics"></a>
      <h2>Acrylics</h2>

    </div>


    <div class="events3 general_box">
      <a name="blood"></a>
      <h2>Blood Orange</h2>

    </div>


     <div class="cant general_box">
        <a name="cant"></a>
        <h2>Cant</h2>

     </div>

    <div class="chair general_box">
        <a name="chairlift"></a>
        <h2>Chairlift</h2>

     </div>

     <div class="classactress general_box">
        <a name="classactress"></a>
        <h2>Class Actress</h2>

     </div>

      <div class="diamond general_box">
        <a name="diamondterrifier"></a>
        <h2>Diamond Terrifier</h2>

     </div>

     <div class="dreller general_box">
        <a name="dreller"></a>
        <h2>Dreller</h2>

     </div>

   <div class="drool general_box">
        <a name="drool"></a>
        <h2>Drool</h2>

     </div>

    <div class="empressof general_box">
      <a name="empressof"></a>
      <h2>Empress Of</h2>

    </div>

    <div class="ginla general_box">
      <a name="ginla"></a>
      <h2>Ginla</h2>

    </div>

     <div class="horrid general_box">
        <a name="horridred"></a>
        <h2>Horrid Red</h2>

     </div>

      <div class="kindness general_box">
        <a name="kindness"></a>
        <h2>Kindess</h2>

     </div>

     <div class="kirin general_box">
        <a name="kirin"></a>
        <h2>Kirin J Callian</h2>

     </div>


     <div class="le1f general_box">
        <a name="le1f"></a>
        <h2>Le1f</h2>

     </div>

     <div class="miya general_box">
        <a name="miya"></a>
        <h2>Miya Folick</h2>
     </div>

     <div class="mizank general_box">
        <a name="mizank"></a>
        <h2>Mizan K</h2>
     </div>

     <div class="mosessumney general_box">
        <a name="mosessumney"></a>
        <h2>Moses Sumney</h2>
     </div>

    <div class="events general_box">
    <a name="porches"></a>
      <h2>Porches</h2>


    </div>

    <div class="public general_box">
    <a name="publicaccesstv"></a>
      <h2>Public Access T.V.</h2>


    </div>

    <div class="ramona general_box">
      <a name="ramonalisa"></a>
      <h2>Ramona Lisa</h2>


    </div>

    <div class="regaldegal general_box">
      <a name="regaldegal"></a>
      <h2>Regal Degal</h2>


    </div>

    <div class="sickfeeling general_box">
      <a name="sickfeeling"></a>
      <h2>Sick Feeling</h2>


    </div>



    <div class="solange general_box">
      <a name="solange"></a>
      <h2>Solange</h2>




    </div>

     <div class="springking general_box">
      <a name="springking"></a>
      <h2>Spring King</h2>


    </div>

     <div class="twinshadow general_box">
      <a name="twinshadow"></a>
      <h2>Twin Shadow</h2>


    </div>

		<!-- Trigger/Open The Modal -->
<button id="myBtn" class="cog">
  <img class="smallimg" class="little_cog" src="http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist.png" alt="">
</button>
	</div>
</div> <!-- end artists main container-->



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
     <div class="links">
       <ul class='clearfix'>
        <div class="col-2">
          <li><a href="#acrylics" onclick="return runMyFunction();">Acrylics</a></li>
          <li><a href="#blood"  onclick="return runMyFunction();">Blood Orange</a></li>
          <li><a href="#cant" onclick="return runMyFunction();">Cant</a></li>
          <li><a href="#chairlift" onclick="return runMyFunction();">Chairlift</a></li>
          <li><a href="#classactress" onclick="return runMyFunction();">Class Actress</a></li>
          <li><a href="#diamondterrifier" onclick="return runMyFunction();">Diamond Terrifier</a></li>
          <li><a href="#dreller" onclick="return runMyFunction();">Dreller</a></li>
          <li><a href="#drool" onclick="return runMyFunction();">Drool</a></li>
          <li><a href="#empressof"  onclick="return runMyFunction();">Empress Of</a></li>
          <li><a href="#ginla"  onclick="return runMyFunction();">Ginla</a></li>
          <li><a href="#horridred" onclick="return runMyFunction();">Horrid Red</a></li>
          <li><a href="#kindness" onclick="return runMyFunction();">Kindness</a></li>
        </div>
        <div class="col-2">
          <li><a href="#kirin" onclick="return runMyFunction();">Kirin J Callinan</a></li>
          <li><a href="#le1f" onclick="return runMyFunction();">Le1f</a></li>
          <li><a href="#miya" onclick="return runMyFunction();">Miya Folik</a></li>
          <li><a href="#mizank" onclick="return runMyFunction();">Mizan K</a></li>
          <li><a href="#mosessumney" onclick="return runMyFunction();">Moses Sumney</a></li>
          <li><a href="#porches" onclick="return runMyFunction();">Porches</a></li>
          <li><a href="#publicaccesstv" onclick="return runMyFunction();">Public Access TV</a></li>
          <li><a href="#ramonalisa" onclick="return runMyFunction();">Ramona Lisa</a></li>
          <li><a href="#regaldegal" onclick="return runMyFunction();">Regal Degal</a></li>
          <li><a href="#sickfeeling" onclick="return runMyFunction();">Sick Feeling</a></li>
          <li><a href="#solange" onclick="return runMyFunction();">Solange</a></li>
          <li><a href="#springking" onclick="return runMyFunction();">Spring king</a></li>
          <li><a href="#twinshadow" onclick="return runMyFunction();">Twin Shadow</a></li>
        </div>
       </ul>
     </div>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>


<script>

//*** Make the world rotate and turn
var $cog = $('.smallimg'),
    $other = $('.cog')
    $body = $(document.body),
    bodyHeight = $body.height();

$(window).scroll(function () {
    $cog.css({
        'transform': 'rotate(' + ($body.scrollTop() / bodyHeight * 360) + 'deg)'
    });

     // $other.css('top','1' + ($body.scrollTop()/0.005) +'px' );
});

/*****
*****************
*****/


//Modal!

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var link = document.getElementsByTagName('ul li');

// When the user clicks the button, open the modal
btn.onclick = function() {
  var theSrc = $('.smallimg').attr('src');
  var whitelogo =  'http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist_hover.png';
   var blacklogo =  'http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist_hover.png';

  if (theSrc == whitelogo) {
    $('.smallimg').attr('src','http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist.png');
  } else {
    $('.smallimg').attr('src','http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist_hover.png');

  }
  $('#myModal').toggle();

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    $('.smallimg').attr('src','http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist.png');

}

link.onclick = function() {
    modal.style.display = "none";
     $('.smallimg').attr('src','http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist.png');

}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
         $('.smallimg').attr('src','http://clone.terriblerecords.com/wp-content/uploads/2016/09/selectartist.png');

    }
}

function runMyFunction() {
   modal.style.display = "none";
}

/*****
*****************
*****/

//Smooth Scroll Plugin
    $(document).ready(function() {
      $('a[href^="#"]').click(function() {
          var target = $(this.hash);
          if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
          if (target.length == 0) target = $('html');
          $('html, body').animate({ scrollTop: target.offset().top-150 }, 1000);
          return false;
      });
    });

/*****
***************** Songkick Api's
*****/

///Upcoming Events
var url_terrible = "http://api.songkick.com/api/3.0/users/terriblerecords/calendar.json?reason=tracked_artist&apikey=GEqP0nAjI0ItrhoH&jsoncallback=?";

$.getJSON(url_terrible, function(data) {
   if (data.resultsPage.totalEntries == 0 ) {
        $('.upcomingevents').append("<article class='nothing'><h3>No Upcoming Shows...yet.</h3></article>");
  } else {

   var page = data.resultsPage.perPage;

   page = 20;

  var events = data.resultsPage.results.calendarEntry;


   var currentDate = new Date();
     var currentMonth = currentDate.getMonth();
  events.forEach(function(item, index, array) {
    var event = array[index].event.displayName;
    var date = array[index].event.start.date;
    var venue = array[index].event.venue.displayName;
    var link = array[index].event.uri;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var thecity = array[index].event.venue.metroArea.displayName;

    if( array[index].event.venue.metroArea.state == undefined ) {
      var theCity = array[index].event.venue.metroArea.displayName;
      var theCountry = array[index].event.venue.metroArea.country.displayName;
      var thecountry = theCity + ', ' + theCountry;

    }else {
      var theCity = array[index].event.venue.metroArea.displayName;
      var theState = array[index].event.venue.metroArea.state.displayName;
      var thecountry = theCity + ', '+ theState;


    }
    var theLocation =  thecountry;
    var artist = array[index].reason.trackedArtist[0].displayName;

    if ( d >= currentDate & d <= currentDate + 2) {
      return;
    } else{
      $('.upcomingevents').append('<a target="_blank" href='+ link+'><article><div class="col artist">'+artist+'</div> <div class="col up-date">'+ thedate +'</div><div class="col up-venue">'+ venue + '</div><span class="col up-location" id="theLoc">' +theLocation +'</span> <div class="col upcomingTickets">Buy Tickets</div></a></article>');
    }
     });
  }
});

//Acrylics
var url = 'https://api.songkick.com/api/3.0/artists/350421/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.acrylics').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.acrylics').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//blood orange
var url_blood = 'https://api.songkick.com/api/3.0/artists/631113/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url_blood, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.events').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.events3').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Cant
var url = 'https://api.songkick.com/api/3.0/artists/423919/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.cant').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.cant').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Chairlift
var url_chair= 'https://api.songkick.com/api/3.0/artists/567624/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url_chair, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.chair').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.chair').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Class Acrress
var url_class = 'https://api.songkick.com/api/3.0/artists/2496216/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url_class, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.classactress').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.classactress').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});



//Diamond
var url_diamond = 'https://api.songkick.com/api/3.0/artists/4569483/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url_diamond, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.diamond').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.diamond').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//Dreller
var url_dreller = 'https://api.songkick.com/api/3.0/artists/8616449/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url_dreller, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.dreller').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.dreller').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});



//Drool
var url_drool = 'https://api.songkick.com/api/3.0/artists/263338/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_drool, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.drool').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.drool').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

// Empress Of
var url_empress = 'https://api.songkick.com/api/3.0/artists/6092694/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_empress, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.empressof').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.empressof').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//Ginla
var url_ginla = 'https://api.songkick.com/api/3.0/artists/8376798/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_ginla, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.ginla').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.ginla').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Horrid Red
var url_horrid = 'https://api.songkick.com/api/3.0/artists/4333646/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_horrid, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.horrid').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.horrid').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//Kindness
var url_kind = 'https://api.songkick.com/api/3.0/artists/840994/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_kind, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.kindness').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.kindness').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//Kirin J Callian
var url_kirin = 'https://api.songkick.com/api/3.0/artists/1019694/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_kirin, function(data) {
  console.log(data);
  if (data.resultsPage.totalEntries == 0 ) {
        $('.kirin').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.kirin').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Moses Sumney
var url_moses = 'https://api.songkick.com/api/3.0/artists/6633539/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_moses, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.mosessumney').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.mosessumney').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//LEIF
var url_leif = 'https://api.songkick.com/api/3.0/artists/356118/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_leif, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.le1f').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.le1f').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Miya
var url_miya = 'https://api.songkick.com/api/3.0/artists/6546674/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_miya, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.miya').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.miya').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Mizan
var url_mizan = 'https://api.songkick.com/api/3.0/artists/8846499/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_mizan, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.mizank').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.mizank').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});



//Porches
var url_porches = 'https://api.songkick.com/api/3.0/artists/593368/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_porches, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.events').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.events').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});



//Public Access TV
var url_public = 'https://api.songkick.com/api/3.0/artists/7748914/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_public, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.public').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.public').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//ramonalisa
var url_ramona = 'https://api.songkick.com/api/3.0/artists/6265504/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_ramona, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.ramona').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.ramona').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//Regal Degal
var url_regal = 'https://api.songkick.com/api/3.0/artists/2913246/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_regal, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.regaldegal').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.regaldegal').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//Sick Feeling
var url_sick = 'https://api.songkick.com/api/3.0/artists/6814439/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_sick, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.sickfeeling').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.sickfeeling').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


//Solange
var url_solange = 'https://api.songkick.com/api/3.0/artists/131614/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_solange, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.solange').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.solange').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});

//Twin Shadow
var url_twin = 'https://api.songkick.com/api/3.0/artists/2921991/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';
$.getJSON(url_twin, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.twinshadow').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.twinshadow').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});


var url_spring = 'https://api.songkick.com/api/3.0/artists/6157999/calendar.json?apikey=GEqP0nAjI0ItrhoH&jsoncallback=?';

$.getJSON(url_spring, function(data) {
  if (data.resultsPage.totalEntries == 0 ) {
        $('.springking').append("<article class='nothing'><h3>Just can't wait to get on the road again.</h3></article>");
        return false;
  } else {
    var events = data.resultsPage.results.event;
    events.forEach(function(item, index, array) {
    var event = array[index].displayName;
    var event_performer = array[index].performance[0].artist.displayName;;
    var venue = array[index].venue.displayName;
    var link = array[index].uri;
    var date = array[index].start.date;
    var d = new Date(date);
    var current = new Date(d.getFullYear(), d.getMonth(), d.getDate()+1, 1);
    var year = current.getFullYear();
    var day = current.getDate();
    var month = current.getMonth()+1;
    var thedate = month + '/' + day + '/' + year;
    var theLocation = array[index].location.city;
    $('.springking').append('<article><a target="_blank" href='+ link+'><div class="col date">'+ thedate +'</div><div class="col venue">'+ venue + '</div><span class="col location" id="theLoc">' +theLocation +'</span> <div class="col tickets">Buy Tickets</div</a> </article>');  });
  }
});





// $(window).scroll(function(){
//   var scrollBottom = $(window).scrollTop() + $(window).height();
//   var pageheight = $(window).scrollTop();
//   var larger = pageheight-901;

//   console.log(scrollBottom +'==='+pageheight);

//   if (scrollBottom) {
//     $('#myBtn').css('position','absolute');
//   } else {
//     $('#myBtn').css('position','fixed');
//   }
// });

// $(window).scroll(function() {
//    if($(window).scrollTop() + $(window).height() > $(document).height() ) {
//        $('#myBtn').css('position','absolute');

//        $('#myBtn').css('width','200px');

//    } else {
//     var theTop = ($(window).scrollTop());
//      $('.cog').css('top',theTop);
//    }
// });

console.clear();
</script>
