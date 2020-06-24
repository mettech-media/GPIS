           // Responsive Nav

           $(document).ready(function() {
             $(".menu-icon").on("click", function() {
               $("nav ul").toggleClass("showing");
             });
           });

           // Scrolling Effect

           $(window).on("scroll", function() {
             if ($(window).scrollTop()) {
               $('nav').addClass('black');
             } else {
               $('nav').removeClass('black');
             }
           })

           // Statistics Scrolling Animation


           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1000) {
               $(".acts").addClass("animate__backInUp");
             }
             else{
                $(".acts").removeClass("animate__backInUp");
             }
           })

           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1500) {
               $(".col-sm-6").addClass("animate__backInLeft");
             }
             else{
                $(".col-sm-6").removeClass("animate__backInLeft");
             }
           })


           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1500) {
               $(".location").addClass("animate__backInLeft");
             }
             else{
                $(".location").removeClass("animate__backInLeft");
             }
           })
           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1500) {
               $(".enquire").addClass("animate__backInRight");
             }
             else{
                $(".enquire").removeClass("animate__backInRight");
             }
           })


           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1550) {
               $(".fa-instagram").addClass("animate__backInUp");
             }
             else{
                $(".fa-instagram").removeClass("animate__backInUp");
             }
           })

           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1550) {
               $(".fa-whatsapp").addClass("animate__backInDown");
             }
             else{
                $(".fa-whatsapp").removeClass("animate__backInDown");
             }
           })

           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1550) {
               $(".fa-facebook").addClass("animate__backInUp");
             }
             else{
                $(".fa-facebook").removeClass("animate__backInUp");
             }
           })
           $(window).scroll(function() {
             var scroll = $(window).scrollTop();
             if (scroll > 1550) {
               $(".fa-phone").addClass("animate__backInDown");
             }
             else{
                $(".fa-phone").removeClass("animate__backInDown");
             }
           })

           var prevScrollpos = window.pageYOffset;
           window.onscroll = function() {
             var currentScrollPos = window.pageYOffset;
             if (prevScrollpos > currentScrollPos) {
               document.getElementById("nav").style.top = "0px";
               document.getElementById("nav").style.transition = "0.3s";
             } else {
               document.getElementById("nav").style.top = "-77px";
               document.getElementById("nav").style.transition = "0.3s";
             }
             prevScrollpos = currentScrollPos;
           }
