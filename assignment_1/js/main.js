// This function retrieves the html page name of the current page
function findLocation() {
    var pathName = window.location.pathname.split('/');
    return pathName[pathName.length - 1];
}

// This function changes the titles of the pages
function changeTitle(page1, page2) {
    if (findLocation() === page1) {
        document.title = 'Webprogramming (LIX019P05) - Index';
    } else if (findLocation() === page2) {
        document.title = 'Webprogramming (LIX019P05) - Second';
    }
}

// This function creates a new article on index.html
function newArticle(page1) {
    if (findLocation() === page1) {
        var newHeader = document.createElement('h1');
        var newHead = document.createTextNode('Water. Earth. Fire. Air.');
        newHeader.appendChild(newHead);

        var newPar = document.createElement('p');
        var newText = document.createTextNode('Long ago, the four nations lived together in harmony. Then, everything changed when the Fire Nation attacked. Only the Avatar, master of all four elements, could stop them, but when the world needed him most, he vanished. A hundred years passed and my brother and I discovered the new Avatar, an airbender named Aang, and although his airbending skills are great, he has a lot to learn before he\'s ready to save anyone. But I believe Aang can save the world.');
        newPar.appendChild(newText);

        var newArticle = document.createElement('article');
        newArticle.appendChild(newHeader);
        newArticle.appendChild(newPar);

        var position = document.getElementsByClassName('col-md-12')[0];
        position.appendChild(newArticle);
    }
}

// This function changes the third link
function changeListItem() {
    var list = document.getElementById('links');
    var elements = list.getElementsByTagName('li');
    var el = elements[2];
    el.innerHTML = '<a href="https://google.com" target="_blank">Link 3</a>';
}

// This function changes the color of links
function changeColor() {
    var links = document.getElementsByClassName('nav-link');
    for (i = 0; i < links.length; i++) {
        links[i].style.color = 'red';
    }
}

// This function prints the properties of an object to the index.html
function showSchedule(object, page1) {
    var schedule = '';
    for (var property in object) {
        schedule += property + ': ' + object[property] + ' ';
    }
    if (findLocation() === page1) {
        var newPar = document.createElement('p');
        var newText = document.createTextNode(schedule);
        newPar.appendChild(newText);
        var position = document.getElementsByClassName('col-md-12')[0];
        position.appendChild(newPar);
    }
}

// This function adds a sidebar to second.html
function addSidebar(page2) {
    if (findLocation() === page2) {
        var mainColumn = document.getElementsByClassName('col-md-12')[0];
        mainColumn.className = 'col-md-8';
        var newDiv =  document.createElement('div');
        newDiv.className = 'col-md-4';
        var newHeader = document.createElement('h1');});
        var newHead = document.createTextNode('Sidebar');
        newHeader.appendChild(newHead);
        newDiv.appendChild(newHeader);
        mainColumn.appendChild(newDiv);
    }
}


// This function runs all the other functions
function main() {
    var index = 'index.html';
    var second = 'second.html';
    var schedule = {
        week1: 'Assignment 1',
        week2: 'No Lecture',
        week3: 'Assignment 2',
        week4: '-',
        week5: "Assignment 3",
        week6: '-',
        week7: 'Guest Lecture',
    };
    changeTitle(index, second);
    newArticle(index);
    changeListItem();
    changeColor();
    showSchedule(schedule, index);
    addSidebar(second);
}

window.addEventListener('load', main, false);



