import './about_me.css';

import $ from 'jquery';

import Slider from '/components/slider';

$(document).ready(() => {
    // Iterate through all the .slider blocks and make them dynamic
    $('.slider').each((i, obj) => {
        const slider = new Slider($(obj));
        slider.initialize();
    })
});