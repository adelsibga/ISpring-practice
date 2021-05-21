require('./about_me.css');
require('./components/slider/slider.js');

import $ from 'jquery';

import Slider from "./components/slider/slider";

const slider1 = new Slider(".slidewrapper_1", ".images_1",
    ".next-btn_1", ".prev-btn_1", ".slide-nav-btn_1"
);
const slider2 = new Slider(".slidewrapper_2", ".images_2",
    ".next-btn_2", ".prev-btn_2", ".slide-nav-btn_2"
);
const slider3 = new Slider(".slidewrapper_3", ".images_3",
    ".next-btn_3", ".prev-btn_3", ".slide-nav-btn_3"
);

$(document).ready(function () {
    slider1.initialize();
    slider2.initialize();
    slider3.initialize();
})