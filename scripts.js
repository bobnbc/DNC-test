/**
 * scripts.js
 */
//        document.body.menuItems.classList.toggle('blah');

let menuItems = [
    'Home',
    'Support',
    'Vote',
    'About',
    'Contact'
];

// Define corresponding links
let urls = [
    "/",
    "https://democrats.org",
    "https://iwillvote.com",
    "/",
    "/"
];

let index = 0;
let menuElement = document.getElementById('menu');
let ulElement = document.createElement('ul');
/*
let listMenuElement = ulElement.getAttribute('data-menuItem') || '';
/*
let classNamer = document.body.className;
document.body.className = classNamer + 'menustyle';
*/
ulElement.classList.add('horizontal-menu');

/*loop thru menu items*/
menuItems.forEach(function(text, index) {
    let li = document.createElement('li');
    li.innerHTML = text;

//            li.setAttribute('listMenu', index);

    li.classList.add('link', index);

    ulElement.appendChild(li);
});
/*
let myList = document.getElementById("link"+index);

// Loop through the list items and add hyperlinks
for (var i = 0; i < myList.children.length; i++) {
    var listItem = myList.children[i];
    var link = document.createElement("a");
    link.href = urls[i]; // Assign URL to the hyperlink
    link.textContent = listItem.textContent; // Use list item text as hyperlink text
    listItem.textContent = ""; // Clear the text content of the list item
    listItem.appendChild(link); // Append the hyperlink to the list item
}
*/
//let lastLi = ulElement.removeChild(ulElement.lastChild);

menuElement.insertAdjacentElement('afterbegin', ulElement);

let menuSampleURL = 2;

let menuSampleElement = document.querySelector(`li[listMenu="${menuSampleURL}"]`);

//        menuSampleElement.classList.add(`link` + index);
