/**
 * Created by Alexandr on 10.06.2015.
 */
(function (){
    $(document).ready(function() {
        if ($("#ingredients").length>0){
            $("#ingredients").select2(
                {placeholder: "Введите ингредиенты, которые у вас есть"}
            );
        }
    });
})();