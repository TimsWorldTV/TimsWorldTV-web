// List of HTML files
const htmlFiles = [
  {name: "index.html", url: "https://example.com/index.html"},
  {name: "about.html", url: "https://example.com/about.html"},
  {name: "contact.html", url: "https://example.com/contact.html"},
  {name: "products.html", url: "https://example.com/products.html"},
  {name: "services.html", url: "https://example.com/services.html"}
];

// Function to search for HTML files with similar names
function searchHTMLFiles(searchTerm) {
  // Filter the list of HTML files based on the search term
  const filteredFiles = htmlFiles.filter(file => file.name.includes(searchTerm));

  // Clear the search results menu
  document.getElementById("search-results").innerHTML = "";

  // Add the search results to the menu
  for (const file of filteredFiles) {
    const li = document.createElement("li");
    li.innerHTML = file.name;
    li.addEventListener("click", () => {
      window.location.href = file.url;
    });
    document.getElementById("search-results").appendChild(li);
  }
}

// Get the search bar and search button elements
const searchBar = document.getElementById("search-bar");
const searchButton = document.getElementById("search-button");

// Add an event listener to the search button to search for HTML files when clicked
searchButton.addEventListener("click", () => {
  searchHTMLFiles(searchBar.value);
});