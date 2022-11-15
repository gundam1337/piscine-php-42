var n = document.getElementById("new");

n.addEventListener('click', ask);

function ask() {
  let addNtodo = prompt('what do you want to add?');
  if (addNtodo) {
    var tag = document.createElement("h1");
    var text = document.createTextNode(addNtodo);
    tag.appendChild(text);
    var element = document.getElementById("new");
    element.appendChild(tag);
  }


}


