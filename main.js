$(function() {
	var block = document.createElement('div'),
		frag = document.createDocumentFragment(),
		from = window.amount;

	$(block).addClass('block').text(from);
	frag.appendChild(block);

	for (i = from - 1; i > 0; i--) {
		frag.appendChild($(block.cloneNode(true)).text(i).get(0));
	}

	$('#canvas').get(0).appendChild(frag);

	$('.block')
		.draggable({
			containment: 'parent',
			snap: true,
			snapTolerance: 3
		})
		.bind('dragstop', function() {
				$(this).attr('title', $(this).position().left + ", " + $(this).position().top);
		})
		.bind('dragstart', function() {
				$('#message').fadeOut('slow');
		})


	$('body').bind('keypress', function(e) {
		/* print offset for each div.block */
		if (e.which == '13') {
			var coords = new Array;

			$('div.block').each(function() {
				coords.push([$(this).position().left, $(this).position().top])
			});
			console.log(JSON.stringify(coords));
			e.preventDefault();
			return false;
		}
	});
})
