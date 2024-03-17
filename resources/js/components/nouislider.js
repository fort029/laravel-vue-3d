import noUiSlider from 'nouislider';

(function () {
    document.addEventListener('DOMContentLoaded', () => {
        var priceSliders = document.querySelectorAll('.filter-price') || [];

        const createPriceSlider = (priceSlider) => {
            const parentElem = priceSlider.closest('.widget-filter-price');

            noUiSlider.create(priceSlider, {
                start: [0, 1000],
                connect: true,
                tooltips: [true, true],
                range: {
                    'min': 0,
                    'max': 100
                },
                pips: {
                    mode: 'values',
                    values: [0, 25, 50, 75, 100],
                    density: 100
                }
            });

            var filterMinInput = parentElem ? parentElem.querySelector('.filter-min') : false;
            var filterMaxInput = parentElem ? parentElem.querySelector('.filter-max') : false;
            const inputs = [filterMinInput, filterMaxInput]

            priceSlider.noUiSlider.on('update', function (values, handle) {
                inputs[handle].value = values[handle];
                inputs[handle].dispatchEvent(new Event('input'));
            });

            filterMinInput.addEventListener('change', function () {
                priceSlider.noUiSlider.set([this.value, null]);
            });

            filterMaxInput.addEventListener('change', function () {
                priceSlider.noUiSlider.set([null, this.value]);
            });
        }

        priceSliders.forEach((priceSlider) => {
            createPriceSlider(priceSlider);
        });

    });
})();