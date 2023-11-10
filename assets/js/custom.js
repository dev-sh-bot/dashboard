
window.addEventListener("scroll", () => {
    const logo = document.querySelector(".logo");
    const sidebar = document.querySelector(".sidebar");

    // Check if the scroll position is greater than the sidebar's top position
    if (window.scrollY > sidebar.offsetTop) {
        logo.style.top = "0";
    } else {
        logo.style.top = "20px"; // Adjust as needed
    }
});



const sidebar = document.getElementById("sidebar");
const toggleSidebarButton = document.getElementById("toggleSidebar");

toggleSidebarButton.addEventListener("click", () => {
    if (window.getComputedStyle(sidebar).display === "none") {
        sidebar.style.display = "block";
    } else {
        sidebar.style.display = "none";
    }
});


// Get all menu items with submenus
const menuItems = document.querySelectorAll(".has-submenu");

// Add a click event listener to each menu item
menuItems.forEach((menuItem) => {
    menuItem.addEventListener("click", () => {
        // Toggle the "open" class to show/hide the submenu

        menuItems.forEach(subMenuItem => {
            if (subMenuItem !== menuItem) {
                subMenuItem.classList.remove("open");
            }
        });

        menuItem.classList.toggle("open");
    });
});

// Close submenus when clicking outside
document.addEventListener("click", (event) => {
    menuItems.forEach((menuItem) => {
        if (!menuItem.contains(event.target)) {
            menuItem.classList.remove("open");
        }
    });
});


