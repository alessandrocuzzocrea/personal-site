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
                    for (var i = 0; i < n.length; i++) {
                        console.log(""+n[i].offsetHeight);
                        n[i].style.height = "460px";
                    }
        }

        setWindowSize();

    })

})();
