$(document).ready(function () {
    var guestList = ["alex-kingston", "gates-mcfadden", "robert-duncan-mcneill", "denis-lawson", "jewel-staite", "adam-baldwin"];

    var rotate = function (current) {
        $("div[class~=" + guestList[current] + "]").hide();
        current = (current + 1) % guestList.length;
        $("div[class~=" + guestList[current] + "]").show();
        window.setTimeout(function () { rotate(current); }, 4000);
    };

    for (var i = 0; i < guestList.length; i++) {
        if (i != 0) {
            var expr = "div[class~=" + guestList[i] + "]";
            var node = $(expr);
            node.hide();
        }
    }

    window.setTimeout(function () { rotate(0); }, 3000);
});
