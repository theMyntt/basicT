const back = document.getElementById("back");
const go = document.getElementById("go");
const refresh = document.getElementById("refresh");

back.addEventListener("click", () => { window.history.back(); });
go.addEventListener("click", () => { window.history.forward(); });
refresh.addEventListener("click", () => { window.location.reload(); });