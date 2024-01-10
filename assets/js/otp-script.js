// // script.js 
// const inputs = document.getElementById("inputs"); 

// inputs.addEventListener("input", function (e) { 
// 	const target = e.target; 
// 	const val = target.value; 

// 	if (isNaN(val)) { 
// 		target.value = ""; 
// 		return; 
// 	} 

// 	if (val != "") { 
// 		const next = target.nextElementSibling; 
// 		if (next) { 
// 			next.focus(); 
// 		} 
// 	} 
// }); 

// inputs.addEventListener("keyup", function (e) { 
// 	const target = e.target; 
// 	const key = e.key.toLowerCase(); 

// 	if (key == "backspace" || key == "delete") { 
// 		target.value = ""; 
// 		const prev = target.previousElementSibling; 
// 		if (prev) { 
// 			prev.focus(); 
// 		} 
// 		return; 
// 	} 
// });


const inputs = document.querySelectorAll("input"),
	  button = document.getElementById("submit_btn");

inputs.forEach((input, index1) => {
	input.addEventListener("keyup", (e) => {
		const currentInput = input,
			nextInput = input.nextElementSibling,
			prevInput = input.previousElementSibling;

		if (currentInput.value.length > 1){
			currentInput.value = "";
			return;
		}

		if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== ""){
			nextInput.removeAttribute("disabled");
			nextInput.focus();
		}

		if(e.key === "Backspace" || e.key === "Delete"){
			inputs.forEach((input, index2) => {
				if(index1 <= index2 && prevInput){
					input.setAttribute("disabled", true);
					input.value = "";
					prevInput.focus();
				}
			});
		}


		if(!inputs[5].disabled && inputs[5].value !== ""){
			button.classList.add("active");
			return;
		}

		button.classList.remove("active");
	});
});

window.addEventListener("load", () => inputs[0].focus());