function checkSearch() {
    var x = document.forms["searchform"]["s"].value;
    if (x == "") {
        alert("Vui lòng nhập từ khóa cần tìm !");
        return false;
    }
}