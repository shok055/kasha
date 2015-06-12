(function (){
    $(function(){
        var $s=$('#ex1');
        $s.slider({
            formatter: function(value) {
                return 'Current value: ' + value;
            }
        });
        $s.on('change',debounce(function(e){
            reloadMenu(e.value.newValue);
        },1000));
        var $menu = $('.js-ajax-reload');
        function reloadMenu(timeout){
            var data = {
                timeout: timeout,
                ingredients: ingredients || []
            };
            $menu.load('/menu_ajax?'+ $.param(data));
        }
    })
})();
function debounce(func, wait) {
    var timeout, latest_args;
    function later(){
        timeout = null;
        func.apply(this, latest_args);
    }
    return function() {
        latest_args = Array.prototype.slice.call(arguments);
        if(!timeout){
            timeout = setTimeout(later.bind(this), wait);
        }
    };
}