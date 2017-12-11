(function($) {
    // 메뉴 관련
    $(document).on('mouseenter focus', '#gnb-nav .gnb-list > li', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
        $(document).on('mouseleave', '#gnb-nav .gnb-list > li', function() {
        $(this).removeClass('active');
    });
    // 오름차순 내림차순 관련
    $(document).on("click", ".table-wrap.list .table th a", function(e) {
        if($(this).parent().hasClass("none-order")){ // 정렬버튼을 한번도 누르지 않은상태
           $(this).parent().addClass("ascending-order").removeClass("none-order"); //최초 클릭시 ascending
        } else {
            if($(this).parent().hasClass("ascending-order")){
                $(this).parent().addClass("descending-order").removeClass("ascending-order");
            } else if($(this).parent().hasClass("descending-order")){
                $(this).parent().addClass("ascending-order").removeClass("descending-order");
            }
        }
        e.preventDefault();
    });
})(jQuery);
