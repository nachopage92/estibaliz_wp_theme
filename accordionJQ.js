jQuery(function() {
	var allContent = jQuery('.panel2').addClass('collapse')
	var allToggle = jQuery('.accordion-toggle').click(function() {
  	var thisToggle = jQuery(this)
  	var thisContent = thisToggle.parent().next()
    allToggle.not(thisToggle).addClass('collapsed')
  	allContent.not(thisContent).addClass('collapse')
    thisToggle.toggleClass('collapsed')
    thisContent.toggleClass('collapse')
  })
})
