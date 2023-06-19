window.transitionToPage = function(href) {
    document.querySelector('body').style.opacity = 0
    setTimeout(function() { 
        window.location.href = href
    }, 500)
}

document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('body').style.opacity = 1
})

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
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-fixed-top").addClass("navbar-transparent");
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

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 100) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
            $(".navbar-fixed-top").removeClass("navbar-transparent");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
      $(".navbar-fixed-top").addClass("navbar-transparent");
    }
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
            case "ulu-klang":
                newBranch = "Ulu Klang"
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