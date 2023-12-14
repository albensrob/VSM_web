AOS.init({
	offset: (jQuery(window).height() * .25),
	  delay: 400,
	  duration: 700,
	  easing: 'ease-out-back',
	  anchorPlacement: 'bottom-center'
});

var a = 0;
var b = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  var pTop = $('#line').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
	$('.counter-value').each(function() {
	  var $this = $(this),
		countTo = $this.attr('data-count');
	  $({
		countNum: $this.text()
	  }).animate({
		  countNum: countTo
		},

		{

		  duration: 2000,
		  easing: 'swing',
		  step: function() {
			var b = Math.floor(this.countNum);
			$this.text(b.toLocaleString());
		  },
		  complete: function() {
			var c = this.countNum;
			$this.text(c.toLocaleString());
		  }

		});
	});
	a = 1;
  }
  if (b == 0 && $(window).scrollTop() > pTop) {
	$('.line').each(function() {
	  var $this = $(this),
		countTo = $this.attr('data-count');
	  $({
		countNum: $this.text()
	  }).animate({
		  countNum: countTo
		},

		{

		  duration: 2000,
		  easing: 'swing',
		  step: function() {
			$this.text(Math.floor(this.countNum) + '%');
		  },
		  complete: function() {
			$this.text(this.countNum + '%');
		  }

		});
		$(this).animate({ width:'0%' },0);
		$(this).animate({ width:'100%' },2000);
	});
	
	b = 1;
  }

});