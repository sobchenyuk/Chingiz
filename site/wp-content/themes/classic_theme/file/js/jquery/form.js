(function( $ ) {
    $(function() {
      $(".form_field").on("click", function() {
        $(".form_block_text", this).addClass('none_text');
      });
    });
})(jQuery);
(function( $ ) {
    $( document ).ready(function() {
        $('.content_describe_btn').on("click", function() {
           $(this).parents(".main_content").toggleClass('active');
            $(this).toggleClass('btn_active');
            $('.describe_btn_symbol',this).toggleClass('active_symbol');
        });

    });
})(jQuery);


(function( $ ) {
    $( document ).ready(function() {
        // $('.content_describe_btn').click(function() {
        //     $('.main_content').removeClass('active');
        //     $('.describe_btn_symbol').removeClass('active_symbol');
        // });
        // $('.content_describe_btn.btn_active').on("click", function() {
        //     console.log('true');
        //     // $(this).removeClass('btn_active');
        //     // $('.main_content').removeClass('active');
        //     // $('.describe_btn_symbol').removeClass('active_symbol');
        // });

    });
})(jQuery);