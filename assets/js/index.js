const rowTriangulo = document.querySelector("#rowTriangulo");
const rowRetangulo = document.querySelector("#rowRetangulo");
const rowCircunferencia = document.querySelector("#rowCircunferencia");
const bgImage = document.querySelector(".bg-image");

rowTriangulo.style.display = "block";
rowRetangulo.style.display = "none";
rowCircunferencia.style.display = "none";

const mostraTriangulo = () => {
  rowTriangulo.style.display = "block";
  rowRetangulo.style.display = "none";
  rowCircunferencia.style.display = "none";
  bgImage.style.backgroundImage = "url(./assets/img/triangulo.png)";
};

const mostraRetangulo = () => {
  rowTriangulo.style.display = "none";
  rowRetangulo.style.display = "block";
  rowCircunferencia.style.display = "none";
  bgImage.style.backgroundImage = "url(./assets/img/retangulo.png)";
};

const mostraCircunferencia = () => {
  rowTriangulo.style.display = "none";
  rowRetangulo.style.display = "none";
  rowCircunferencia.style.display = "block";
  bgImage.style.backgroundImage = "url(./assets/img/circulo.png)";
};

const selectForma = document.getElementById("forma");

selectForma.addEventListener("change", () => {
  switch (selectForma.value) {
    case "triangulo":
      mostraTriangulo();
      break;

    case "retangulo":
      mostraRetangulo();
      break;

    case "circunferencia":
      mostraCircunferencia();
      break;
  }
});
