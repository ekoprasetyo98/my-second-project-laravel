$('#find').on('keyup',function(){
    $value=$(this).val();
    
    $.ajax({
            type : 'get',
            url : '{{/find}}',
            data:{'find':$value},
            success:function(data){
                  $('tbody').html(data);
             }
    });
    })