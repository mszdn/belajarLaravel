const sidebar = document.getElementById("sidebar");
const toggleBtn = document.getElementById("sidebarToggle");
const sidebarTitle = document.querySelector(".sidebar-title");

if (localStorage.getItem("sidebarState") === "mini") {
    sidebar.classList.add("mini");
    sidebarTitle.style.display = "none";
}

toggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("mini");
    const isMini = sidebar.classList.contains("mini");
    sidebarTitle.style.display = isMini ? "none" : "block";
    localStorage.setItem("sidebarState", isMini ? "mini" : "normal");
});
