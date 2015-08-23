// Accordion
var showAccordion = document.querySelectorAll(".accordion .show-more")

for (var count = 0; count < showAccordion.length; count++) {
	showAccordion.item(count).addEventListener("click", function() {
		this.parentNode.parentNode.classList.toggle("expanded");
		this.parentNode.parentNode.nextElementSibling.classList.toggle("expanded");
		event.preventDefault();
	});
}

// Expandable
var showExpandable = document.querySelectorAll(".expandable .show-more")

for (var count = 0; count < showExpandable.length; count++) {
	showExpandable.item(count).addEventListener("click", function() {
		this.style.display = 'none';
		this.parentNode.classList.add("expanded");
		event.preventDefault();
	});
}