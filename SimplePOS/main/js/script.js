

// const currentLocation = location.href;
// const menuItem = document.querySelectorAll('#sidebar .side-menu.top li a');
// const menuLength = menuItem.length;

// for (var i = 0; i < menuLength; i++) {
// 	if (menuItem[i].href === currentLocation) {
// 		menuItem[i].className = "active"
// 	}
// }
// const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

// allSideMenu.forEach(item=> {
// 	const li = item.parentElement;

// 	item.addEventListener('click', function () {
// 		allSideMenu.forEach(i=> {
// 			i.parentElement.classList.remove('active');
// 		})
// 		li.classList.add('active');
// 	})
// });



// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})















// const switchMode = document.getElementById('switch-mode');

// switchMode.addEventListener('change', function () {
// 	if(this.checked) {
// 		document.body.classList.add('dark');
// 	} else {
// 		document.body.classList.remove('dark');
// 	}
// })

let darkmode = localStorage.getItem("darkmode");
const switchmode = document.querySelector("#switch-mode");
console.log(darkmode);



const enabledarkmode = () => {

	document.body.classList.add("dark");
	localStorage.setItem("darkmode", "enabled");
	switchmode.setAttribute('checked', true);
};

const disabledarkmode = () => {

	document.body.classList.remove("dark");
	localStorage.setItem("darkmode", null);


};

if (darkmode === "enabled") {
	enabledarkmode();
}
switchmode.addEventListener("click", () => {
	darkmode = localStorage.getItem("darkmode");
	if (darkmode !== "enabled") {
		enabledarkmode();
		console.log(darkmode);
	}
	else {
		disabledarkmode();
		console.log(darkmode);
	}

});