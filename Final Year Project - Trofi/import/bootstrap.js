// ---------Responsive-navbar-active-animation-----------
function test(){
  var tabsNewAnim = $('#navbarSupportedContent');
  var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
  var activeItemNewAnim = tabsNewAnim.find('.active');
  var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
  var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
  var itemPosNewAnimTop = activeItemNewAnim.position();
  var itemPosNewAnimLeft = activeItemNewAnim.position();
  $(".hori-selector").css({
    "top":itemPosNewAnimTop.top + "px", 
    "left":itemPosNewAnimLeft.left + "px",
    "height": activeWidthNewAnimHeight + "px",
    "width": activeWidthNewAnimWidth + "px"
  });
  $("#navbarSupportedContent").on("click","li",function(e){
    $('#navbarSupportedContent ul li').removeClass("active");
    $(this).addClass('active');
    var activeWidthNewAnimHeight = $(this).innerHeight();
    var activeWidthNewAnimWidth = $(this).innerWidth();
    var itemPosNewAnimTop = $(this).position();
    var itemPosNewAnimLeft = $(this).position();
    $(".hori-selector").css({
      "top":itemPosNewAnimTop.top + "px", 
      "left":itemPosNewAnimLeft.left + "px",
      "height": activeWidthNewAnimHeight + "px",
      "width": activeWidthNewAnimWidth + "px"
    });
  });
}
$(document).ready(function(){
  setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
  setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
  setTimeout(function(){ test(); });
});

function itemsa(){
  window.location.href = "trial.php";
}

function itemsb(){
  gsap.to(window, {duration: 1, scrollTo:".item2", ease: "power2.out"});
}

function itemsc(){
  gsap.to(window, {duration: 1, scrollTo:".item3", ease: "power2.out"});
}
function itemsd(){
  gsap.to(window, {duration: 1, scrollTo:".item4", ease: "power2.out"});
}
function itemse(){
  gsap.to(window, {duration: 1, scrollTo:".item5", ease: "power2.out"});
}
function itemsf(){
  gsap.to(window, {duration: 1, scrollTo:".item6", ease: "power2.out"});
}

function itemsg(){
  gsap.to(window, {duration: 1, scrollTo:".item7", ease: "power2.out"});
}



