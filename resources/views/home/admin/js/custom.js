function LHSAct(){
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    
    $('.sb2-13 ul li a').each(function(){
       if($(this).attr("href").toLowerCase()==filename){
        $('.sb2-13 ul li a').removeClass('menu-active');
        $(this).addClass('menu-active');
        $(this).parent().parent().parent().siblings("a").addClass('mact');
        $(this).parent().parent().parent(".collapsible-body").slideDown();
         }
    });
}

$(document).ready(function() {
	"use strict";
    LHSAct();
    // $('.chips').material_chip();
    // $('select').material_select();

    $('.select2-ui').select2({
        placeholder: "Select an option", // Placeholder text
        allowClear: true                // Enable clear button
      });


    $(".collapsible-header").on('click', function () {
        // Close all other collapsible bodies
        $(".collapsible-body").not($(this).siblings(".collapsible-body")).slideUp();
        
        // Toggle the clicked collapsible body
        $(this).siblings(".collapsible-body").slideToggle();
    });
	
    //GOOGLE MAP - SCROLL REMOVE
    $('.contact-map')
        .on('click', function() {
            $(this).find('iframe').addClass('clicked')
        })
        .on('mouseleave', function() {
            $(this).find('iframe').removeClass('clicked')
        });

   
});