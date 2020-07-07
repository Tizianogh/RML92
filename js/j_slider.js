  $(function () {
        var x, newX, left, down;

        $(".container").mousedown(function (e) {
            down = true;
            x = e.pageX;
            left = $(this).scrollLeft();
        });

        $(".container").mousemove(function (e) {
            e.preventDefault();
            if (down) {
                newX = e.pageX;
                $(this).scrollLeft(left + x - newX);
            }
        });

        $("body").mouseup(function (e) {
            down = false;
        });
        $("body").keydown(function (e) {
            left = $("div").scrollLeft();
            var articleWidth = $('article').width();
            var margin = 2 * parseInt($('article').css("marginLeft"));
            if (e.keyCode == 39)
                $("div").scrollLeft(left + articleWidth + margin);
            if (e.keyCode == 37)
                $("div").scrollLeft(left - articleWidth - margin);
        });

        //MOBILE
        var slideDiv = document.querySelector('.container');
        slideDiv.addEventListener('touchstart', function () {
            var touches = event.changedTouches;
            down = true;
            x = touches[0].pageX;
            left = $('.container').scrollLeft();
        });

        slideDiv.addEventListener('touchmove', function (event) {
            event.stopPropagation();
            var touches = event.changedTouches;
            if (down) {
                var newX = touches[0].pageX;
                $('.container').scrollLeft(left + x - newX);
            }
        });

        slideDiv.addEventListener('touchend', function () {
            down = false;
        });
    })();