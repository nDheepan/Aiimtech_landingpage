document.addEventListener('DOMContentLoaded', function () {
    var firstSlider = new Splide('#first-slider', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        breakpoints: {
            1360: {
                perPage: 2,
            },
            1170: {
                perPage: 1,
            },
            760: {
                perPage: 1,
            },
        },
        omitEnd: true,
        gap: '3em',
        width: '96%',
        rewind: true,
        classes: {
            pagination: 'splide__pagination active_dots',
            page: 'splide__pagination__page normal_dots',
        },
    });

    var secondSlider = new Splide('#second-slider', {
        type: 'loop',
        perPage: 1,
        perMove: 1,
        breakpoints: {
            1360: {
                perPage: 1,
            },
            1170: {
                perPage: 1,
            },
            760: {
                perPage: 1,
            },
        },
        omitEnd: true,
        gap: '2em',
        width: '95%',
        rewind: true,
        classes: {
            pagination: 'splide__pagination active_dots',
            page: 'splide__pagination__page normal_dots',
        },
    });

    var thirdSlider = new Splide('#third-slider', {
        type: 'loop',
        perPage: 4,
        perMove: 1,
        breakpoints: {
            1360: {
                perPage: 3,
            },
            1170: {
                perPage: 2,
            },
            760: {
                perPage: 1,
            },
        },
        omitEnd: true,
        gap: '2em',
        width: '95%',
        rewind: true,
        classes: {
            pagination: 'splide__pagination active_dots',
            page: 'splide__pagination__page normal_dots',
        },
    });

    firstSlider.mount();
    secondSlider.mount();
    thirdSlider.mount();
});