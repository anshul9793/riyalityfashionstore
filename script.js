// const bar = document.getElementById('bar');
// const close = document.getElementById('close');
// const nav = document.getElementById('navbar');
// if (bar) {
//    bar.addEventListener('click', () => {
//       nav.classList.add('active');
//    })
// }
// if (close) {
//    close.addEventListener('click', () => {
//       nav.classList.remove('active');
//    })
// }   
// Example JavaScript code for adding functionality to the navigation menu
var navbar = document.getElementById("navbar");
var closeBtn = document.getElementById("close");
var mobileBar = document.getElementById("bar");

// Toggle the navigation menu on mobile view
mobileBar.addEventListener("click", function() {
    navbar.classList.toggle("active");
});

// Hide the navigation menu when the close button is clicked
closeBtn.addEventListener("click", function() {
    navbar.classList.remove("active");
});

 // Get all the feature boxes
 var featureBoxes = document.getElementsByClassName("fe-box");

 // Attach a click event listener to each feature box
 for (var i = 0; i < featureBoxes.length; i++) {
     featureBoxes[i].addEventListener("click", function() {
         // Perform an action when a feature box is clicked
         var featureName = this.querySelector("h6").innerText;
         alert("wooho: " + featureName);
         // You can add your custom JavaScript code here to handle the feature box click event
     });
 }


  // Get all the product elements
  var productElements = document.querySelectorAll("#product1 .pro");

  // Attach a click event listener to each product element
  for (var i = 0; i < productElements.length; i++) {
      productElements[i].addEventListener("click", function() {
          // Perform an action when a product is clicked
          var productName = this.querySelector("h5").innerText;
          var productPrice = this.querySelector("h4").innerText;
          alert("Clicked on product: " + productName + " - Price: " + productPrice);
          // You can add your custom JavaScript code here to handle the product click event
      });
  }
