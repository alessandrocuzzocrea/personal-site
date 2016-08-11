(function() {
    "use strict";
    console.log('JAVASCRIPT');

    // Vanilla
    document.addEventListener('DOMContentLoaded', function() {
        console.log('OnReady');

        //Projects
        var n = document.querySelectorAll(".feature");
        for (var i = 0; i < n.length; i++) {
            n[i].addEventListener("click", function(e) {
                console.log("you clicked " + this.id);

                // var menu = document.querySelector('.popup-overlay') // Using a class instead, see note below.
                // menu.classList.toggle('popup-hide');
                // menu.classList.toggle('popup-show');

                var detailPanel = document.querySelector(".project-details-panel");
                detailPanel.classList.add('show');
                e.preventDefault();
            });
        }


        //Projects detail panel - close button
        var closeButton = document.querySelector(".project-details-panel-close-button");
        closeButton.addEventListener("click", function(e) {

            var detailPanel = document.querySelector(".project-details-panel");
            detailPanel.classList.remove('show');
            e.preventDefault();
        });


        // document.querySelectorAll(".show-popup")[0].addEventListener("click", function(e) {
        // 	console.log("you clicked " + e.target);
        // 	e.preventDefault();
        // });

    })

})();
