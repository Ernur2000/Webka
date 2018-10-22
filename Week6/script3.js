let cars = [{'brand':'Toyota','model':'Camry','year':1999,'price':20000,'image_url':"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{'brand':'BMW','model':'X6',year:2014,'price':25000,'image_url':"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{'brand':'Daewoo','model':'Nexia',year:2007,'price':15000,'image_url':"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];

for( let i = 0; i<cars.length; i++){
	let newItem = document.getElementById('cars');
	let car = document.createElement("div");
	let img = document.createElement("img");
	img.src = cars[i]['image_url'];
	car.appendChild(img);
	let span = document.createElement("span");
	span.textContent = cars[i]['brand'] + " " +  cars[i]['model'];
	car.appendChild(span);
	img.style.width = "300px";
	img.style.height = "200px";
	car.classList.add("card");

	newItem.appendChild(car);
	let basketImg = document.createElement("img");
	basketImg.src = "https://previews.123rf.com/images/asmati/asmati1602/asmati160202836/52174453-panier-signe-flat-ic%C3%B4ne-de-style-sur-fond-transparent.jpg";
	basketImg.style.width = "50px";
	basketImg.style.height = "50px";
	basketImg.id = "basket" + i;
	basketImg.classList.add("basket");
	car.appendChild(basketImg);
}

	for (let i = 0; i <cars.length; i++) {
	document.getElementById("basket" + i).onclick = function () {
		if (document.getElementById("basket" + i).src==="https://previews.123rf.com/images/asmati/asmati1602/asmati160202836/52174453-panier-signe-flat-ic%C3%B4ne-de-style-sur-fond-transparent.jpg") {
			document.getElementById("basket" + i).src = "http://logo-load.com/uploads/posts/2016-08/dollar-logo.png";
			let n = document.getElementById("items");
			n.textContent = parseInt(n.textContent) + 1;
			let sum = document.getElementById("sum");
			sum.textContent = parseInt(sum.textContent) + cars[i]['price'];
		}

		else{
			let n = document.getElementById("items");
			n.textContent = parseInt(n.textContent) - 1;
			let sum = document.getElementById("sum");
			sum.textContent = parseInt(sum.textContent) - cars[i]['price'];
			document.getElementById("basket" + i).src = "https://previews.123rf.com/images/asmati/asmati1602/asmati160202836/52174453-panier-signe-flat-ic%C3%B4ne-de-style-sur-fond-transparent.jpg";

		}
	}

		
}


	



