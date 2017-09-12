		
$(function(){


	/*  Gallery lightBox
 	================================================*/ 

 	if( $(".lightbox").length > 0 ) {

		$(".lightbox").prettyPhoto();
		
	}

	/*  Owl carousel
 	================================================*/ 

 	if( $(".owl-carousel").length > 0 ) {

		$(".owl-carousel").owlCarousel({

			 margin:25,
			 stagePadding: 25,
	   		 nav:true,
	   		 navText: [
		      "<i class='glyphicon glyphicon-chevron-left'></i>",
		      "<i class='glyphicon glyphicon-chevron-right'></i>"
		    ],
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:4
		        },
		        1000:{
		            items:8
		        }
		    }

		});
	}


	 /* Contact form ajax Handler
    ================================================*/

    $(".ajax-form").on('submit', function() {
    	var form = $(this);
        var formURL = $(this).attr("action");
        var postData = $(this).serializeArray();

        $.ajax({
            url: formURL,
            type: 'POST',
            data: postData,
            dataType: 'json',

            success:function(data, textStatus, jqXHR){

                if(data.success==1){

                    form.find(".alert").fadeOut();
                    form.find(".alert-success").html(data.message);
                    form.find(".alert-success").fadeIn(600);
                    

                }else{

                	form.find(".alert").fadeOut();
                    form.find(".alert-danger").html(data.message);
                    form.find(".alert-danger").fadeIn(600);

                }
            },

            error: function(jqXHR, textStatus, errorThrown)  { 
                
                console.log(errorThrown);
            }

        });
            

        return false;
     })



    /*
	On scroll animations
	================================================
	*/


    var $elems = $('.animate-onscroll');

    var winheight = $(window).height();
    var fullheight = $(document).height();
 
    $(window).scroll(function(){
        animate_elems();
    });



    function animate_elems() {

	    wintop = $(window).scrollTop(); // calculate distance from top of window
	 
	    // loop through each item to check when it animates
	    $elems.each(function(){
	    	
	      $elm = $(this);
	 
	      if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
	 
	      topcoords = $elm.offset().top; // element's distance from top of page in pixels
	 
	      if(wintop > (topcoords - (winheight*.75))) {
	        // animate when top of the window is 3/4 above the element
	        $elm.addClass('animated');
	      }

	    });

	  } // end animate_elems()

	


 	/*  Google map Script
 	====================================================*/ 

	function initMap() {

  		
  		var mapLatitude = 31.423308 ; // Google map latitude 
  		var mapLongitude = -8.075145 ; // Google map Longitude  

	    var myLatlng = new google.maps.LatLng( mapLatitude, mapLongitude );

	    var mapOptions = {

	            center: myLatlng,
	            mapTypeId: google.maps.MapTypeId.ROADMAP,
	            zoom: 10,
	            scrollwheel: false
	          };   

	    var map = new google.maps.Map(document.getElementById("contact-map"), mapOptions);

	    var marker = new google.maps.Marker({
	    	
	      position: myLatlng,
	      map : map,
	      
	    });

	    // To add the marker to the map, call setMap();
	    marker.setMap(map);

	    // Map Custom style
	    var styles = [
		  {
		    stylers: [
		      { hue: "#1f76bd" },
		      { saturation: 80 }
		    ]
		  },{
		    featureType: "road",
		    elementType: "geometry",
		    stylers: [
		      { lightness: 80 },
		      { visibility: "simplified" }
		    ]
		  },{
		    featureType: "road",
		    elementType: "labels",
		    stylers: [
		      { visibility: "off" }
		    ]
		  }
		];

		map.setOptions({styles: styles});

	};

	if( $("#contact-map").length > 0 ) {

		initMap();
		
        }
});

function mascara(o,f){
v_obj=o;
v_fun=f;
setTimeout("execmascara()",1);
}
function execmascara(){
v_obj.value=v_fun(v_obj.value);
}
function mtel(v){
v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
v=v.replace(/^(\d{2})(\d)/g,"($1)$2"); //Coloca parênteses em volta dos dois primeiros dígitos
v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
return v;
}

function getByclass( el ){
return document.getElementsByClassName( el );
}
window.onload = function(){
var elems = document.getElementsByClassName( 'mascara-telefone' );

for (var i = 0; i < elems.length; i++ ) {
elems[i].onkeypress = function(){
mascara( this, mtel );
}
}
};

function cpmascara(o,f){
v_obj=o;
v_fun=f;
setTimeout("cpfmascara()",1);
}
function cpfmascara(){
v_obj.value=v_fun(v_obj.value);
}
function mcpf(v){
        v=v.replace(/\D/g, "");
        v=v.replace(/^(\d{3})(\d{3})?(\d{3})?(\d{2})?/, "$1.$2.$3-$4");
return v;
}

function getByclass( pf ){
return document.getElementsByClassName( pf );
}
window.onload = function(){
var elems = document.getElementsByClassName( 'mascara-cpf' );

for (var i = 0; i < elems.length; i++ ) {
elems[i].onkeypress = function(){
cpmascara( this, mcpf );
}
}
};

function rmascara(o,f){
v_obj=o;
v_fun=f;
setTimeout("rgmascara()",1);
}
function rgmascara(){
v_obj.value=v_fun(v_obj.value);
}
function mrg(v){
        v=v.replace(/\D/g, "");
        v=v.replace(/^(\d{2})(\d{3})?(\d{3})?([:alnum:]{1})?/, "$1.$2.$3-$4");
return v;
}

function getByclass( rg ){
return document.getElementsByClassName( rg );
}
window.onload = function(){
var elems = document.getElementsByClassName( 'mascara-rg' );

for (var i = 0; i < elems.length; i++ ) {
elems[i].onkeypress = function(){
rmascara( this, mrg );
}
}
};

function pjmascara(o,f){
v_obj=o;
v_fun=f;
setTimeout("cnpjmascara()",1);
}
function cnpjmascara(){
v_obj.value=v_fun(v_obj.value);
}
function mcnpj(v){
        v=v.replace(/\D/g, "");
        v=v.replace(/^(\d{2})(\d{3})?(\d{3})?(\d{4})?(\d{2})?/, "$1.$2.$3/$4-$5");
return v;
}

function getByclass( pj ){
return document.getElementsByClassName( pj );
}
window.onload = function(){
var elems = document.getElementsByClassName( 'mascara-cnpj' );

for (var i = 0; i < elems.length; i++ ) {
elems[i].onkeypress = function(){
pjmascara( this, mcnpj );
}
}
};