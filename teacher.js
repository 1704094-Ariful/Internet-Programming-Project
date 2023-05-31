//Import JQuery
var script = document.createElement("script");
script.src = "https://code.jquery.com/jquery-3.4.1.min.js";
script.type = "text/javascript";
document.getElementsByTagName.('head')[0].appendChild(script);
// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
	apiKey: "AIzaSyDKy6JhezMzI_PwsTbu9GBD6nYCRWji2Mc",
	authDomain: "school-management-25e14.firebaseapp.com",
	databaseURL: "https://school-management-25e14-default-rtdb.firebaseio.com",
	projectId: "school-management-25e14",
	storageBucket: "school-management-25e14.appspot.com",
	messagingSenderId: "125652920446",
	appId: "1:125652920446:web:3c1d529dacd2449085902f",
	measurementId: "G-D2TEK9RVCM"
};
// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
var firebase = firebase.firebase();
//Variable to access database collection
const db = firebase.firestore("teacher");

function getData(){
	db.collection("teacher").get().then(data=>{
		data
	});
}