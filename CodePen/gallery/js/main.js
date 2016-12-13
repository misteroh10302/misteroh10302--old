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

// //Append it to your document
// for (x=0; x<3; x++) {

// 	var data = {
// 			url:'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVay3iVUL1fN_ak4WlUA64yAe6IxX8YZHXQd_aX-lYlBEs4J9F',
// 			alt:"Person",
// 			index: x,
// 			click: function(index){
// 				console.log(data.alt);
// 			}
// 	};
// 	//Send the data in to the template
// 	var newListItemHTML = template(data);
// 	$('body').append(newListItemHTML);
// }

//Make request to tumblr
var request = $.ajax({  url: "http://api.tumblr.com/v2/blog/natalieomoore.tumblr.com/posts?api_key=V0EUYuGTiPOFIY0gxZbuOJTIUYwPQX49i6wOHUkwrwiNfCfjtw&limit=50",
    dataType: 'jsonp',
    success: function(posts){
    	for (x=0; x<10; x++ ) {
    		var imageURL = posts.response.posts[x].photos[0].original_size.url
	    	$('body').append('<img src="'+imageURL+'">');

	    }
    	
    	x=11;
    	$(window).scroll(function() {
    		var nearToBottom = 200;

			if ($(window).scrollTop() + $(window).height() > 
			    $(document).height() - nearToBottom) { 
			 			// console.log(posts.response.posts.length);
			    		var imageURL = posts.response.posts[x].photos[0].original_size.url
			    		$('body').append('<img class="new" src="'+imageURL+'">');
			    			
			    		x+=1;
			    		console.log(x);
			} 
	    	
    	});
    	
    },
    error: function() {
    	alert('error getting tumblr data');
    }
});


$('img').addClass('lazy');

$("img.lazy").lazyload({
    effect : "fadeIn",
    threshold : -100
});
	