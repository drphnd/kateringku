document.addEventListener("DOMContentLoaded", () => {
    const userMenuButton = document.getElementById("user-menu-button");
    const dropdownMenu = document.getElementById("dropdown-menu");
  
    // Toggle dropdown saat tombol diklik
    userMenuButton.addEventListener("click", () => {
      dropdownMenu.classList.toggle("hidden");
    });
  
    // Tutup dropdown saat klik di luar elemen
    document.addEventListener("click", (event) => {
      if (!userMenuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add("hidden");
      }
    });
  });
  