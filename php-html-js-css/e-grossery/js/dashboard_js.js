//selecting all required elements

const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("a"),
input = dropArea.querySelector(".img-input");

let file; //this is a global variable and we'll use it inside multiple function

/*button.onclick = ()=>{
	input.click(); //if user click on the button then the input also clicked
}*/

input.addEventListener("change", function(){
	//getting user select file and [0] this means if user select multiple files then we'll select only the first one
	file = this.files[0];
	console.log(file);
	showFile(); //calling function
	dropArea.classList.add("active");
})

//If user Drag File Over DragArea
dropArea.addEventListener("dragover", (event)=>{
	event.preventDefault(); //preventing from default behaviours
	//console.log("File is over DragArea");
	dropArea.classList.add("active");
	dragText.textContent = "Release to Upload File";
}
);

//If user leave dragged file from DragArea
dropArea.addEventListener("dragleave", ()=>{
	//console.log("File is outside DragArea");
	dropArea.classList.remove("active");
	dragText.textContent = "Drag & Drop to Upload File";
});

//If user drop file on DragArea
dropArea.addEventListener("drop", (event)=>{
	event.preventDefault(); //preventing from default behaviours
	//console.log("File is dropped DragArea");
	//getting user select file and [0] this means if user select multiple files then we'll select only the first one
	file = event.dataTransfer.files[0];
	showFile(); //calling function
	
});

function showFile(){
	let fileType = file.type;
	//console.log(file);
	
	let validExtensions = ["image/jpeg","image/jpg","image/png"]; //adding some valid image extensions in array
	if(validExtensions.includes(fileType)){
		//if user select file is an image file
		let fileReader = new FileReader(); //creating new FileReader object
		fileReader.onload = ()=>{
			let fileURL = fileReader.result; //passing user file source in fileURL variable
			//console.log(fileURL);
		let imgTag = `<img src="${fileURL}" alt="">`; //creating an img tag and pass user selected file source inside src attribute
		dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
		}
		//console.log("This is an Image File");
		fileReader.readAsDataURL(file);
	} else {
		alert("This is not an Image File");
		//console.log("This is not an Image File");
		dropArea.classList.remove("active");
		dragText.textContent = "Drag & Drop to Upload File";
	}
}