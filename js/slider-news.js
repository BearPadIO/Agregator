let outerSlider = new Splide( '#outer-slider', {
    type   : 'loop',
    fixedWidth : '16.2rem',
    gap        : '1rem',
    perMove: 1,
    height: '400px',
    wheel : true,
} );

let innerSliderSec = new Splide( '#inner-slider-2', {
    type: 'slide',
    height: "100%",
    fixedHeight : '3.5rem',
    gap : '1rem',
    perMove: 1,
    direction   : 'ttb',
    paginationDirection: 'ttr',
    wheel    : true,
    pagination : false,
    drag : "false",
} );

let innerSliderThird = new Splide( '#inner-slider-3', {
    type: 'slide',
    height: "100%",
    fixedHeight : '3.5rem',
    gap : '1rem',
    perMove: 1,
    direction   : 'ttb',
    paginationDirection: 'ttr',
    wheel    : true,
    pagination : false,
    drag : "false",
} );

let innerSliderFour = new Splide( '#inner-slider-4', {
    type: 'slide',
    height: "430px",
    fixedHeight : '3.5rem',
    gap : '1rem',
    perMove: 1,
    direction   : 'ttb',
    paginationDirection: 'ttr',
    wheel    : true,
    pagination : false,
    drag : "false",
} );

let innerSliderFive = new Splide( '#inner-slider-5', {
    type: 'slide',
    height: "430px",
    fixedHeight : '3.5rem',
    gap : '1rem',
    perMove: 1,
    direction   : 'ttb',
    paginationDirection: 'ttr',
    wheel    : true,
    pagination : false,
    drag : "false",
} );

innerSliderThird.mount();
innerSliderSec.mount();
innerSliderFour.mount();
innerSliderFive.mount();
outerSlider.mount();