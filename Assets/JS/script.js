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