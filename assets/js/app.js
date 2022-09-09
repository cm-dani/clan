AOS.init();

function languageSwitcherToggle(){
  const languageSwitcher = document.querySelector(".js-language-switcher"),
  languageSwitcherToggler = document.querySelector(".js-language-switcher-toggler");

  languageSwitcherToggler.addEventListener("click",function(){

      languageSwitcher.classList.toggle("open");
      this.querySelector("i").classList.toggle("fa-times");
      this.querySelector("i").classList.toggle("fa-cog");
  });
}
languageSwitcherToggle();


const flagsElement=document.getElementById("flags");

flagsElement.addEventListener("click",(e)=>{
console.log(e.target.parentElement.dataset.language);
id=e.target.parentElement.dataset.language;
if(id=="en"){
  location.href="/CLAN/en/index.html"
}else{
  location.href="/CLAN/index.html"
}
});