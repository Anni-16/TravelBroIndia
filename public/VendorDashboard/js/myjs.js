

const input = document.getElementById('input-room');
const input2 = document.getElementById('input-room2');
const output = document.getElementById('output');

function printInput() {
    output.innerHTML =
        `King : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; `
        + input.value + " Rooms";
    output.innerHTML =
        `Queen : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; `
        + input2.value + " Rooms";
}

input.addEventListener("keyup", function (event) {
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("button").click();
    }
});