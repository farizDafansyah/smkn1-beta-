document.addEventListener('DOMContentLoaded', function () {
  console.log('Home page script loaded.');
  showSlideHero();
});

const heroCarouselItems = document.querySelectorAll('.carousel-item');
const garis = document.querySelector('.garis-carousel');
let currentIndexSliderInSectionHero = 0;


function showSlideHero() {
  // slider lebar jika ia == currentIndex, dan slider hide jika ia tidak == currentIndex - 1, dan jika ketika mundur curentIndex == 0 maka 
  heroCarouselItems.forEach((item, index) => {
    item.classList.remove('lebar');
    item.classList.add('hide');

    if (index === currentIndexSliderInSectionHero) {
      item.classList.add('lebar');
      item.classList.remove('hide');
      
      if (currentIndexSliderInSectionHero == heroCarouselItems.length - 1) {
        heroCarouselItems[index-2].classList.remove('hide')
      } else {
        heroCarouselItems[index-1].classList.remove('hide')
      }
    }
  })
  setLineSlider(currentIndexSliderInSectionHero-1);
}

function nextSlideHero() {
  currentIndexSliderInSectionHero = (currentIndexSliderInSectionHero + 1) % heroCarouselItems.length;
  showSlideHero();
}

function previousSlideHero() {
  currentIndexSliderInSectionHero = (currentIndexSliderInSectionHero - 1 + heroCarouselItems.length) % heroCarouselItems.length;
  showSlideHero();
}

function setLineSlider(index) {
  if (index === 1) {
    garis.classList.add('tengah');
    garis.classList.remove('akhir');
  } else if (index === 2) {
    garis.classList.add('akhir');
    garis.classList.remove('tengah');
  } else {
    garis.classList.remove('tengah');
    garis.classList.remove('akhir');
  }
}

function delay(btn) {
  btn.disabled = true;
  setTimeout(() => {
    btn.disabled = false;
  }, 1000);
}

const buttons = document.querySelectorAll('.carousel .btn button')

buttons.forEach((button, i) => {
  button.addEventListener('click', () => {
    (i == 1) ? nextSlideHero() : previousSlideHero()
    delay(button)
  })
})

// ////

// const heroCarouselItems = document.querySelectorAll('.carousel-item')
// const garis = document.querySelector('.garis-carousel')
// let currentIndexHero = -1

// function showSlideHero() {
//   setLineSlider(currentIndexHero)

//   heroCarouselItems.forEach(item => {
//     item.classList.remove('lebar')
//     item.classList.remove('hide')
//   })

//   heroCarouselItems[currentIndexHero].classList.add('lebar')

// }
// nextSlideHero()
// function nextSlideHero() {
//   currentIndexHero = (currentIndexHero + 1) % heroCarouselItems.length;
//   showSlideHero()

//   if (currentIndexHero != heroCarouselItems.length - 1) {
//     heroCarouselItems[(currentIndexHero + 2) % heroCarouselItems.length].classList.add('hide')
//   }
//   else {
//     heroCarouselItems[0].classList.add('hide')
//   }
// }

// function previousSlideHero() {
//   currentIndexHero = (currentIndexHero - 1 + heroCarouselItems.length) % heroCarouselItems.length;
//   showSlideHero()

//   if (currentIndexHero != 0) {
//     heroCarouselItems[((currentIndexHero - 2 + heroCarouselItems.length) % heroCarouselItems.length) % heroCarouselItems.length].classList.add('hide')
//   }
//   else {
//     heroCarouselItems[heroCarouselItems.length - 1].classList.add('hide')
//   }
// }

// function setLineSlider(index) {
//   if (index == 1) {
//     garis.classList.add('tengah')
//     garis.classList.remove('akhir')
//   }
//   else if (index == 2) {
//     garis.classList.add('akhir')
//     garis.classList.remove('tengah')
//   }
//   else {
//     garis.classList.remove('tengah')
//     garis.classList.remove('akhir')
//   }
// }

// function delay(btn) {
//   btn.disabled = true;
//   setTimeout(() => {
//     btn.disabled = false;
//   }, 1000);
// }

// const buttons = document.querySelectorAll('.btn button')

// buttons.forEach((button, i) => {
//   button.addEventListener('click', () => {
//     (i == 1) ? nextSlideHero() : previousSlideHero()
//     delay(button)
//   })
// })
// ////