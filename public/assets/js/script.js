//toggle
$(document).ready(function(){
    
    $("#toggleBtn").click(function(){
        $("nav").show(1000);
        $("#toggleBtnClose").show(1000);
        $("#toggleBtn").hide(1000);
    });

    $("#toggleBtnClose").click(function(){
        $("nav").hide(1000);
        $("#toggleBtnClose").hide(1000);
        $("#toggleBtn").show(1000);
    });

  
});


//dropdown menu
$(document).ready(function(){
    $("#menu").click(function(){
        $(this).next('.dropdown').slideToggle();
    });
});


//dropdown for Account Registration
$(document).ready(function(){
    $("#account").click(function(){
        console.log('clickrd');
        $(this).next('.reg').slideToggle();
    });
    
});


//scroll back to the top of the page
$(".scrolltotop").click(function(event){
    event.preventDefault();
    $("html").animate({ scrollTop:0}, "slow");
});

