$(document).ready(function(){
    $('.header').mousemove(function(e){
      var x = -(e.pageX + this.offsetLeft) / 40;
      var y = -(e.pageY + this.offsetTop) / 40;
      $(this).css('background-position', x + 'px ' + y + 'px');
    });    
  });