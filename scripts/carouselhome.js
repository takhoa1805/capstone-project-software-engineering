document.addEventListener('DOMContentLoaded', function () {
  const carouselContainer = document.getElementById('carouselContainer');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const totalItems = document.querySelectorAll('.banner-carousel-item').length;
  let currentIndex = 0;
  let currentIndex1 = 0;
  const carouselContainer1 = document.getElementById('carouselContainer-1');
  const totalItems1 = document.querySelectorAll('.banner-carousel-item-1').length;
  let intervalId;  // Biến để lưu trữ ID của interval

  // Function to handle moving to the next item
  function showNext() {
    if (currentIndex < totalItems - 1) {
      currentIndex++;
      currentIndex1++;
    } else {
      currentIndex = 0;
      currentIndex1 = 0; 
    }
    updateCarousel();
  }

  // Function to handle moving to the previous item
  function showPrev() {
    if (currentIndex > 0) {
      currentIndex--;
      currentIndex1--;
    } else {
      currentIndex = totalItems - 1;
      currentIndex1 = totalItems1 - 1;
    }
    updateCarousel();
  }

  // Function to update the carousel position
  function updateCarousel() {
    const translateValue = -currentIndex * 100 + '%';
    const translateValue1 = -currentIndex1 * 100 + '%';
    carouselContainer.style.transform = 'translateX(' + translateValue + ')';
    carouselContainer1.style.transform = 'translateX(' + translateValue1 + ')';
    updateActiveDot();
    resetInterval();  // Gọi hàm để cài lại interval
  }

  // Function to update the active dot
  function updateActiveDot() {
    const dots = document.querySelectorAll('.banner-dot li');
    dots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }

  // Event listeners for the buttons
  prevBtn.addEventListener('click', showPrev);
  nextBtn.addEventListener('click', showNext);

  // Event listener for the dots
  const dots = document.querySelectorAll('.banner-dot li');
  dots.forEach((dot, index) => {
    dot.addEventListener('click', function () {
      currentIndex = index;
      currentIndex1 = index;
      updateCarousel();
    });
  });

  // Function to reset the interval
  function resetInterval() {
    clearInterval(intervalId);  // Xóa bỏ interval hiện tại
    intervalId = setInterval(showNext, 4000);  // Thiết lập interval mới
  }

  // Set the initial interval
  resetInterval();
});
