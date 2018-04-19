$(document).ready(function(){
    $('#search').click(function(){
        var start = parseInt($('#start').val().replace(":",""));
        var end = parseInt($('#end').val().replace(":",""));
        $.ajax({
            type:'GET',
            url:'includes/search.php',
            dataType: "json",
            data:'start='+start+'&end='+end,
            success:function(response){
                    var len = response.length;
                    var i;
                    var j;
                    alert(JSON.stringify(response));
                    for(i=1;i<=6;i++)
                    {
                        
                     for(j=0;j<len;j++)
                       { 
                            if(i==response[j].park_id)
                            {  
                                var total=$('#'+i).data('available')
                                var aval= response[j].count;
                                $('#'+response[j].park_id).text(total-aval);
                                break;
                            }
                            var total=$('#'+i).data('available')
                            $('#'+i).text(total);
                            
                       }
                    } 
            }
        }); 
    });
});