;(function ($){
    $(window).on("elementor/frontend/init",function(){
        // alert("Hi");
        elementorFrontend.hooks.addAction("frontend/element_ready/TimerWidget.default", function(scope, $){
            alert("fired");
        });
    });
})(jQuery);

