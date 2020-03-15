function courses(){
    document.getElementById("courses-sec").style.display="block";
    document.getElementById("student-sec").style.display="none";
    document.getElementById("assignments-sec").style.display="none";

}

function students(){
    document.getElementById("students-sec").style.display="block";
    document.getElementById("courses-sec").style.display="none";
    document.getElementById("assignments-sec").style.display="none";
}

function assignments() {
    document.getElementById("courses-sec").style.display="none";
    document.getElementById("students-sec").style.display="none";
    document.getElementById("assignments-sec").style.display="block";
}
