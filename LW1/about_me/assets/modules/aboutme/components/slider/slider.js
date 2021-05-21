import '/aboutme.css';
import $ from 'jquery';

export default class Slider {
    constructor(slidewrapper, viewport, nextBtn, prevBtn, slideNavBtn) {
        this.slidewrapper = slidewrapper;
        this.viewport = viewport;
        this.nextBtn = nextBtn;
        this.prevBtn = prevBtn;
        this.slideNavBtn = slideNavBtn;

        this._slideNow = 1;
        this._slideCount = $(this.slidewrapper).children().length;
        this._slideInterval = 3000;
        this._navBtnId = 0;
    }

    initialize() {
        this.switchInterval = setInterval(this.nextSlide.bind(this), this._slideInterval);

        $(this.viewport).hover(() => {
            clearInterval(this.switchInterval);
        }, () => {
            this.switchInterval = setInterval(this.nextSlide.bind(this), this._slideInterval);
        });

        $(this.nextBtn).click(this.nextSlide.bind(this));
        $(this.prevBtn).click(this.prevSlide.bind(this));

        this.setNavBtn();
    }

    nextSlide() {
        let translateWidth;
        if (this._slideNow === this._slideCount || this._slideNow <= 0 || this._slideNow > this._slideCount) {
            $(this.slidewrapper).css('transform', 'translate(0, 0)');
            this._slideNow = 1;
        } else {
            translateWidth = -$(this.viewport).width() * (this._slideNow);
            $(this.slidewrapper).css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            this._slideNow++;
        }
    }

    prevSlide() {
        let translateWidth;
        if (this._slideNow === 1 || this._slideNow <= 0 || this._slideNow > this._slideCount) {
            translateWidth = -$(this.viewport).width() * (this._slideCount - 1);
            $(this.slidewrapper).css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            this._slideNow = this._slideCount;
        } else {
            translateWidth = -$('.images').width() * (this._slideNow - 2);
            $(this.slidewrapper).css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            this._slideNow--;
        }
    }

    setNavBtn() {
        const self = this;
        $(this.slideNavBtn).click(function () {
            let translateWidth;
            self._navBtnId = $(this).index();
            if (self._navBtnId + 1 !== self._slideNow) {
                translateWidth = -$(self.viewport).width() * (self._navBtnId);
                $(self.slidewrapper).css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
                self._slideNow = self._navBtnId + 1;
            }
        });
    }
}