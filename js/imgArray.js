    var imgArray = new Array();

    imgArray[0] = new Image();
    imgArray[0].src = 'imagens/profiles/arctic-hare.png';

    imgArray[1] = new Image();
    imgArray[1].src = 'imagens/profiles/cat.png';

    imgArray[2] = new Image();
    imgArray[2].src = 'imagens/profiles/chicken.png';

    imgArray[3] = new Image();
    imgArray[3].src = 'imagens/profiles/duck.png';

    imgArray[4] = new Image();
    imgArray[4].src = 'imagens/profiles/elephant.png';

    imgArray[5] = new Image();
    imgArray[5].src = 'imagens/profiles/fish.png';

    imgArray[6] = new Image();
    imgArray[6].src = 'imagens/profiles/horse.png';

    imgArray[7] = new Image();
    imgArray[7].src = 'imagens/profiles/ladybug.png';

    imgArray[8] = new Image();
    imgArray[8].src = 'imagens/profiles/owl.png';

    imgArray[9] = new Image();
    imgArray[9].src = 'imagens/profiles/pidgey.png';

    imgArray[10] = new Image();
    imgArray[10].src = 'imagens/profiles/pikachu.png';

    imgArray[11] = new Image();
    imgArray[11].src = 'imagens/profiles/bug.png';

    imgArray[12] = new Image();
    imgArray[12].src = 'imagens/profiles/bunny.png';

    imgArray[13] = new Image();
    imgArray[13].src = 'imagens/profiles/crab.png';

    imgArray[14] = new Image();
    imgArray[14].src = 'imagens/profiles/fox.png';

    imgArray[15] = new Image();
    imgArray[15].src = 'imagens/profiles/frog.png';

    imgArray[16] = new Image();
    imgArray[16].src = 'imagens/profiles/giraffe.png';

    imgArray[17] = new Image();
    imgArray[17].src = 'imagens/profiles/lion.png';

    imgArray[18] = new Image();
    imgArray[18].src = 'imagens/profiles/monkey.png';

    imgArray[19] = new Image();
    imgArray[19].src = 'imagens/profiles/mouse.png';



    function retornarImagem(){
      var numeroAleatorio =  getRandomIntInclusive(0, imgArray.length-1);

      return imgArray[numeroAleatorio].src;
  }

  function getRandomIntInclusive(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min + 1)) + min;
  }
