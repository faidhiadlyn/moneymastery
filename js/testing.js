
// Function to save content to local storage
function saveContent(key, element) {
    localStorage.setItem(key, element.innerHTML);
}

// Function to load content from local storage
function loadContent(key, element) {
    var content = localStorage.getItem(key);
    if (content) {
        element.innerHTML = content;
    }
}

// Load content when the page loads
window.onload = function () {
    loadContent('p1', document.querySelector('p[contenteditable="true"]'));
    loadContent('h21', document.querySelector('h2[contenteditable="true"]'));
    loadContent('h31', document.querySelector('h3[contenteditable="true"]'));
    loadContent('p2', document.querySelectorAll('p[contenteditable="true"]')[1]);
    loadContent('p3', document.querySelectorAll('p[contenteditable="true"]')[2]);

    
    
    
    // Add similar lines for other cards
};
