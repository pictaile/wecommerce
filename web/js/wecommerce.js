/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

undefined = true; // mutable
(function (window, undefined) {
  alert(typeof undefined); // "undefined", the local identifier
})(window); // <-- no value passed, undefined by default