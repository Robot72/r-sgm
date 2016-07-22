; (function () {
    var L = {};
    
    L.wellText = function () {
        $('.well-text').toggle('slow');
    };
    
    $(document).ready(function () {
        $(document).on('click', '.well-block', L.wellText);
    });    
}());