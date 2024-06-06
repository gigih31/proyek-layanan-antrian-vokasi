function toggleEdit(index) {
  var inputElement = document.getElementById("editableInput" + index);
  var button = event.target;

  inputElement.disabled = !inputElement.disabled;

  if (button.innerHTML === "Edit") {
    button.innerHTML = "Simpan";
  } else {
    button.innerHTML = "Edit";
  }
}
