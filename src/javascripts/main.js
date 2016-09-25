(function() {
    "use strict";
    console.log('JAVASCRIPT');

    // Vanilla
    document.addEventListener('DOMContentLoaded', function() {
        console.log('OnReady');

        window.addEventListener('resize', setWindowSize);

        function setWindowSize() {
            // if($(this).height() != height){
                // height = $(this).height();
                console.log('resze');

            // }


            var n = document.querySelectorAll(".panel-body");

            var tallest = 0;

                    for (var i = 0; i < n.length; i++) {
                        console.log(""+n[i].offsetHeight);
                        if (n[i].offsetHeight > tallest){
                            tallest = n[i].offsetHeight;
                        }
                    }

                    for (var i = 0; i < n.length; i++) {
                        n[i].style.height = tallest + "px";
                    }
        }

        setWindowSize();

    })

})();
