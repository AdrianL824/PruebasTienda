const formDelete = Array.from(document.getElementsByClassName('from-delete'));
const modal = document.getElementsByClassName('modal')[0];


formDelete.forEach((item) => {

  item.addEventListener('submit', (e) => {
    e.preventDefault();
    
    modal.classList.add('modal--show');
    const check = document.querySelector('.modal__close');
    const close = document.querySelector('.modal__close2');

    check.addEventListener('click', (e)=>{
      e.preventDefault();
      modal.classList.remove('modal--show');
      item.submit();
    });

    close.addEventListener('click', (e)=>{
      e.preventDefault();
      modal.classList.remove('modal--show');
    });
  });

});