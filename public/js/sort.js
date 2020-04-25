var $range = $("#range");
var $inputFrom = $("#price_one");
var $inputTo = $("#price_two");
var instance;
var min = 0;
var max = 2000;
var from = document.getElementById('price_one').value;
var to = document.getElementById('price_two').value;

$range.ionRangeSlider({
    skin: "round",
    type: "double",
    grid: true,
    min: min,
    max: max,
    to: to,
    from: from,
    onStart: updateInputs,
    onChange: updateInputs,
    onFinish: updateInputs
});
instance = $range.data("ionRangeSlider");

function updateInputs (data) {
    from = data.from;
    to = data.to;

    $inputFrom.prop("value", from);
    $inputTo.prop("value", to);
}

$inputFrom.on("change", function () {
    var val = $(this).prop("value");

    // validate
    if (val < min) {
        val = min;
    } else if (val > to) {
        val = to;
    }

    instance.update({
        from: val
    });

    $(this).prop("value", val);

});

$inputTo.on("change", function () {
    var val = $(this).prop("value");

    // validate
    if (val < from) {
        val = from;
    } else if (val > max) {
        val = max;
    }

    instance.update({
        to: val
    });

    $(this).prop("value", val);
});
