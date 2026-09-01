$(function(){
    
// smooth scroll
//animation scroll js
    var html_body = $('html, body');
    $('.navbar-nav .nav-link').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                html_body.animate({
                    scrollTop: target.offset().top - 0
                }, 1500);
                return false;
            }
        }
    });
   
    
  
// sticky menu
$(window).on('scroll', function(){
    
var scrolling = $(this).scrollTop();
var $logo = $(".navbar-brand img");
const $button = $("#Nav_form button");
const $form_input = $("#Nav_form .searchinput");
    
if(scrolling > 500){
    $(".navbar").addClass("menu-bg");
    // swap to logo2 when scrolled down
    $logo.attr("src", "images/logo2.png");
    $button.removeClass("btn-dark").addClass("btn-white");
    $form_input.removeClass("border-black").addClass("border-white");
  } else {
    $(".navbar").removeClass("menu-bg");
    // revert to original logo when near top
    $logo.attr("src", "images/logo.png");
    $button.removeClass("btn-white").addClass("btn-dark");
    $form_input.removeClass("border-white").addClass("border-black");
  }
    
// back to top fade in/out



});
 
 
    
    
    
    
    // back to top button
$(window).on("scroll", function() {
  var scrolling = $(this).scrollTop();
  var back2top = $(".top");

  if (scrolling > 500) {
    back2top.css("opacity", "1");
  } else {
    back2top.css("opacity", "0");
  }
});
    
    // back to top button
$(window).on("scroll", function() {
  var scrolling = $(this).scrollTop();
  var back3bottom = $(".bottom");

  if (scrolling > 500) {
    back3bottom.css("opacity", "1");
  } else {
    back3bottom.css("opacity", "0");
  }
});


   // back to top button
$(window).on("scroll", function() {
  var scrolling = $(this).scrollTop();
  var back4bottom = $(".middle");

  if (scrolling > 500) {
    back4bottom.css("opacity", "1");
  } else {
    back4bottom.css("opacity", "0");
  }
});
    
    
   // back to top button
$(window).on("scroll", function() {
  var scrolling = $(this).scrollTop();
  var back3upper_top = $(".upper_top");

  if (scrolling > 500) {
    back3upper_top.css("opacity", "1");
  } else {
    back3upper_top.css("opacity", "0");
  }
});

    
    
    // isotope filter
// isotope init
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  filter: function() { return false; } // hide all initially
});

// bind filter button click
$('.filters-button-group').on('click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.button-group').each(function(i, buttonGroup) {
  var $buttonGroup = $(buttonGroup);
  $buttonGroup.on('click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $(this).addClass('is-checked');
  });
});

$('.mydesigns').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  arrows: false, // hide default arrows
  centerMode: true,
  speed: 1000,
  centerPadding: '0px'
});

// Bind custom buttons
$('.prevBtn').on('click', function(){
  $('.mydesigns').slick('slickPrev');
});
$('.nextBtn').on('click', function(){
  $('.mydesigns').slick('slickNext');
});



$('.mydesigns2').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  arrows: false, // hide default arrows
  centerMode: true,
  speed: 1000,
  centerPadding: '0px'
});

$('.prevBtn2').on('click', function(){
  $('.mydesigns2').slick('slickPrev');
});
$('.nextBtn2').on('click', function(){
  $('.mydesigns2').slick('slickNext');
});






$('.mydesigns3').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  arrows: false, // hide default arrows
  centerMode: true,
  speed: 1000,
  centerPadding: '0px'
});

$('.prevBtn3').on('click', function(){
  $('.mydesigns3').slick('slickPrev');
});
$('.nextBtn3').on('click', function(){
  $('.mydesigns3').slick('slickNext');
});




$('.mydesigns4').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  arrows: false, // hide default arrows
  centerMode: true,
  speed: 1000,
  centerPadding: '0px'
});

$('.prevBtn4').on('click', function(){
  $('.mydesigns4').slick('slickPrev');
});
$('.nextBtn4').on('click', function(){
  $('.mydesigns4').slick('slickNext');
});



$('.mydesigns5').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  arrows: false, // hide default arrows
  centerMode: true,
  speed: 1000,
  centerPadding: '0px'
});

$('.prevBtn5').on('click', function(){
  $('.mydesigns5').slick('slickPrev');
});
$('.nextBtn5').on('click', function(){
  $('.mydesigns5').slick('slickNext');
});
});











const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

// Each entry can have its own speed
const textArray = [
  { text: "360", typingDelay: 150, erasingDelay: 75 },
  { text: "Engineering & Consultancy", typingDelay: 80, erasingDelay: 40 }
];

const newTextDelay = 500; // pause before erasing
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  const { text, typingDelay } = textArray[textArrayIndex];

  if (charIndex < text.length) {
    if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += text.charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  const { text, erasingDelay } = textArray[textArrayIndex];

  if (charIndex > 0) {
    if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = text.substring(0, charIndex - 1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if (textArrayIndex >= textArray.length) textArrayIndex = 0;
    setTimeout(type, textArray[textArrayIndex].typingDelay + 500);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  if (textArray.length) setTimeout(type, 500);
});








