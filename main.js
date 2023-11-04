const signUp = document.querySelector(".signUp");
const modal = document.querySelector(".form-modal");
const close = document.querySelector(".close");

signUp.addEventListener("click",()=>{
	modal.style.display = "flex";
})

close.addEventListener("click",()=>{
	modal.style.display = "none";
})