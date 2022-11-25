$('.form-design').each(function() {
        var $input = $(this)
		
        $(this).children('input').focus(function() {
            $input.css("border-bottom", "2px solid rgb(32 32 32)");
        });
		$(this).children('input').focusout(function() {
            $input.css("border-bottom", "2px solid rgb(169 173 174)");
        });
    });
		
		
(function($) {

    $(".toggle-password").click(function() {

        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });

})(jQuery);