/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var wecommerce = (function (window, undefined) {
    var url = 'http://goods-action/';
    var opt;
    var send = function()
    {    
      $.ajax({
            url: url,
            type: "POST",
            dataType: 'json',
            data:opt,
            success: success,
            error:determination_error
          }); 
    };
    
    var success = function(response) {
        createBanner(response);
        
    }
    
    var determination_error = function(error) {
        console.log(error)
    }
    
    var createBanner = function(response){
        console.log($('#'+opt.forBanner))
        $('#'+opt.idBanner).html(response.html)
    }
    
    var methods = {
        init : function( options ) {
          opt = options;
          send();
        },
        show : function( ) {
           alert(2)
        },
        hide : function( ) {
           alert(3)
        },
        update : function( content ) {
            alert(4)
        }
    };

  return methods;

})(window); 


