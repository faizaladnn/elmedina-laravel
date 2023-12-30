window.transitionToPage = function(href) {
    document.querySelector('body').style.opacity = 0
    setTimeout(function() { 
        window.location.href = href
    }, 500)
}

document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('body').style.opacity = 1
})

$(".navbar-toggle").click(function(){
  $(".collapse").collapse('show');
});


// Close the dropdown if user clicks outside of it
document.addEventListener("click", function (e) {
  if (!document.querySelector(".navbar").contains(e.target) && !document.querySelector(".navbar").contains(e.target)) {
    $(".navbar-ex1-collapse").collapse('hide');
  }
});
//jQuery to collapse the navbar on scroll
var header_height  = $('.navbar').height(),
    intro_height    = $('.intro-section').height(),
    offset_val = intro_height + header_height;
    $(window).scroll(function() {
    var scroll_top = $(window).scrollTop();
        if (scroll_top >= offset_val) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
          $(".navbar-fixed-top").removeClass("navbar-transparent");
        } else {
          // $(".navbar-fixed-top").removeClass("top-nav-collapse");
          // $(".navbar-fixed-top").addClass("navbar-transparent");
        }
    });

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Get the button
let mybutton = document.getElementById("goToBottomButton");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    var element = document.getElementById('intro');
    $('html, body').animate({
        scrollTop: (getOffset2(element).top-50)
    }, 1000);
}

function getOffset2( el ) {
    var _x = 0;
    var _y = 0;
    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
        _x += el.offsetLeft - el.scrollLeft;
        _y += el.offsetTop - el.scrollTop;
        el = el.offsetParent;
    }
    return { top: _y, left: _x };
}

gsap.registerPlugin(ScrollTrigger);
// REVEAL //
gsap.utils.toArray(".revealUp").forEach(function (elem) {
  ScrollTrigger.create({
    trigger: elem,
    start: "top 80%",
    end: "bottom 10%",
    // markers: true,
    onEnter: function () {
      gsap.fromTo(
        elem,
        { y: 100, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeave: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    },
    onEnterBack: function () {
      gsap.fromTo(
        elem,
        { y: -100, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeaveBack: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    }
  });
});



function showType(type) {
    // let packageType = type.getAttribute("data-package-type");
    // console.log(packageType);
    
    // var x = document.getElementById("package-list");
    // x.style.display = "none";
}


jQuery(document).ready(function ($) {
    $('.radio-button').on('click', function (e) {
        var value = $(this).val();
        $("#newBranch").empty();
        var newBranch = "";
        switch (value) {
            case "shah-alam":
                newBranch = "Shah Alam"
                break;
            case "kuantan":
                newBranch = "Kuantan"
                break;
            default:
                break;
        }

        $("#newBranch").text(newBranch);
    });
});

jQuery(document).ready(function ($) {
    $('.radio-button-time').on('click', function (e) {
        var value = $(this).val();
        console.log(value);

        $("#newTime").text(value);
    });
});


jQuery(document).ready(function ($) {

  if (window.location.pathname.substring(1, 11) == "v2/booking") {
    _d = function(id){
      return document.getElementById(id);
    }
    var mylib = {};
    mylib.calendar = {};
    mylib.calendar.months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    mylib.calendar.weekdays = ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"];
    mylib.calendar.currentDate = new Date();
    
    mylib.calendar.setDateLabels = function(){
      var d = this.currentDate;
      _d("day").innerText = d.getDate();
      _d("month").innerText = this.months[d.getMonth()];
      _d("year").innerText = d.getFullYear();
      _d("title").innerText = this.weekdays[d.getDay()] + ", " + d.getDate() + " " + this.months[d.getMonth()] + " " + d.getFullYear();
      var month = d.getMonth() + 1;
      var day = d.getDate();
  
      if (d.getMonth() + 1 < 10) {
        month = "0" + (d.getMonth() + 1);
      }
  
      if (d.getDate() < 10) {
        day = "0" + (d.getDate());
      }
  
  
  
      var bookingDate = d.getFullYear() + "-" + month + "-" + day ;
      _d("bookingDate").value = bookingDate;
      $("#newDate").text(bookingDate);
    }
    
    mylib.calendar.setDateLabels();
    
    addDay = function(numberOfDays){
      var oldDate = mylib.calendar.currentDate;
      mylib.calendar.currentDate.setDate(oldDate.getDate() + numberOfDays);
      mylib.calendar.setDateLabels();
    }
    
    // TODO: Use addDay() function for adding month
    addMonth = function(numberOfMonths){
      var oldDate = mylib.calendar.currentDate;
      mylib.calendar.currentDate.setMonth(oldDate.getMonth() + numberOfMonths);
      mylib.calendar.setDateLabels();
    }
    
    // TODO: Use addDay() function for adding Year
    addYear = function(numberOfYears){
      var oldDate = mylib.calendar.currentDate;
      mylib.calendar.currentDate.setFullYear(oldDate.getFullYear() + numberOfYears);
      mylib.calendar.setDateLabels();
    }
    
  }
});

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    //  delay: 2500,
     delay: 3000,
     disableOnInteraction: false,
  },
  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev",
  // },
});