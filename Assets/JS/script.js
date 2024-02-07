let arrow = document.querySelectorAll(".arrow");
            
            for (var i = 0; i <arrow.length; i++){
                arrow[i].addEventListener("click",(e)=>{
                    
                    let arrowParent = e.target.parentElement.parentElement;
                    
                    arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar= document.querySelector(".sidebar");
            let sidebarBtn= document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click",()=>{
                sidebar.classList.toggle("close");
            });

document.querySelector("#show-faq").addEventListener("click", function() {
    document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click", function() {
    document.querySelector(".popup").classList.remove("active");
});

var acc = document.getElementsByClassName("question");
var i;
for(i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        this.parentElement.classList.toggle("active");
        var answer = this.nextElementSibling; 
        if (answer.style.display === "block") {
            answer.style.display = "none";
        } else {
            answer.style.display = "block";
        }
        
    });
}
let searchBox = document.querySelector('#search-box');
let images = document.querySelectorAll('.search-container .image-container .card .content .img');

searchBox.oninput = () =>{
   images.forEach(hide => hide.style.display = 'none');
   let value = searchBox.value;
   images.forEach(filter =>{
      let title = filter.getAttribute('data-title');
      if(value == title){
         filter.style.display = 'block';
      }
      if(searchBox.value == ''){
         filter.style.display = 'block';
      }
   });
};