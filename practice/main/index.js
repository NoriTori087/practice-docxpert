const menu = document.getElementById("menu");
const humburger = document.querySelector(".humburger");

// менюшка
humburger.addEventListener("click", function () {
  menu.classList.toggle("menu_active");
  console.log("Меню открыто");
});

indexhtml(document.querySelector("#divMyQuestionnaire")).then(canvas => {
  let imgData = canvas.toDataURL("image/jpeg", 1.0);
  window.jsPDF = window.jspdf.jsPDF
  let pdf = new jsPDF({
      orientation: "landscape",
      unit: "in"
  });
  pdf.addImage(imgData, 'JPEG', 0, 0, 11, 7.8, "MEDIUM");
  pdf.save('Questionnaire_canvas.pdf')
});