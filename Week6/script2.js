let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};


for (let item of countries){
	let newItem = document.createElement("option");
	newItem.textContent = item;
	document.getElementById("countries").appendChild(newItem);
}
document.getElementById("countries").addEventListener("change",changeFn);
function changeFn() {
		document.getElementById("cities").innerHTML = "";
		for (let item of cities_by_country[event.currentTarget.value]){
		let newItem = document.createElement("option");
		newItem.textContent = item;
		document.getElementById("cities").appendChild(newItem);
	}
}




