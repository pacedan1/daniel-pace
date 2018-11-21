
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

//custom
//Set width of progress-bars 
$(".progress-bar").each(function(){
    width = $(this).attr('aria-valuenow');
    $(this).width(width + '%');
  });
 
 //Skillset container toggle
 $(".skillset").each(function(){
   console.log('test');
   $(this).click(function(){
     //target container
     target = $(this).find(".skillset-container");
     
     //
     if(target.css("display") == "none"){
       target.css("display", "block"); 
     }
     else{
       target.css("display", "none"); 
     }
   });
 });

   // Set circular progress bar to value
   $(".circular").each(function(){
    // Get aria-valuenow
    var per = $(this).attr('aria-valuenow');

    // check if value is smaller or larger than 50
    if(per > 50){
      // if larger, set half of background full and other half to calculated percentage
      b = 90+(per*3.6);
      var a = 'linear-gradient(-90deg, #000000 50%, transparent 50%), linear-gradient('+b+'deg, #000000 50%, #E0E0E0 50%)';
    }
    else{
      // if smaller, set half of background to empty and other half to calculated percentage 
      b = (per*3.6)-90;
      var a = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%), linear-gradient('+b+'deg, #E0E0E0 50%, #000000 50%)';
    }
    $(this).css('background', a);
  });

// Circular SVG
$('.circsvg').each(function(){
  var per = $(this).data('valuenow');
  var target = $(this).find('.circsvg-bar');
  //circumference
  var circ = Math.PI * 2 * (target.attr('r')); 
    
  //calculate length of line
  var a = circ * per / 100;
  var b = circ - a;
  // calculate 25% offset to make circle straight
  var offset = circ * 0.25;
      
  // set values of dash array and offset
  target.attr({
    'stroke-dasharray': a + ' ' + b,
    'stroke-dashoffset': offset
  });
});