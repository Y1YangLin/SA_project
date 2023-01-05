document.querySelector(".liveToastBtn").onclick = function() {
    new bootstrap.Toast(document.querySelector('.toast')).show();
  }

  document.querySelector(".liveToastBtn-1").onclick = function() {
    new bootstrap.Toast(document.querySelector('.liveToast-1')).show();
  }
  
  document.querySelector(".liveToastBtn-2").onclick = function() {
    new bootstrap.Toast(document.querySelector('.liveToast-2')).show();
  }