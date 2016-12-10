//Dynamically add the main information
var source = $("#main-information").html();
//Convert to template
var template = Handlebars.compile(source);
//Create the fill in data
var data = {
	showname:'Female Gaze',
	showSubHeader: "by Soliana Habte",
	clickShow: function() {	
			$('h2').click(function(){
				alert('Click');
			});
	}
 };
//Send the data in to the template
var newListItemHTML = template(data);
//Append it to your document
$('body').append(newListItemHTML);



//Dynamically add the main images in the gallery
var source = $(".gallery").html();
//Convert to template
var template = Handlebars.compile(source);
//Create the fill in data

//Append it to your document
for (x=0; x<3; x++) {

	var data = {
			url:'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVay3iVUL1fN_ak4WlUA64yAe6IxX8YZHXQd_aX-lYlBEs4J9F',
			alt:"Person",
			index: x,
			click: function(index){
				console.log(data.alt);
			}
	};
	//Send the data in to the template
	var newListItemHTML = template(data);
	$('body').append(newListItemHTML);
}



	