var button = document.querySelectorAll(".drop-down_btn");

function hideShow(e)
{
	(e.preventDefault) ? e.preventDefault() : (e.returnValue = false);

	var cur = e.target || e.srcElement,
		div = (cur.nextSibling.nodeType !== 3) ? cur.nextSibling
			: cur.nextSibling.nextSibling;

	div.style.height = ((div.offsetHeight == 0) ? div.scrollHeight : "0") + 'px';
}

for (var i = 0, l = button.length; i < l; i++)
{
	document.addEventListener ?
		button[i].addEventListener("click", hideShow, false)
		: button[i].attachEvent("onclick", hideShow);
}