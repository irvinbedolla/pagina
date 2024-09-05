document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.getElementById('menu-button');
    const menuContent = document.getElementById('menu-content');
    const submenuButtons = document.querySelectorAll('.submenu-button');

    // // Toggle menu visibility
    // menuButton.addEventListener('click', function () {
    //     if (menuContent.style.display === 'block') {
    //         menuContent.style.display = 'none';
    //     } else {
    //         menuContent.style.display = 'block';
    //     }
    // });

    // Toggle submenu visibility
    submenuButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.stopPropagation(); // Prevents the click event from propagating to the document
            const submenu = this.nextElementSibling;
            const isOpen = submenu.style.display === 'block';
            
            // Hide all submenus
            document.querySelectorAll('.submenu').forEach(sub => sub.style.display = 'none');

            // Toggle the current submenu
            submenu.style.display = isOpen ? 'none' : 'block';
        });
    });

    // Close menu and submenus if clicked outside
    document.addEventListener('click', function (event) {
        if (!menuButton.contains(event.target) && !menuContent.contains(event.target)) {
            menuContent.style.display = 'none';
        }

        // Hide all submenus
        document.querySelectorAll('.submenu').forEach(sub => sub.style.display = 'none');
    });

    // Prevent clicks inside the menu or submenu from closing them
    menuContent.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});