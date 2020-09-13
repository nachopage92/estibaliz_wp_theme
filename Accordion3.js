var items = document.getElementsByClassName("accordion__item");

for (i = 0; i < items.length; i++) {
  items[i].addEventListener("click", function() {
    // If the current element is already expanded, collapse it and do nothing else (return)
    if (this.classList.contains("expanded")) {
      this.classList.remove("expanded");
      return;
    }

    // Is there an expanded element?
    let expandedItem = document.getElementsByClassName("expanded")[0] || null;
    // If so, collapse it
    if (expandedItem) {
      expandedItem.classList.remove("expanded");
    }

    // Expand the current element
    this.classList.add("expanded");
  });
}