var Carousel2022 = function () {
    var self = this;
    self.slick;
    self.init = function () {
        self.slick = $('.classSlider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            asNavFor: ".classThumb"
        });
        $('.classThumb').slick({
            arrows: true,
            slidesToShow: 8,
            infinite: true,
            asNavFor: ".classSlider",
            centerMode: true,
            focusOnSelect: true
        });

        $(".classImagesModal .close").bind("click", self.hideModal);
        setTimeout(function () {
            $(".classImageLauncerImages .imageContainer").bind("click", function () {
                self.showModal($(this).attr("rel"));
            });
            $(".classImagesModal").css("opacity", 1);
            $(".classImagesModal").css("display", "none");
            $(".classImageLauncerImages .imageContainer").css("cursor", "pointer");
        }, 3000);

        $('.classSliderSP').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true
        });

    }
    self.showModal = function (n) {
        $(".classImagesModal").css("display", "flex");
        self.slick.slick('slickGoTo', n, false);
    }
    self.hideModal = function () {
        $(".classImagesModal").css("display", "none");
    }

}
$(document).ready(function () {
    var carousel2022 = new Carousel2022();
    carousel2022.init();
});
