$(document).ready(function(){

    $("#contact_form").validate({
        
       rules:{ 
        
            name:{
                required: true,
                minlength: 4,
                maxlength: 16,
            },
            
            email:{
                required: true,
                minlength: 6,
                maxlength: 16,
            },
       },
       
       messages:{
        
            name:{
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 4 символа",
                maxlength: "Максимальное число символо - 16",
            },
            
            email:{
                required: true,
                minlength: "минимум 6 символа",
                maxlength: 16,
            },
        
       }
        
    });


}); //end of ready