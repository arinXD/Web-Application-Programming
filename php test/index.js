const btnRun = document.getElementById("btnRun");
const jsDisplay = document.querySelector(".javascript");
const nameDisplay = document.querySelector("#displayName");
const btnSend = document.getElementById("sendName");

function primeNumber() {
  let number = document.getElementById("number");
  let numberValue = number.value;
  let count = 0 ;
  if (!numberValue == " ") {
    for (i = 2; i <= numberValue; i++) {
      if (numberValue % i == 0) {
        count++;
      }
    }
    if (count < 2) {
      jsDisplay.innerHTML = numberValue + " is Prime number";
    } else {
      jsDisplay.innerHTML = numberValue + " is Composite number";
    }
  } else {
    alert("enter number");
  }
}

function displayName() {
  let firstName = document.getElementById("firstName").value;
  let lastName = document.getElementById("lastName").value;
  let spanName = document.createElement("span");
  nameDisplay.appendChild(spanName);
  spanName.innerText = firstName + " " + lastName;
}

btnRun.addEventListener("click", primeNumber);
btnSend.addEventListener("click", displayName);
