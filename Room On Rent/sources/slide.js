$( ".nextBtnEase" ).click(function(e) {
	goRightEase();
});
$( ".backBtnEase" ).click(function(e) {
	goLeftEase();
});


function goRightEase(){ // inner stuff slides left
	var initalLeftMargin = $( ".innerLiner" ).css('margin-left').replace("px", "")*1;
	var newLeftMargin = (initalLeftMargin - 204); // extra 2 for border
	$( ".innerLiner" ).animate({ marginLeft: newLeftMargin }, 1000, 'easeOutBounce');
}
function goLeftEase(){ // inner stuff slides right
	var initalLeftMargin = $( ".innerLiner" ).css('margin-left').replace("px", "")*1;
	var newLeftMargin = (initalLeftMargin + 204); // extra 2 for border
	$( ".innerLiner" ).animate({ marginLeft: newLeftMargin }, 1000, 'easeOutBounce');
}