
// $('.slide-banner').slick({
//     autoplay: false,
//     arrow: true,
//     dots: true,
//     slidesToShow: 1,
//     slidesToScroll: 1, 
//     prevArrow: '',
//     nextArrow: '',
// });

// $('.slide-prd').slick({
//     autoplay: false,
//     arrow: true,
//     dots: true,
//     slidesToShow: 3,
//     slidesToScroll: 1, 
//     prevArrow: '',
//     nextArrow: '',
//     responsive: [
//         {
//             breakpoint: 1023,
//             settings: {
//                 slidesToShow: 3,
//             }
//         },
//         {
//             breakpoint: 767,
//             settings: {
//                 slidesToShow: 2,
//             }
//         },
//         {
//             breakpoint: 480,
//             settings: {
//                 slidesToShow: 1,
//             }
//         }
//     ]
// });


// $('.slider-for').slick({
//     autoplay: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.slider-nav',
// });
// $('.slider-nav').slick({
//     autoplay:false,
//     arrow:false,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     responsive: [
//         {
//             breakpoint: 1024,
//             settings: {
//                 slidesToShow: 4,
//                 slidesToScroll: 3,
//                 infinite: true,
//                 dots: true
//             }
//         },
//         {
//             breakpoint: 600,
//             settings: {
//                 slidesToShow: 4,
//                 slidesToScroll: 2
//             }
//         },
//         {
//             breakpoint: 480,
//             settings: {
//                 slidesToShow: 4,
//                 slidesToScroll: 1
//             }
//         }
//     ],
//     asNavFor: '.slider-for',
//     dots: false,
//     focusOnSelect: true,
//     prevArrow: '', 
//     nextArrow: '', 
// });


// var numberSpinner = (function() {
//   $('.number-spinner>.ns-btn>a').click(function() {
//     var btn = $(this),
//       oldValue = btn.closest('.number-spinner').find('input').val().trim(),
//       newVal = 0;

//     if (btn.attr('data-dir') === 'up') {
//       newVal = parseInt(oldValue) + 1;
//     } else {
//       if (oldValue > 1) {
//         newVal = parseInt(oldValue) - 1;
//       } else {
//         newVal = 1;
//       }
//     }
//     btn.closest('.number-spinner').find('input').val(newVal);
//     console.log(newVal);
//   });
//   $('.number-spinner>input').keypress(function(evt) {
//     evt = (evt) ? evt : window.event;
//     var charCode = (evt.which) ? evt.which : evt.keyCode;
//     if (charCode > 31 && (charCode < 48 || charCode > 57)) {
//       return false;
//     }
//     return true;
//   });
// })();


// jQuery(document).ready(function( $ ) {
//   $("#menu").mmenu({
//      "extensions": [
//         "fx-menu-zoom"
//      ],
//      "counters": true
//   });
// });