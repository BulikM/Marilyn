document.getElementById("conversationContactReason").addEventListener(
	"change", function() {
		let element = document.getElementById("invul");
		let classList = element.classList;
		
		if (classList.contains("d-none")) {
			element.classList.remove("d-none");
		}
});