/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var $ = jQuery.noConflict();

function get_button_style() {
    $size= $(".col-md-4.col-sm-4.col-xs-7.row-int").width();
    $(".row-int").css("padding-left", ($size-200)/2);
    $(".row-int").css("padding-right", ($size-200)/2);
}


$(document).ready(function(){
                  get_button_style() ;
                  $(window).resize(function(){get_button_style();});
	});