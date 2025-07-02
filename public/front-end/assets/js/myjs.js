//  This is Read More and Read Less
$('.read-more').click(function () {
    $(this).prev().slideToggle();
    if (($(this).text()) == "Read More") {
        $(this).text("Read Less");
    } else {
        $(this).text("Read More");
    }
}); 

//  This is lOAD More and Read Less
$('.load-more').click(function () {
  $(this).prev().slideToggle();
  if (($(this).text()) == "Load More") {
      $(this).text(" ");
  } else {
      $(this).text(" ");
  }
}); 

// This is form script
// Function to update the display when a field is clicked or updated
function updateDisplay(targetId, value) {
    const displayDiv = document.getElementById(targetId);
    if (displayDiv) {
      displayDiv.innerText = value;
      displayDiv.style.display = "block";
    }
  }
  // Add event listeners to show the corresponding display when a field is clicked or updated
  
  // For name
  document
    .getElementById("inputValue")
    .addEventListener("focus", () =>
      updateDisplay(
        "displayValue",
        "" + document.getElementById("inputValue").value
      )
    );
  
  // For Email
  document
    .getElementById("inputValue")
    .addEventListener("input", () =>
      updateDisplay(
        "displayValue",
        " " + document.getElementById("inputValue").value
      )
    );
  

     // For name
  document
  .getElementById("inputValueLastName")
  .addEventListener("focus", () =>
    updateDisplay(
      "displayValueLastName",
      "" + document.getElementById("inputValueLastName").value
    )
  );

// For Email
document
  .getElementById("inputValueLastName")
  .addEventListener("input", () =>
    updateDisplay(
      "displayValueLastName",
      " " + document.getElementById("inputValueLastName").value
    )
  );


  // For  Email
  document
    .getElementById("inputValue2")
    .addEventListener("focus", () =>
      updateDisplay(
        "displayValue2",
        "" + document.getElementById("inputValue2").value
      )
    );
  
  document
    .getElementById("inputValue2")
    .addEventListener("input", () =>
      updateDisplay(
        "displayValue2",
        "" + document.getElementById("inputValue2").value
      )
    );
  
  // Phone
  document
    .getElementById("inputValue11")
    .addEventListener("focus", () =>
      updateDisplay(
        "displayValue11",
        "" + document.getElementById("inputValue11").value
      )
    );
  document
    .getElementById("inputValue11")
    .addEventListener("input", () =>
      updateDisplay(
        "displayValue11",
        "" + document.getElementById("inputValue11").value
      )
    );
  //    Address 01
  document
    .getElementById("inputValue4")
    .addEventListener("focus", () =>
      updateDisplay(
        "displayValue4",
        "" + document.getElementById("inputValue4").value
      )
    );
  document
    .getElementById("inputValue4")
    .addEventListener("input", () =>
      updateDisplay(
        "displayValue4",
        "" + document.getElementById("inputValue4").value
      )
    );
  
  //   Address 02
  document
    .getElementById("inputValue5")
    .addEventListener("focus", () =>
      updateDisplay(
        "displayValue5",
        "" + document.getElementById("inputValue5").value
      )
    );
  document
    .getElementById("inputValue5")
    .addEventListener("input", () =>
      updateDisplay(
        "displayValue5",
        "" + document.getElementById("inputValue5").value
      )
    );
  
  document
    .getElementById("inputValue6")
    .addEventListener("focus", () =>
      updateDisplay(
        "displayValue6",
        "" + document.getElementById("inputValue6").value
      )
    );
  document
    .getElementById("inputValue6")
    .addEventListener("input", () =>
      updateDisplay(
        "displayValue6",
        "" + document.getElementById("inputValue6").value
      )
    );
  
  //   for city
  document
    .getElementById("city")
    .addEventListener("focus", () =>
      updateDisplay("displayValue3", " " + document.getElementById("city").value)
    );
  document
    .getElementById("city")
    .addEventListener("change", () =>
      updateDisplay("displayValue3", " " + document.getElementById("city").value)
    );
  