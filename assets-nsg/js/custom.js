$(window).scroll(function(){
  if ($(this).scrollTop() > 15) {
     $('.site-header').css({"top":"0"});
  } else {
     $('.site-header').css({"top":"55px"});
  }
});

$(document).ready(function(){
  AOS.init({
    disable: 'mobile'
  });
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
    dots: false,
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

$('#masterGallerySlider').owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  responsive: {
      0: {
          items: 1,
      },
      600: {
          items: 2,
      },
      1000: {
          items: 3,
          dots: true,
      }
  }
});

$(document).ready(function(){
  $(".photoGallerySlider").each(function(index) {
      $(this).owlCarousel({
          loop: true,
          margin: 15,
          nav: true,
          dots: false,
          responsive: {
              0: {
                  items: 1,
              },
              600: {
                  items: 2,
              },
              1000: {
                  items: 3,
              }
          }
      });
  });
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


//Brief JS
document.addEventListener('DOMContentLoaded', function() {
  document.addEventListener('click', function(event) {
      if (event.target.classList.contains('brief-btn')) {
          const briefButton = event.target;
          const accordionItem = event.target.closest('.accordion-item');
          const briefWrap = accordionItem.querySelector('.brief-wrap');
          // Toggle the "show" class on the brief wrap
          briefWrap.classList.toggle('show');
          // Toggle the "active" class on the brief button
          briefButton.classList.toggle('active');
          // Toggle the display of the brief wrap
          briefWrap.style.display = briefWrap.classList.contains('show') ? '' : 'none';
      }
  });

  document.querySelectorAll('.brief-wrap').forEach(briefWrap => {
      briefWrap.style.display = 'none';
  });
});


// Dark Theme JS
function toggleTheme() {
  // Get the checkbox
  var checkBox = document.getElementById("themeToggleCheckbox");
  // If the checkbox is checked, display the CSS
  if (checkBox.checked == true){
    $("head").append(
      '<link rel="stylesheet" href="assets/css/dark.css" type="text/css" id="darkThemeCss"/>'
    );
  } else {
    $("#darkThemeCss").remove();
  }
}


// Get the button and paragraph elements
var addButtons = document.getElementsByClassName('shradhanjali');
var paragraphs = document.getElementsByClassName('veer-img');

// Loop through each button and add event listener
for (var i = 0; i < addButtons.length; i++) {
  addButtons[i].addEventListener('click', function() {
    // Find the corresponding paragraph element
    var index = Array.prototype.indexOf.call(addButtons, this);
    var paragraph = paragraphs[index];

    // Add the 'highlight' class to the paragraph element
    paragraph.classList.add('offer-shradhanjali');
  });
}



// sidebar js

$(document).ready(() => {
  $('.sl-accordion').click(() => {
  })
  $('#sidebarDropdown2').click(() => {
      console.log('hellow world')
      $('#sidebarDropdown2').css({
          'background-color': '#000'
      })
  })




  $(document).ready(function () {
    // let sl_accordion = $('.sl-accordion');
    // sl_accordion.click(function() {
    //    sl_accordion.removeClass('menu-accordion-click');
    //     $(this).addClass('menu-accordion-click');
    //     // alert('click');
    // });
    let fl_accordion = $('.fl-accordion');
    fl_accordion.click(function () {
        $(this).addClass('fl-accordion-active');
        // alert('click');
    });
    let fl_n_accordion = $('.fl-n-accordion');
    fl_n_accordion.click
  });
  
  let test2 = document.querySelectorAll('.accordion-collapse .accordion-body ul li ul li');
  test2.forEach((e) => {
      if (e.classList.contains('qm-active')) {
          let currentElementId = e.closest('.accordion').id;
          console.log('sal;dkfj', e.closest('.accordion'))
          let mainParent = e.closest('.accordion').parentElement.parentElement.parentElement.classList.add('show')
          console.log('mainparent', mainParent)
          let menu_active = document.getElementById(currentElementId).classList.add('menu-active')
          console.log('menu-active', menu_active)
          console.log(currentElementId);
          let accordion = e.closest('.accordion');
          let currentElement = document.getElementById(currentElementId);
          console.log(currentElement.firstElementChild.childNodes[3])
          let addClass = currentElement.firstElementChild.childNodes[3];
          console.log('fl', addClass);
          if (addClass) {
              addClass.classList.add('show');
          }
          let mainParentElement = currentElement.firstElementChild.childNodes[1].childNodes[1];
          console.log(mainParentElement)
          if (mainParentElement) {
              mainParentElement.classList.add('collapsed');
          }
      }
  });
  let test = document.querySelectorAll('.accordion-collapse .accordion-body ul li');
  test.forEach((e) => {
      if (e.classList.contains('qm-active')) {
          let currentElementId = e.closest('.accordion').id;
          let menu_active = document.getElementById(currentElementId).classList.add('menu-active')
          console.log(currentElementId);
          let accordion = e.closest('.accordion');
          let currentElement = document.getElementById(currentElementId);
          console.log(currentElement.firstElementChild.childNodes[3])
          let addClass = currentElement.firstElementChild.childNodes[3];
          if (addClass) {
              addClass.classList.add('show');
          }
          let mainParentElement = currentElement.firstElementChild.childNodes[1].childNodes[1];
          console.log(mainParentElement)
          if (mainParentElement) {
              mainParentElement.classList.add('collapsed');
          }
      }
  });



})

//Our Code language change
function setlang(value) {
  //alert(value)
  $.ajax({
    url: "/set-language",
    data: { data: value },
    success: function (result) {
      location.reload();
    }
  });
}

$('#photoCarousel .carousel-item:first').addClass('active');
$('#photoCarousel .carousel-indicators.common-scrollbar button:first').addClass('active');

new DataTable('#nsg_datatable', {
  columnDefs: [
      {
          target: 2,
          visible: true,
          searchable: true
      },
      {
          target: 3,
          visible: true
      }
  ]
});
// sidebar js
$(document).ready(() => {
  $('.sl-accordion').click(() => {
  })
  $('#sidebarDropdown2').click(() => {
      console.log('hellow world')
      $('#sidebarDropdown2').css({
          'background-color': '#000'
      })
  })
  $(document).ready(function () {
    let fl_accordion = $('.fl-accordion');
    fl_accordion.click(function () {
        $(this).addClass('fl-accordion-active');
        // alert('click');
    });
    let fl_n_accordion = $('.fl-n-accordion');
    fl_n_accordion.click
  });
  
  let test2 = document.querySelectorAll('.accordion-collapse .accordion-body ul li ul li');
  test2.forEach((e) => {
      if (e.classList.contains('qm-active')) {
          let currentElementId = e.closest('.accordion').id;
          console.log('sal;dkfj', e.closest('.accordion'))
          let mainParent = e.closest('.accordion').parentElement.parentElement.parentElement.classList.add('show')
          console.log('mainparent', mainParent)
          let menu_active = document.getElementById(currentElementId).classList.add('menu-active')
          console.log('menu-active', menu_active)
          console.log(currentElementId);
          let accordion = e.closest('.accordion');
          let currentElement = document.getElementById(currentElementId);
          console.log(currentElement.firstElementChild.childNodes[3])
          let addClass = currentElement.firstElementChild.childNodes[3];
          console.log('fl', addClass);
          if (addClass) {
              addClass.classList.add('show');
          }
          let mainParentElement = currentElement.firstElementChild.childNodes[1].childNodes[1];
          console.log(mainParentElement)
          if (mainParentElement) {
              mainParentElement.classList.add('collapsed');
          }
      }
  });
  let test = document.querySelectorAll('.accordion-collapse .accordion-body ul li');
  test.forEach((e) => {
      if (e.classList.contains('qm-active')) {
          let currentElementId = e.closest('.accordion').id;
          let menu_active = document.getElementById(currentElementId).classList.add('menu-active')
          console.log(currentElementId);
          let accordion = e.closest('.accordion');
          let currentElement = document.getElementById(currentElementId);
          console.log(currentElement.firstElementChild.childNodes[3])
          let addClass = currentElement.firstElementChild.childNodes[3];
          if (addClass) {
              addClass.classList.add('show');
          }
          let mainParentElement = currentElement.firstElementChild.childNodes[1].childNodes[1];
          console.log(mainParentElement)
          if (mainParentElement) {
              mainParentElement.classList.add('collapsed');
          }
      }
  });
})