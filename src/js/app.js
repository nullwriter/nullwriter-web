import $ from 'jquery';
import 'bootstrap/dist/css/bootstrap.css';
import 'css/font-awesome.min.css';
import 'css/style.css';

$(document).ready(() => {
    "use strict";

    let navChildren = $("#sidebar-menu").children("a");
    let aArray = [];

    for (let i = 0; i < navChildren.length; i++) {
        let aChild = navChildren[i];
        let ahref = $(aChild).attr('href');
        aArray.push(ahref);
    }

    $("a[href='" + aArray[0] + "']").addClass("active");

    $(window).scroll(() => {
        decideMenuHighlight();
    });

    function decideMenuHighlight() {
        let windowPos = $(window).scrollTop();
        let windowHeight = $(window).height();
        let docHeight = $(document).height();

        for (let i = 0; i < aArray.length; i++) {
            let theID = aArray[i];

            let secPosition = $(theID).offset().top;
            secPosition = secPosition - 135;

            let divHeight = $(theID).height();
            divHeight = divHeight + 90;

            if (windowPos >= secPosition && windowPos < (secPosition + divHeight)) {
                $("a[href='" + theID + "']").addClass("active");
                removeActiveFromTheRest(aArray, theID);
            }
        }
    }

    function removeActiveFromTheRest(aArray, currId) {
        for (let i = 0; i < aArray.length; i++) {
            let currList = aArray[i];
            if (currList !== currId) {
                $("a[href='" + currList + "']").removeClass("active");
            }
        }
    }
    
    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click((event) => {
        
            // On-page links
          if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

              // Figure out element to scroll to
              let target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

              // Does a scroll target exist?
              if (target.length) {
                  // Only prevent default if animation is actually gonna happen
                  event.preventDefault();

                  $('html, body').animate({
                      scrollTop: target.offset().top
                  }, 1000, () => {
                      // Callback after animation
                      let $target = $(target);
                      if ($target.is(":focus")) { // Checking if the target was focused
                          return false;
                      } else {
                          $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                      }
                  });
              }
          }
      });

});


