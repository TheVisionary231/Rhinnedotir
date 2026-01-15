
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
     var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
}
}

function myFunction1() {
    var dots = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
     var btnText = document.getElementById("myBtn1");
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
}
}

document.querySelectorAll('.read-more-button').forEach(button => {
    button.addEventListener('click', function() {
      let articleContent = this.previousElementSibling;
      articleContent.classList.toggle('show-full');
      if (articleContent.classList.contains('show-full')) {
        this.textContent = "Read Less";
      } else {
        this.textContent = "Read More";
      }
    });
  });

  function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }

  }
// calc
 let layar = document.getElementById("layar");
 function tambahAngka(nilai) {
 layar.value += nilai;
 }
 function clearLayar() {
 layar.value = "";
 }
 function hapusSatu() {
 layar.value = layar.value.slice(0, -1);
 }
 function hitung() {
 try {
 layar.value = eval(layar.value);
 } catch {
 layar.value = "Error!";
 }
 }

  function updateClock() { 
      const now = new Date(); 
      let hours = now.getHours(); 
      let minutes = now.getMinutes(); 
      let seconds = now.getSeconds(); 
      hours = hours < 10 ? '0' + hours : hours; 
      minutes = minutes < 10 ? '0' + minutes : minutes; 
      seconds = seconds < 10 ? '0' + seconds : seconds; 
      const timeString = `${hours}:${minutes}:${seconds}`; 
      document.getElementById('digitalClock').textContent = timeString; 
      // Tanggal dan hari 
      const days = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']; 
      const months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']; 
      const day = days[now.getDay()]; 
      const date = now.getDate(); 
      const month = months[now.getMonth()]; 
      const year = now.getFullYear(); 
      const fullDate = `${day}, ${date} ${month} ${year}`; 
      document.getElementById('dateDisplay').textContent = fullDate; 
    } 

 document.addEventListener('DOMContentLoaded', () => {
            const track = document.getElementById('carousel-track');
            const prevButton = document.getElementById('prev-button');
            const nextButton = document.getElementById('next-button');
            const indicators = document.querySelectorAll('.indicator');
            let currentIndex = 0;
            const totalSlides = 4;
            function updateCarousel() {
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
                indicators.forEach((ind, index) => {
                    ind.classList.toggle('active', index === currentIndex);
                });
            }
            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            });
            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    currentIndex = index;
                    updateCarousel();
                });
            });
            // Autoplay with pause on hover
            let autoplayInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }, 3000);
            const carousel = document.querySelector('.carousel');
            carousel.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
            carousel.addEventListener('mouseleave', () => {
                autoplayInterval = setInterval(() => {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    updateCarousel();
                }, 3000);
            });
            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowRight') nextButton.click();
                else if (e.key === 'ArrowLeft') prevButton.click();
            });
        });
    setInterval(updateClock, 1000); 
    updateClock(); 

