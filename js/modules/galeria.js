let container = document.querySelector("#slides");
let proximaImg = document.querySelector(".proxima-imagem");
let imagemPrevia = document.querySelector(".imagem-previa");

const fotos = [
  {
    img: "./estilos/imagens/zap.png",
    id: 1,
  },

  {
    img: "./estilos/imagens/scorpion.png",
    id: 2,
  },

  {
    img: "./estilos/imagens/home.png",
    id: 3,
  },
];

let tamanhoDaGaleria = fotos.length;
let imgInicial = 0;
let imgAtual = 0;
let imgFinal = tamanhoDaGaleria - 1;

let primeiroSlide = {};

fotos.map((elem, index) => {
  let slide = document.createElement("div");

  if (index == 0) primeiroSlide = slide;

  let img = document.createElement("img");
  img.setAttribute("src", `${elem.img}`);
  slide.className = "slide";
  slide.appendChild(img);

  container.appendChild(slide);
});

let passandoAutomaticamente = setInterval(passaSlideAutomaticamente, 7000);

proximaImg.addEventListener("click", () => {
  if (imgAtual === imgFinal) {
    imgAtual = 0;
  } else {
    imgAtual++;
  }

  primeiroSlide.style.marginLeft = `-${6.25 * imgAtual}%`;
  clearInterval(passandoAutomaticamente);
  passandoAutomaticamente = setInterval(passaSlideAutomaticamente, 7000);
});

imagemPrevia.addEventListener("click", () => {
  if (imgAtual === imgInicial) {
    imgAtual = imgFinal;
  } else {
    imgAtual--;
  }

  primeiroSlide.style.marginLeft = `-${6.25 * imgAtual}%`;
  clearInterval(passandoAutomaticamente);
  passandoAutomaticamente = setInterval(passaSlideAutomaticamente, 7000);
});

function passaSlideAutomaticamente() {
  if (imgAtual === imgFinal) {
    imgAtual = 0;
  } else {
    imgAtual++;
  }
  primeiroSlide.style.marginLeft = `-${6.25 * imgAtual}%`;
}