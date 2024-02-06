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
let ulElement = document.querySelector('ul');
ulElement.classList.add('horizontal-menu');

let linkElement = document.createAttribute('a');

/*loop thru menu items*/
menuItems.forEach(function(text, index) {
    let li = document.createElement('li');
    li.innerHTML = text;

    let linkElement = document.createElement('a');

    linkElement.href = urls[index];
    linkElement.textContent = menuItems[index];
    
//    li.setAttribute('listMenu', index);

    li.setAttribute('a', urls[index]);

    li.classList.add('link', index);

//    ulElement.appendChild(li);
    ulElement.appendChild(linkElement);

/**/
//let lastLi = ulElement.removeChild(ulElement.lastChild);
});

