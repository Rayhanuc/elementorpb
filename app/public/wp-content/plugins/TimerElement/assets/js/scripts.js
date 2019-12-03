;(function ($){
    $(window).on("elementor/frontend/init",function(){
        // alert("Hi");
        elementorFrontend.hooks.addAction("frontend/element_ready/TimerWidget.default", function(scope, $){
            var clock = $(scope).find(".clock").FlipClock({
                autoStart:false,
                clockFace: 'HourlyCounter',
            });
            var time = new Date();
            clock.setTime(time.getHours()*3600+time.getMinutes()*60+time.getSeconds());
            clock.setCountdown(true);
            clock.start();
        });
    });
})(jQuery);

