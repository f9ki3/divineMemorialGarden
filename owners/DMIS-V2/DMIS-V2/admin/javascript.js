const searchbar = document.querySelector('#searchbar');
const box = document.querySelectorAll('.aa');
const box1 = document.querySelectorAll('.ab');
const box2 = document.querySelectorAll('.ac');
const box3 = document.querySelectorAll('.ad');
const box4 = document.querySelectorAll('.ae');
const box5 = document.querySelectorAll('.af');
searchbar.addEventListener('input', () => {
  const inputValue = searchbar.value.toLowerCase();

  box.forEach(box => {
    const boxValue = box.textContent.toLowerCase();  

    if (inputValue === boxValue) {
      box.style.backgroundColor = 'yellow';
    } else {
      box.style.backgroundColor = 'red';
    }
  });

  box1.forEach(box => {
    const boxValue = box.textContent.toLowerCase();  

    if (inputValue === boxValue) {
      box.style.backgroundColor = 'yellow';
    } else {
      box.style.backgroundColor = 'red';
    }
  });
  box2.forEach(box => {
    const boxValue = box.textContent.toLowerCase();  

    if (inputValue === boxValue) {
      box.style.backgroundColor = 'yellow';
    } else {
      box.style.backgroundColor = 'red';
    }
  });
  box3.forEach(box => {
    const boxValue = box.textContent.toLowerCase();  

    if (inputValue === boxValue) {
      box.style.backgroundColor = 'yellow';
    } else {
      box.style.backgroundColor = 'red';
    }
  });
  box4.forEach(box => {
    const boxValue = box.textContent.toLowerCase();  

    if (inputValue === boxValue) {
      box.style.backgroundColor = 'yellow';
    } else {
      box.style.backgroundColor = 'red';
    }
  });
  box5.forEach(box => {
    const boxValue = box.textContent.toLowerCase();  

    if (inputValue === boxValue) {
      box.style.backgroundColor = 'yellow';
    } else {
      box.style.backgroundColor = 'red';
    }
  });
});
