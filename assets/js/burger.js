let sidenav = document.getElementById("mySidenav");
    let openBtn = document.getElementById("openBtn");
    let closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;

    function openNav() {
      sidenav.classList.remove("-left-[250px]");
      sidenav.classList.add("left-0");
    }

    function closeNav() {
      sidenav.classList.remove("left-0");
      sidenav.classList.add("-left-[250px]");
    }