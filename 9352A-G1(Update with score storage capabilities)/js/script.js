$(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
});

var target = $('.nav')
target.after('<div class="affix" id="affix"></div>')
var affix = $('.affix');
affix.append(target.clone(true));
var element = document.getElementById('affix');
if (element !== null) {
    var position = target.position();
    window.addEventListener('scroll', function () {
        var height = $(window).scrollTop();
        if (height > 300) {
        target.css('visibility', 'hidden');
        affix.css('display', 'block');
    
        } else {
            affix.css('display', 'none');
            target.css('visibility', 'visible');
        }
    })
}
