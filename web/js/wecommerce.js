/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var wecommerce = (function (window, undefined) {
    var url = 'http://goods-action/';
    var send = function(options)
    {    
        console.log(options)
      $.ajax({
            url: url,
            type: "POST",
            dataType: 'json',
            data:options,
            success: success,
            error:determination_error
          }); 
    };
    
    var success = function(response)
    {
        console.log(response)
    }
    
    var determination_error = function(error)
    {
        console.log(error)
    }
    
    var methods = 
    {
        init : function( options ) {
          send(options)
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


