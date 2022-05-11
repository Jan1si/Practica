const burgerButton = document.querySelector('.burger__menu'),
      lineBurger = document.querySelector('.line__burger'),
      searchButton = document.querySelector('.icon__search'),
      closeButton = document.querySelector('.close__form'),
      searchForm = document.querySelector('.search__form');

console.log(burgerButton);
burgerButton.addEventListener('click', function(){
  console.log("clikc");
  lineBurger.classList.toggle('active__burger');
});

searchButton.addEventListener('click', function(){
  searchForm.classList.add('active__form')
});

closeButton.addEventListener('click', function(){
  searchForm.classList.remove('active__form')
});


const contentPrint = document.querySelector('.print__block'),
      btnPrint = document.querySelector('.print__btn');

function printContent(content){
  let style = '<link rel="stylesheet" href="/../css/style.css" type="text/css" />';
  let fonts = '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
  let WinPrint = 
  // WinPrint.document.write(fonts, style);
  window.open('','', 'left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
  WinPrint.document.write(fonts);
  WinPrint.document.write(style);
  WinPrint.document.write('<div id="print" class="contentpane">');
  WinPrint.document.write(content.innerHTML);
  WinPrint.document.write('</div>');
  WinPrint.document.close();
  WinPrint.focus();
  WinPrint.print();
  WinPrint.close();
  content.innerHTML = strOldOne;
};

btnPrint.addEventListener('click',function(){
  printContent(contentPrint)
});