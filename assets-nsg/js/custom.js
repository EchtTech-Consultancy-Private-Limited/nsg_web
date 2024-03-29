$(window).scroll(function(){
  if ($(this).scrollTop() > 15) {
     $('.site-header').css({"top":"0"});
  } else {
     $('.site-header').css({"top":"55px"});
  }
});

$('#bannerSlider').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('#clientSlider').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    responsive: {
        0: {
            items: 1,
            dots: true
        },
        600: {
            items: 2,
            dots: true
        },
        1000: {
            items: 5,
            dots: false
        }
    }
});

$(document).ready(function() {
  const decrementBtn = document.getElementById('decrementBtn');
  const incrementBtn = document.getElementById('incrementBtn');
  const normalBtn = document.getElementById('normalBtn');

  let currentSize = 16; // Default font size

  decrementBtn.addEventListener('click', function() {
    currentSize = 14;
    changeFontSize(currentSize);
    setActiveButton(decrementBtn);
  });

  incrementBtn.addEventListener('click', function() {
    currentSize = 18;
    changeFontSize(currentSize);
    setActiveButton(incrementBtn);
  });

  normalBtn.addEventListener('click', function() {
    currentSize = 16; // Reset font size to default
    changeFontSize(currentSize);
    setActiveButton(normalBtn);
  });

  function changeFontSize(size) {
    const body = document.querySelector('body');
    body.style.fontSize = `${size}px`;
  }

  function removeActiveClass() {
    decrementBtn.classList.remove('active');
    incrementBtn.classList.remove('active');
    normalBtn.classList.remove('active');
  }

  function setActiveButton(button) {
    removeActiveClass();
    button.classList.add('active');
  }
});
//language change
function setlang(value) {
  //alert(value)
  $.ajax({
    url: "set-language",
    data: { data: value },
    success: function (result) {
      location.reload();
    }
  });
}

