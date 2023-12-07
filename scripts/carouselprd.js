document.addEventListener('DOMContentLoaded', function () {
  const carouselContainer = document.getElementById('carouselContainer');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const totalItems = document.querySelectorAll('.banner-carousel-item-p').length;
  let currentIndex = 0;

  // Function to handle moving to the next item
  function showNext() {
      if (currentIndex < totalItems - 1) {
          currentIndex++;
      } else {
          currentIndex = 0;
      }
      updateCarousel();
  }

  // Function to handle moving to the previous item
  function showPrev() {
      if (currentIndex > 0) {
          currentIndex--;
      } else {
          currentIndex = totalItems - 1;
      }
      updateCarousel();
  }

  // Function to update the carousel position
  function updateCarousel() {
      // Lấy tất cả các thẻ con của carouselContainer
      const items = carouselContainer.querySelectorAll('.banner-carousel-item-p');
      
      const translateValue = -currentIndex * 100 + '%';
      
      items.forEach((item, index) => {
          item.style.transform = 'translateX(' + translateValue + ')';
      });
    
      updateActiveDot();
      resetInterval();  // Cài lại interval sau mỗi lần chuyển đổi slide
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
          updateCarousel();
      });
  });

  // Function to reset the interval
  function resetInterval() {
      clearInterval(intervalId);  // Xóa bỏ interval hiện tại
      intervalId = setInterval(showNext, 4000);  // Thiết lập interval mới
  }

  // Set the initial interval
  let intervalId = setInterval(showNext, 4000);
});
