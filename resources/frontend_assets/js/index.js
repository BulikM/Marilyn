document.getElementById("company").addEventListener(
	"click", function() {
		let element = document.getElementById("companyList");
		let classList = element.classList;
		
		if (classList.contains("d-none")) {
			element.classList.remove("d-none");
		}
		else {
			element.classList.add("d-none");
		}
});
document.getElementById("customerService").addEventListener(
	"click", function() {
		let element = document.getElementById("customerServiceList");
		let classList = element.classList;
		
		if (classList.contains("d-none")) {
			element.classList.remove("d-none");
		}
		else {
			element.classList.add("d-none");
		}
});
document.getElementById("explore").addEventListener(
	"click", function() {
		let element = document.getElementById("exploreList");
		let classList = element.classList;
		
		if (classList.contains("d-none")) {
			element.classList.remove("d-none");
		}
		else {
			element.classList.add("d-none");
		}
});

