$(document).ready(function(){
	$(window).scroll(function(){
		var $target=$(this);
		if($target.scrollTop()>$("#header").outerHeight())
		{
			$(".navbar").addClass("bg-dark");
			$(".up").css("display","block");
		}
		else{
			$(".navbar").removeClass("bg-dark");
			$(".up").css("display","none");
		}
	});
	$(".up").click(function(){
		event.preventDefault();
		var target=this.hash;
		$target=$(target);
	$("html,body").animate({'scrollTop':$target.offset().top},1500,'swing');
  });
});